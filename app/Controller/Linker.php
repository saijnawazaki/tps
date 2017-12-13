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
              echo 'LOGIN';
            }else{
              echo 'PASSWORD';
            }
          }else{
            echo 'ERROR';
          }


        }

     }


}
