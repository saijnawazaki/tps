<?php

namespace Sei\Controller;

use Sei\Model\Betdxmdl;

class Arcade
{
  public function __construct()
  {
    if(!isset($_SESSION['tps_username'])){
      header('location: ' . URL . 'linker/logoutforce');
    }

  }

     public function index()
     {
        require APP . 'view/arcade/index.php';
     }

//BETDX
     public function betdx()
     {
       $dx = new Betdxmdl();
        $nande = $dx->getbdxengine();
        $nando = $dx->getbdxplayer();
        require APP . 'view/arcade/betdx/index.php';
     }


}
