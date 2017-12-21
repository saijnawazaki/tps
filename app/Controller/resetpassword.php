<?php
namespace Sei\Controller;

class Resetpassword
{

    public function index()
    {
      if(isset($_SESSION['tps_username'])){
        header('location: ' . URL . 'portal');
      }else{
        require APP . 'view/home/resetpassword.php';
      }

    }



}
