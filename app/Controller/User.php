<?php

namespace Sei\Controller;

use Sei\Model\Universalmdl;
use Sei\Model\Linkermdl;

class User
{


     public function index()
     {

       if(isset($_GET['id'])){
         if(ctype_alnum($_GET['id'])){
           $cx = new Universalmdl();
           $p_id = $_GET['id'];
           $nori = $cx->getplayersolo($p_id);
           require APP . 'view/user/index.php';
         }else{
           header('location: ' . URL);
         }

       }else{
         header('location: ' . URL);
       }
     }

     public function edit(){
       if(!isset($_SESSION['tps_username'])){
         header('location: ' . URL . 'linker/logoutforce');
       }else{
         $fx = new Linkermdl();
         $p_sesi = $_SESSION['tps_username'];
         $hashi = $fx->getuserdetafullfx($p_sesi);
         require APP . 'view/user/edit.php';
       }
     }

     public function editpost(){
       if(!isset($_SESSION['tps_username'])){
         header('location: ' . URL . 'linker/logoutforce');
       }else{
         //:D
         if(isset($_POST['username'])){
           //CEK
           $dx = new Linkermdl();
           $cek = null;

           if(!ctype_alnum($_POST["username"])){
             $cek .= '[ERROR] Invalid Username ';
           }else{
             if($_POST['username'] != $_SESSION['tps_username']){
               $cek .= '[ERROR] Username is hacked ';
             }
           }

           $p_pass = null;
           if(isset($_POST['password'])){
             if($_POST['password'] != ''){
               if(!ctype_alnum($_POST["password"])){
                 $cek .= '[ERROR] Invalid Password ';
               }else{
                 $p_pass = $_POST['password'];
               }
             }
           }

           //XD
           if(filter_var($_POST["fullname"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW) === false){
             $cek .= '[ERROR] Invalid Fullname ';
           }else{
             if(strlen($_POST["fullname"]) > 100){
               $cek .= '[ERROR] Fullname more than 100 ';
             }
           }

           if($_POST["lineid"] != ''){
             if(!ctype_alnum($_POST["lineid"])){
               $cek .= '[ERROR] Invalid Line ID ';
             }else{
               if(strlen($_POST["lineid"]) > 50){
                 $cek .= '[ERROR] Line ID more than 50 ';
               }else{
                 $kito = $dx->cekuserlinedx($_POST["lineid"]);
                 if($kito != 0){
                   $kato = $dx->cekuserlinedxfx($_POST["lineid"]);
                   if($kato->username != $_SESSION['tps_username']){
                     $cek .= '[ERROR] Line ID already taken ';
                   }

                 }
               }
             }
           }else{
             $_POST["lineid"] = null;
           }

           if($_POST["nohp"] != ''){
             if(!ctype_digit($_POST["nohp"])){
               $cek .= '[ERROR] Invalid Phone Number ';
             }else{
               if(strlen($_POST["nohp"]) > 50){
                 $cek .= '[ERROR] Phone Number more than 50 ';
               }else{
                 $kito = $dx->cekusernohpdx($_POST["nohp"]);
                 if($kito != 0){
                   $kato = $dx->cekusernohpdxfx($_POST["nohp"]);
                   if($kato->username != $_SESSION['tps_username']){
                     $cek .= '[ERROR] Phone Number already taken ';
                   }

                 }
               }
             }
           }else{
             $_POST["nohp"] = null;
           }

           if($_POST["email"] != ''){
             if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false){
               $cek .= '[ERROR] Invalid Email ';
             }else{
               if(strlen($_POST["email"]) > 100){
                 $cek .= '[ERROR] Email more than 100 ';
               }else{
                 $kito = $dx->cekuseremaildx($_POST["email"]);
                 if($kito != 0){
                   $kato = $dx->cekuseremaildxfx($_POST["email"]);
                   if($kato->username != $_SESSION['tps_username']){
                     $cek .= '[ERROR] Email already taken ';
                   }

                 }
               }
             }
           }else{
             $_POST["email"] = null;
           }
           //XD

           if($cek == null){
             $p_user = $_SESSION['tps_username'];
             if($p_pass != null){
               $dx->upuserdatapass($p_user, $_POST['fullname'], md5($p_pass));
               $dx->upuserdatadeta($p_user, $_POST['lineid'], $_POST['nohp'], $_POST['email']);
             }else{
               //pass null
               $dx->upuserdata($p_user, $_POST['fullname']);
               $dx->upuserdatadeta($p_user, $_POST['lineid'], $_POST['nohp'], $_POST['email']);
             }
             header('location: ' . URL.'user/edit?hana=Updated&hana_type=alert-success');
           }else{
             header('location: ' . URL.'user/edit?hana=ERROR: '.$cek.'&hana_type=alert-danger');
           }

         }
         //:D
       }
     }


}
