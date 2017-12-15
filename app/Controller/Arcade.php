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

     public function bdxpostbet(){
       if(isset($_POST['bdx_bet'])){
         $dx = new Betdxmdl();
         $sesi = $_SESSION['tps_username'];
         $p_bet = $_POST['bdx_bet'];
         $p_rbet = 5;

         $boku = $dx->cekbdxbet($sesi);

         if($boku == 0){
           //New
           $dx->insbdxbet($sesi, $p_bet, $p_rbet);
           header('location: ' . URL . 'arcade/betdx?hana='.$p_bet.' berhasil di bet&hana_type=alert-success');
         }else{
           //PRO
           $nando = $dx->getbdxbet($sesi);
           $oka = $nando->bdx_rbet;
           $oka = $oka - 1;
           if($oka >= 0){
             $dx->upbdxrbet($oka, $sesi);
             $dx->upbdxbet($p_bet, $sesi);
             header('location: ' . URL . 'arcade/betdx?hana='.$p_bet.' berhasil di bet&hana_type=alert-success');
           }else{
             header('location: ' . URL . 'arcade/betdx?hana=Bet Anda habis&hana_type=alert-danger');
           }

         }

       }

     }


}
