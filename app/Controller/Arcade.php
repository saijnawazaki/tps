<?php

namespace Sei\Controller;

use Sei\Model\Betdxmdl;
use Sei\Model\Linkermdl;
use Sei\Model\Universalmdl;

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


//Universal

//BETDX

public function tpsservertime(){
  $cx = new Universalmdl();

  $suki = $cx->getserverdt();

  echo $suki->jam;
}

public function betdxreset(){
  if($_SESSION['tps_type_account'] != 'admin'){
    header('location: ' . URL . 'arcade/betdx');
  }else{
    require APP . 'view/arcade/betdx/reset.php';
  }

}

public function linkerstatus(){
  $fx = new Linkermdl();
  $dx = new Betdxmdl();
  $p_sesi = $_SESSION['tps_username'];
  $s_linker = $fx->getuserdx($p_sesi);
  $s_betdx = $dx->getbdxbet($p_sesi);
  require APP . 'view/arcade/betdx/_headerbot.php';
}

public function bdxlogstatus(){

  $dx = new Betdxmdl();
  $nanda = $dx->getbdxlog();
  require APP . 'view/arcade/betdx/_log.php';
}

public function bdxplayer(){

  $dx = new Betdxmdl();
$nando = $dx->getbdxplayer();
  require APP . 'view/arcade/betdx/_player.php';
}

     public function betdx()
     {
       $dx = new Betdxmdl();
        $nande = $dx->getbdxengine();
        $nando = $dx->getbdxplayer();
        //$nanda = $dx->getbdxlog();
        $nandi = $dx->getbdxlog_detail();
        require APP . 'view/arcade/betdx/index.php';
     }

     public function bdxpostbet(){
       if(isset($_POST['bdx_bet'])){

         if(is_numeric($_POST['bdx_bet'])){
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
               if($dx->cekbetnya($p_bet) != 0){
                 header('location: ' . URL . 'arcade/betdx?hana='.$p_bet.' sudah di bet dulu&hana_type=alert-warning');
               }else{
                 $dx->upbdxrbet($oka, $sesi);
                 $dx->upbdxbet($p_bet, $sesi);
                 header('location: ' . URL . 'arcade/betdx?hana='.$p_bet.' berhasil di bet&hana_type=alert-success');
               }
             }else{
               header('location: ' . URL . 'arcade/betdx?hana=Bet Anda habis&hana_type=alert-danger');
             }

           }
         }else{
           //ERROR
           header('location: ' . URL . 'arcade/betdx?hana=Bet Bukan Nomor&hana_type=alert-danger');
         }

       }

     }


}
