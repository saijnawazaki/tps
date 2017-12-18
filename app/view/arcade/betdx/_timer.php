<?php
$Vdata = Seihelper::tpsservertime();

if($Vdata >= $nande->bdx_end){
?>
<h1><strong><?= $nande->bdx_real; ?></strong></h1>
<hr style="max-width: 200px;">
<h3 data-toggle="tooltip" title="Time remaining to bet" id="demo">END</i></h3>
<hr style="max-width: 200px;">

<script>
$('[data-toggle="tooltip"]').tooltip({
    animated: 'fade',
    html: true
});
</script>
<?php
$huh = 0;
foreach ($nando as $player) {
  if($player->bdx_bet == $nande->bdx_real){
    $huh++;
  }
}

if($huh == 0){
  echo '<h3>TIRED</h3>Nobody win this round';
}else{
  echo '<h3>WINNER</h3>';
  foreach ($nando as $player) {
    if($player->bdx_bet == $nande->bdx_real){

      $statnya = $player->fullname.'<br>Rank: '.Seihelper::tps_rank($player->exp).'<br>EXP: '.$player->exp.'<br>GOLD: '.$player->gold;
      echo '<div class="mf-pin" data-toggle="tooltip" title="'.$statnya.'">
            <img src="'.URL.'assets/images/static/tps_nopp.png" style="background-color: #fff">
            '.$player->fullname.'
            </div>';
    }
  }
}
?>
<hr style="max-width: 200px;">
<?php
}else{
  ?>
  <script>
  function clol(hours){
    if(hours < 10){
      return '0' + hours;
    }
    else{
      return hours;
    }
  }
  // Set the date we're counting down to
  var gege = null;


  $.get("<?= URL ?>arcade/tpsservertime", myCallback, 'text');

  function myCallback(data)
  {
     gege = data;

     var countDownDate = new Date("<?= $nande->bdx_end; ?>").getTime();
     //var lolcx = new Date(gege).getTime();
     var dxhours = 00;
     // Update the count down every 1 second
     kaka = new Date(gege);

     setInterval(function() {
       kaka.setSeconds(kaka.getSeconds() + 1);
     }, 1000);


     var x = setInterval(function() {

     //THIS TOO HEAVY

     //:D

       // Get todays date and time
       var now = new Date(kaka).getTime();

       // Find the distance between now an the count down date
       var distance = countDownDate - now;

       // Time calculations for days, hours, minutes and seconds
       var days = Math.floor(distance / (1000 * 60 * 60 * 24));
       var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
       var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
       var seconds = Math.floor((distance % (1000 * 60)) / 1000);

       // Display the result in the element with id="demo"



       document.getElementById("demo").innerHTML = clol(days) + " days " + clol(hours) + ":"
       + clol(minutes) + ":" + clol(seconds);

       // If the count down is finished, write some text
       if (distance < 0) {
         clearInterval(x);
         document.getElementById("demo").innerHTML = "TIME UP";
         window.location = "<?= URL ?>arcade/betdx";
       }
     }, 1000);

  }





  </script>
  <h1><strong>???</strong></h1>
  <hr style="max-width: 200px;">
  <h3 data-toggle="tooltip" title="Time remaining to bet" id="demo"><i class="fa fa-refresh fa-spin fa-fw"></i></h3>
  <hr style="max-width: 200px;">

  <?php
}

?>
