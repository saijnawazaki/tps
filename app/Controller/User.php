<?php

namespace Sei\Controller;

use Sei\Model\Universalmdl;

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


}
