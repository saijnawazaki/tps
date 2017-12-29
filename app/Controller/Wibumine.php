<?php

namespace Sei\Controller;

use Sei\Model\Wibuminemdl;
use Sei\Model\Linkermdl;



class Wibumine
{
  public function __construct()
  {
    if(!isset($_SESSION['tps_username'])){
      header('location: ' . URL . 'linker/logoutforce');
    }else{
      $hx = new Wibuminemdl();
      if(isset($_SESSION['tps_username'])){
          $p_sesi = $_SESSION['tps_username'];
      }else{
          $p_sesi = null;
      }
      //
      if($hx->cekplayerav($p_sesi) == 0){
        $hx->insplayer($p_sesi, 100, 0);
      }
      //
    }
  }

//=========================================================================
  public function index()
  {
    $fx = new Linkermdl();

    if(isset($_SESSION['tps_username'])){
        $p_sesi = $_SESSION['tps_username'];
    }else{
        $p_sesi = null;
    }


    $s_linker = $fx->getuserdx($p_sesi);

    require APP . 'view/arcade/wibumine/index.php';
  }

  public function battlefield()
  {
    $hx = new Wibuminemdl();

    $wm_bf = $hx->getbattlefield();
    require APP . 'view/arcade/wibumine/battlefield.php';
  }

