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
public function betdxoffline(){
  $dx = new Betdxmdl();
  $cx = new Universalmdl();
  $ha = $dx->getbdxengine();
  $na = $dx->getbdxplayer();

  $huh = 0;
  foreach ($na as $player) {
    if($player->bdx_bet == $ha->bdx_real){
      $huh++;
    }
  }

  if($huh == 0){
    //TIRED
    $remember = rand($ha->bdx_min, $ha->bdx_max);
    $dx->uprealbet($remember,1);
    header('location: ' . URL . 'arcade/betdx');
  }else{
    //WIN
    $base = 0;
    foreach ($na as $player) {
      if($player->bdx_bet == $ha->bdx_real){
        //UP
        $aya = $cx->getplayer($player->username);
        $expnya = 0;
        $expnya = $aya->exp + $ha->bdx_exp;
        $cx->upplayerexp($expnya, $player->username);
        $goldnya = 0;
        $goldnya = $aya->gold + $ha->bdx_gold;
        $cx->upplayergold($goldnya, $player->username);
        $c_user = $player->username;
      }else{
        //LOSER
        $aya = $cx->getplayer($player->username);
        $expnya = 0;
        $expnya = $aya->exp + 4;
        $cx->upplayerexp($expnya, $player->username);

      }
      $base++;
    }
    //matikan
    $dx->upbetdxpower(0, 1);
    $c_id = 'MS/TPS/ACHI/'.date('YmdHis');
    $c_nama = 'BetDX Winner';
    $c_konten = 'BetDX Winner with bet '.$ha->bdx_real.' (MAX: '.$ha->bdx_max.', MIN: '.$ha->bdx_min.', and PARTICIPLES: '.$base.') and got '.$ha->bdx_gift.' from '.$ha->bdx_sponsor.' also '.$ha->bdx_exp.' EXP and '.$ha->bdx_gold.' GOLD';

    $cx->insachi($c_id, $c_nama, $c_user, $c_konten);
    header('location: ' . URL . 'arcade/betdx');
  }

}


public function betdxresetpost(){
  if(isset($_POST['bdx_real'])){
    $dx = new Betdxmdl();
    $dx->clearbdxlog();
    $dx->clearbdxplayer();
    $dx->upbdxbetengine($_POST['bdx_max'], $_POST['bdx_min'], $_POST['bdx_real'], $_POST['bdx_exp'], $_POST['bdx_gold'], $_POST['bdx_gift'], $_POST['bdx_sponsor'], $_POST['bdx_end'], 1, 1);
    $dx->insbdxbetlog('<strong>Game dimulai</strong>. Sekarang Anda dapat memulai melakukan <strong>Bet</strong>. Tunggu sampai waktu habis, jika beruntung, nomor Anda dan nomor tebakan sama maka Andalah pemenangnya!', 'fa-power-off');
    header('location: ' . URL . 'arcade/betdx');
  }
}

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
       $fafa = $dx->getbdxbetpower(1);

       if($fafa->bdx_power == 1){
         $nande = $dx->getbdxengine();
         $nando = $dx->getbdxplayer();
         //$nanda = $dx->getbdxlog();
         $nandi = $dx->getbdxlog_detail();
         require APP . 'view/arcade/betdx/index.php';
       }elseif($fafa->bdx_power == 0){
         require APP . 'view/arcade/offline.php';
       }elseif($fafa->bdx_power == 2){
         require APP . 'view/arcade/maintenance.php';
       }


     }



     public function bdxpostbet(){
       if(isset($_POST['bdx_bet'])){
         $dx = new Betdxmdl();
         $cx = new Universalmdl();

         $suki = $cx->getserverdt();



         $fly = $dx->getbdxengine();
         $Vdata = $suki->jam;
         //MATE
         /*
         $Vdata = Seihelper::tpsservertime();

         if($Vdata >= $nande->bdx_end){
         */
         if($Vdata >= $fly->bdx_end){
           header('location: ' . URL . 'arcade/betdx?hana=Game selesai&hana_type=alert-info');
         }else{
           if(is_numeric($_POST['bdx_bet'])){

             $sesi = $_SESSION['tps_username'];
             $p_fullname = $_SESSION['tps_fullname'];
             $p_bet = $_POST['bdx_bet'];
             $p_rbet = 4;

             $boku = $dx->cekbdxbet($sesi);

             if($boku == 0){
               //New
               $dx->insbdxbetlog('<strong>'.$p_fullname.'</strong> bergabung.', 'fa-sign-in');
               $dx->insbdxbet($sesi, $p_bet, $p_rbet);
               $dx->insbdxbetlog('<strong>'.$p_fullname.'</strong> meng-bet <strong>'.$p_bet.'</strong>.', 'fa-thumb-tack');
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
                   $dx->insbdxbetlog('<strong>'.$p_fullname.'</strong> mengganti betnya menjadi <strong>'.$p_bet.'</strong>.', 'fa-undo');
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
         //MATE

       }

     }


}
