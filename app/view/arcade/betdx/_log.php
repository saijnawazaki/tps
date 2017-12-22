<?php
$monito = null;
foreach ($nanda as $log) {
  if($monito != $log->ts_konten){
    echo '<span class="label label-primary">'.$log->ts_konten.'</span><br>';
    echo '<i class="fa '.$log->icon_konten.'" aria-hidden="true"></i> '.$log->log_konten.'<br>';
    $monito = $log->ts_konten;
  }else{
    echo '<i class="fa '.$log->icon_konten.'" aria-hidden="true"></i> '.$log->log_konten.'<br>';
  }

}
?>