  public function plant()
  {
    if(isset($_GET['no']) AND isset($_SESSION['tps_username']) AND isset($_GET['fm'])){
      if(ctype_digit($_GET['no'])){
        if(ctype_alpha($_GET['fm'])){
          if($_GET['no'] > 100){
            //ENCODE TO JSON
            $p_res = new \stdClass();
            $p_res->status = 'hack';
            $p_res->konten = '> 100';
            echo json_encode($p_res);
            //END
          }else{
            //GBK System
            $hx = new Wibuminemdl();
            $gx = new Linkermdl();
            $p_no = $_GET['no'];
            $p_fm = strtolower($_GET['fm']);
            $p_username = $_SESSION['tps_username'];
            $kaku = $hx->cekmineusername($p_no);
            if($kaku->username == null){
              $p_dm = rand(0,100);

              $hx->upmine($p_no, $p_username, $p_fm, $p_dm);
              $pp_fullname = $gx->getfullnameuser($p_username);
              $hx->inslog($pp_fullname->fullname.' menklaim sebuah mine', 'fa-thumb-tack');
              //ENCODE TO JSON
              $p_res = new \stdClass();
              $p_res->status = 'ok';
              $p_res->konten = $p_no.' berhasil di klaim';
              echo json_encode($p_res);
              //END
            }else{
              //2ND LAYER

              if($kaku->username == $p_username){

                $hx->upmine($p_no, null, null, null);
                $pp_fullname = $gx->getfullnameuser($p_username);
                $hx->inslog($pp_fullname->fullname.' melepaskan mine no '.$p_no, 'fa-thumb-tack');
                //ENCODE TO JSON
                $p_res = new \stdClass();
                $p_res->status = 'ok';
                $p_res->konten = $p_no.' berhasil dilepaskan klaim';
                echo json_encode($p_res);
                //END
              }else{
                //LAWAN
                $kiko = $hx->cekmineforce($p_no);
                $ero = \SeiHelper::wm_gbk_battle($p_fm, $kiko->force_mine); // KAMU VS DIA
                $dmg = $kiko->dmg_mine;
                $kamu = $hx->cekminer($p_username);
                $dia = $hx->cekminer($p_username);
                $dia_fullname = $gx->getfullnameuser($kiko->username);
                $pp_fullname = $gx->getfullnameuser($p_username);

                if($ero == 0){
                  //KALAH
                  $tota = 0;
                  $tota = (($kamu->hp) - $dmg);
                  $hx->uphpminer($tota, $p_username);
                  $tete = 0;
                  $titi = 0;
                  $tete = (($kamu->score) + 1);
                  $titi = (($dia->score) + 10);
                  $hx->upscoreminer($tete, $p_username);
                  $hx->upscoreminer($titi, $kiko->username);

                  $hx->upmine($p_no, null, null, null);

                  $hx->inslog($pp_fullname->fullname.' ('.\SeiHelper::wm_gbk_names($p_fm).') kalah melawan '.$dia_fullname->fullname.'('.\SeiHelper::wm_gbk_names($kiko->force_mine).'). '.$pp_fullname->fullname.' menerima '.$dmg.' Damage dan 1 Score. '.$dia_fullname->fullname.' mendapatkan 10 Score. Mine no '.$p_no.' dibersihkan', 'fa-thumb-tack');
                  //ENCODE TO JSON
                  $p_res = new \stdClass();
                  $p_res->status = 'ok';
                  $p_res->konten = 'Kamu '.'('.\SeiHelper::wm_gbk_names($p_fm).') kalah melawan '.$dia_fullname->fullname.'('.\SeiHelper::wm_gbk_names($kiko->force_mine).'). Kamu menerima '.$dmg.' Damage dan 1 Score. '.$dia_fullname->fullname.' mendapatkan 10 Score. Mine no '.$p_no.' dibersihkan';
                  echo json_encode($p_res);
                  //END
                }elseif($ero == 1){
                  //MENANG
                  $tota = (($dia->hp) - $dmg);
                  $hx->uphpminer($tota, $kiko->username);
                  $tete = 0;
                  $titi = 0;
                  $tete = (($kamu->score) + 15);
                  $titi = (($dia->score) + 1);
                  $hx->upscoreminer($tete, $p_username);
                  $hx->upscoreminer($titi, $kiko->username);
                  //$hx->upscoreminer(15, $kiko->username);
                  //$hx->upscoreminer(1, $p_username);

                  $hx->upmine($p_no, null, null, null);

                  $hx->inslog($pp_fullname->fullname.' ('.\SeiHelper::wm_gbk_names($p_fm).') menang melawan '.$dia_fullname->fullname.'('.\SeiHelper::wm_gbk_names($kiko->force_mine).'). '.$dia_fullname->fullname.' menerima '.$dmg.' Damage dan 1 Score. '.$pp_fullname->fullname.' mendapatkan 15 Score. Mine no '.$p_no.' dibersihkan', 'fa-thumb-tack');
                  //ENCODE TO JSON
                  $p_res = new \stdClass();
                  $p_res->status = 'ok';
                  $p_res->konten = 'Kamu '.'('.\SeiHelper::wm_gbk_names($p_fm).') menang melawan '.$dia_fullname->fullname.'('.\SeiHelper::wm_gbk_names($kiko->force_mine).'). '.$dia_fullname->fullname.' menerima '.$dmg.' Damage dan 1 Score. Kamu mendapatkan 15 Score. Mine no '.$p_no.' dibersihkan';
                  echo json_encode($p_res);
                  //END
                }elseif($ero == 2){
                  //SERI
                  $hx->upmine($p_no, null, null, null);
                  $tete = 0;
                  $titi = 0;
                  $tete = (($kamu->score) + 1);
                  $titi = (($dia->score) + 1);
                  $hx->upscoreminer($tete, $p_username);
                  $hx->upscoreminer($titi, $kiko->username);

                  $hx->inslog($pp_fullname->fullname.' ('.\SeiHelper::wm_gbk_names($p_fm).') imbang melawan '.$dia_fullname->fullname.'('.\SeiHelper::wm_gbk_names($kiko->force_mine).'). '.$pp_fullname->fullname.' dan '.$dia_fullname->fullname.' mendapatkan 1 Score. Mine no '.$p_no.' dibersihkan', 'fa-thumb-tack');
                  //ENCODE TO JSON
                  $p_res = new \stdClass();
                  $p_res->status = 'ok';
                  $p_res->konten = 'Kamu '.'('.\SeiHelper::wm_gbk_names($p_fm).') imbang melawan '.$dia_fullname->fullname.'('.\SeiHelper::wm_gbk_names($kiko->force_mine).'). Kamu dan '.$dia_fullname->fullname.' mendapatkan 1 Score. Mine no '.$p_no.' dibersihkan';
                  echo json_encode($p_res);
                  //END
                }

              }
              //2nD LAYER
            }

            //GBK SYSTEM
          }
        }else{
          //ENCODE TO JSON
          $p_res = new \stdClass();
          $p_res->status = 'hack';
          $p_res->konten = 'GBK value FM modified';
          echo json_encode($p_res);
          //END
        }
      }else{
        //ENCODE TO JSON
        $p_res = new \stdClass();
        $p_res->status = 'hack';
        $p_res->konten = 'GBK value NO modified';
        echo json_encode($p_res);
        //END
      }
    }else{
      //ENCODE TO JSON
      $p_res = new \stdClass();
      $p_res->status = 'hack';
      $p_res->konten = 'GBK value NO DATA modified';
      echo json_encode($p_res);
      //END
    }
  }

  public function reset()
  {
    $hx = new Wibuminemdl();
    for($x = 1; $x <= 100; $x++){
      $hx->insbattlefield($x, null, null, null);
    }
    echo 'Done';
  }


//
}
