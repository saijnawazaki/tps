<?php

namespace Sei\Controller;

//use Sei\Model\Linkermdl;

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
        echo $_SESSION['tps_username'];
     }


}