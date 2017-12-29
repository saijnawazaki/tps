<?php
use Sei\Model\Universalmdl;
class SeiHelper
{

    static public function sei_echo($values) {

        $values = htmlspecialchars($values, ENT_QUOTES, 'UTF-8');

        return $values;
    }

    static public function wm_gbk_names($values) {

        if($values == 'g'){
          return 'Gunting';
        }elseif($values == 'b'){
          return 'Batu';
        }elseif($values == 'k'){
          return 'Kertas';
        }
    }

    static public function wm_gbk_battle($a, $b) {
      $kamu = $a;
      $dia = $b;
      // g = Gunting b = batu k = kertas
      // 1 = MENANG 0 = KALAH 2 == SERI
      //GUNTING
      if($kamu == 'g' AND $dia == 'g'){
        return 2;
      }
      elseif($kamu == 'g' AND $dia == 'b'){
        return 0;
      }
      elseif($kamu == 'g' AND $dia == 'k'){
        return 1;
      }
      //BATU
      elseif($kamu == 'b' AND $dia == 'g'){
        return 1;
      }
      elseif($kamu == 'b' AND $dia == 'b'){
        return 2;
      }
      elseif($kamu == 'b' AND $dia == 'k'){
        return 0;
      }
      //KERTAS
      elseif($kamu == 'k' AND $dia == 'g'){
        return 0;
      }
      elseif($kamu == 'k' AND $dia == 'b'){
        return 1;
      }
      elseif($kamu == 'k' AND $dia == 'k'){
        return 2;
      }
      //
    }

    static public function valuecheck($values) {

        if($values == null){
          return 'No data provided';
        }else{
          return $values;
        }
    }

    static public function flagnames($values) {

      if($values == 'id'){
        return 'Indonesia';
      }else{
        return strtoupper($values);
      }

    }

    static public function citynames($values) {

      if($values == 'jkt'){
        return 'Jakarta';
      }
      elseif($values == 'skw'){
        return 'Singkawang';
      }
      elseif($values == 'smg'){
        return 'Semarang';
      }
      elseif($values == 'mlg'){
        return 'Malang';
      }
      elseif($values == 'pnk'){
        return 'Pontianak';
      }
      elseif($values == 'tng'){
        return 'Tangerang';
      }
      else{
        return strtoupper($values);
      }

    }

    static public function genderconverd($values) {

        if($values == 'No data provided'){
          return 'No data provided';
        }elseif($values == 'm'){
          return 'Male';
        }elseif($values == 'f'){
          return 'Female';
        }

    }

    static public function tpsservertime(){
      $cx = new Universalmdl();

      $suki = $cx->getserverdt();

      return $suki->jam;
    }

    static public function gentime($x){
      $z = date('Y-m-d H:i:s');
      $newtimestamp = strtotime($z.' + '.$x.' second');
      return date('Y-m-d H:i:s', $newtimestamp);
    }



    static public function tps_rank($x) {

      if($x >= 0 AND $x <=20){
        return 'Newbie';
      }elseif($x >= 21 AND $x <=60){
        return 'Novice';
      }elseif($x >= 61 AND $x <=90){
        return 'Private';
      }elseif($x >= 91 AND $x <=130){
        return 'Corporal';
      }elseif($x >= 131 AND $x <=180){
        return 'Sergeant';
      }elseif($x >= 181 AND $x <=240){
        return 'Master Sergeant';
      }elseif($x >= 241 AND $x <=310){
        return 'Lieutenant';
      }elseif($x >= 311 AND $x <=390){
        return 'Captain';
      }elseif($x >= 391 AND $x <=480){
        return 'Mayor';
      }elseif($x >= 481 AND $x <=580){
        return 'Lieutenant Colonel';
      }elseif($x >= 581 AND $x <=700){
        return 'Colonel';
      }elseif($x >= 701 AND $x <=840){
        return 'Brigadier';
      }elseif($x >= 841 AND $x <=1000){
        return 'Mayor General';
      }elseif($x >= 1001 AND $x <=1180){
        return 'Lieutenant General';
      }elseif($x >= 1181 AND $x <=1380){
        return 'General';
      }elseif($x >= 1381 AND $x <=1620){ //240
        return 'Commander';
      }elseif($x >= 1621 AND $x <=10000){
        return 'Pro';
      }elseif($x >= 10001){
        return 'God';
      }

    }

}
