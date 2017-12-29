<?php
if(isset($_SESSION['tps_username'])){
  $v_user = $_SESSION['tps_username'];
}else{
  $v_user = null;
}
?>
<div class="row">
  <?php

  foreach ($wm_bf as $mine) {

    if($mine->username == $v_user){
      echo '<div class="col-lg-2 col-xs-6" style="margin-bottom: 10px;">';
      echo '<button class="btn btn-default" style="width: 100%; height: 90px; background-color: #9CCC65;" id="'.$mine->no.'" onclick="kafir(this)">';
      echo '<h4>'.$mine->no.'</h4>';
      echo '<small>'.SeiHelper::wm_gbk_names($mine->force_mine).'</small>';
      echo '</button>';
      echo '</div>';
    }else{
      echo '<div class="col-lg-2 col-xs-6" style="margin-bottom: 10px;">';
      echo '<button class="btn btn-default" style="width: 100%; height: 90px;" id="'.$mine->no.'" onclick="kafir(this)">';
      echo '<h4>'.$mine->no.'</h4>';
      echo '</button>';
      echo '</div>';
    }

  }

  ?>

</div>
