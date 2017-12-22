<?php
if(isset($_GET['hana_type'])){
  echo '<div class="alert '.SeiHelper::sei_echo($_GET['hana_type']).'" role="alert">'.SeiHelper::sei_echo($_GET['hana']).'</div>';
}
?>
