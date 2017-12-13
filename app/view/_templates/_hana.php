<?php
if(isset($_GET['hana_type'])){
  echo '<div class="alert '.$_GET['hana_type'].'" role="alert">'.$_GET['hana'].'</div>';
}
?>
