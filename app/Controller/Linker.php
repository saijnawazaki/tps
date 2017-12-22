<?php

namespace Sei\Controller;

use Sei\Model\Linkermdl;

class Linker
{

  public function reg()
  {
     if (isset($_POST["username"])) {
       $dx = new Linkermdl();
       $cek = null;

       if(!ctype_alnum($_POST["username"])){
         $cek .= '[ERROR] Invalid Username ';
       }else{
         if(strlen($_POST["username"]) > 20){
           $cek .= '[ERROR] Username more than 20 ';
         }else{
           $kito = $dx->cekuserdx($_POST["username"]);
           if($kito != 0){
             $cek .= '[ERROR] Username already taken ';
           }
         }
       }

       if(!ctype_alnum($_POST["password"])){
         $cek .= '[ERROR] Invalid Password ';
       }

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
               $cek .= '[ERROR] Line ID already taken ';
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
               $cek .= '[ERROR] Phone Number already taken ';
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
               $cek .= '[ERROR] Email already taken ';
             }
           }
         }
       }else{
         $_POST["email"] = null;
       }



       if($cek == null){
         //NO ERROR

         $dx->insuser(strtolower($_POST["username"]), md5($_POST["password"]), $_POST["fullname"], 'user');
         $dx->insuserdetail(strtolower($_POST["username"]), strtolower($_POST["lineid"]), $_POST["nohp"], strtolower($_POST["email"]), 'no_pp.png');
         header('location: ' . URL.'register?hana=Registered&hana_type=alert-success');
       }else{
         header('location: ' . URL.'register?hana=ERROR: '.$cek.'&hana_type=alert-danger');
       }



     }
   }

     public function index()
     {
        if (isset($_POST["username"])) {
          if(ctype_alnum($_POST["username"]) AND ctype_alnum($_POST["password"])){
            $data = new Linkermdl();
            $nande = $data->checkuser($_POST['username'], md5($_POST['password']));

            if($nande != 0){
              $hanami = $data->getuser($_POST['username'], md5($_POST['password']));
              $izumi = $data->getuserdeta($_POST['username']);
              session_regenerate_id();
              $_SESSION['tps_username'] = $hanami->username;
              $_SESSION['tps_fullname'] = $hanami->fullname;
              $_SESSION['tps_type_account'] = $hanami->type_account;

              //ADDED
              $_SESSION['tps_pp'] = $izumi->pp;

              $nanami = $data->checkplayer($_POST['username']);
              if($nanami != 0){
                $laura = $data->getplayer($_POST['username']);
                $_SESSION['tps_exp'] = $laura->exp;
                $_SESSION['tps_gold'] = $laura->gold;
              }else{
                $data->insplayer($_POST['username']);

                $laura = $data->getplayer($_POST['username']);
                $_SESSION['tps_exp'] = $laura->exp;
                $_SESSION['tps_gold'] = $laura->gold;
              }

              session_write_close();
              $r_id_sesi = session_id();
              $data->upuser_session($r_id_sesi, $_POST["username"]);

              header('location: ' . URL . 'portal/index');
            }else{
              header('location: ' . URL.'?hana=Username or Password wrong&hana_type=alert-warning');
            }
          }else{
            header('location: ' . URL.'?hana=Username or Password invalid&hana_type=alert-danger');
          }


        }

     }

     public function logout(){
      session_unset();
      session_destroy();

        header('location: ' . URL.'?hana=Logout Successfuly&hana_type=alert-success');

     }

     public function logoutforce(){
      session_unset();
      session_destroy();

        header('location: ' . URL.'?hana=Login First&hana_type=alert-danger');

     }


}
