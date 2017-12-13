<?php

namespace Sei\Controller;

use Sei\Model\Linkermdl;

class Linker
{

     public function index()
     {
        if (isset($_POST["username"])) {
          if(ctype_alnum($_POST["username"]) AND ctype_alnum($_POST["password"])){
            $data = new Linkermdl();
            $nande = $data->checkuser($_POST['username'], md5($_POST['password']));

            if($nande != 0){
              $hanami = $data->getuser($_POST['username'], md5($_POST['password']));
              session_regenerate_id();
              $_SESSION['tps_username'] = $hanami->username;
              $_SESSION['tps_fullname'] = $hanami->fullname;
              $_SESSION['tps_type_account'] = $hanami->fullname;

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
              echo 'PASSWORD';
            }
          }else{
            echo 'ERROR';
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
