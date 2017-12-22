<script>
$(document).ready(function(){


    $('[data-toggle="tooltip"]').tooltip({
        animated: 'fade',
        html: true
    });


});

</script>
<div class="row">
  <div class="col-lg-12 col-xs-12 text-center">
    <h1>Lobby</h1>
    <hr style="max-width: 200px;">
    <button class="btn btn-primary" id="gadxjoin">JOIN</button>
    <?php
    if(isset($_SESSION['tps_type_account'])){
      if($_SESSION['tps_type_account'] == 'admin'){
        echo '<a href="'.URL.'arcade" class="btn btn-warning" id="gadxjoin">START</a>';
      }
    }
    ?>
    <hr style="max-width: 200px;">
    <?php
      if(count($doko) == 0){
        echo 'Join now!';
      }else{
        foreach ($doko as $player) {
          $statnya = $player->fullname.'<br>Rank: '.Seihelper::tps_rank($player->exp).'<br>EXP: '.$player->exp.'<br>GOLD: '.$player->gold;
          echo '<div class="mf-pin" data-toggle="tooltip" title="'.$statnya.'">
                <img src="'.URL.'assets/images/static/tps_nopp.png" style="background-color: #fff">
                '.$player->fullname.'
                </div>';
        }
      }
    ?>
  </div>
</div>
