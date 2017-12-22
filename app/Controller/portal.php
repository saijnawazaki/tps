<?php

namespace Sei\Controller;

use Sei\Model\Linkermdl;

class Portal
{
  public function __construct()
  {
    if(!isset($_SESSION['tps_username'])){
      header('location: ' . URL . 'linker/logoutforce');
    }
  }

     public function index()
     {
       $dx = new Linkermdl();
       if(isset($_SESSION['tps_username'])){
         $p_sesi = $_SESSION['tps_username'];
       }else{
         $p_sesi = null;
       }

       $sp_naniga = $dx->getuserdetafull($p_sesi);
        require APP . 'view/portal/index.php';
     }


}
