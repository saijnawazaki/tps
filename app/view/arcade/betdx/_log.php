<?php
foreach ($nanda as $log) {
  echo '<span class="label label-primary">'.$log->ts_konten.'</span><br><i class="fa '.$log->icon_konten.'" aria-hidden="true"></i> '.$log->log_konten.'<br>';
}
?>
