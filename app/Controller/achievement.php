<?php

namespace Sei\Controller;

use Sei\Model\Universalmdl;

class achievement
{
  public function __construct()
  {
    if(!isset($_SESSION['tps_username'])){
      header('location: ' . URL . 'linker/logoutforce');
    }

  }

     public function index()
     {
        $cx = new Universalmdl();
        $hanashi = $cx->getachie();
        require APP . 'view/achievement/index.php';
     }




}
