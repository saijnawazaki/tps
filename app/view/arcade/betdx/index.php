<!doctype html>
<html lang="en">
  <head>
    <?php include(APP . 'view/_templates/_meta.php') ?>

    <title>TPS</title>

  <?php include(APP . 'view/_templates/_css.php') ?>
  <?php include(APP . 'view/_templates/_js.php') ?>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        animated: 'fade',
        html: true
    });
});
</script>



  </head>
  <body>
    <?php include(APP . 'view/_templates/_header.php') ?>

    <div class="container">

      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <div class="mf-panel mf-clear-top-2x mf-clear-bottom-2x text-center">
            <h1><strong>???</strong></h1>
            <span data-toggle="tooltip" title="Maksimum"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i> <?= $nande->bdx_max; ?></span>
            <span data-toggle="tooltip" title="Minimum"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i> <?= $nande->bdx_min; ?></span>
            <span data-toggle="tooltip" title="EXP yang didapatkan"><i class="fa fa-star" aria-hidden="true"></i> 1.000</span>
            <span data-toggle="tooltip" title="GOLD yang didapatkan"><i class="fa fa-jpy" aria-hidden="true"></i> 100</span>
            <hr>
            <?php
            foreach ($nando as $player) {
              $betnya = $player->bdx_bet;
              if($betnya == null){
                $betnya = '#ERROR';
              }
              $statnya = $player->fullname.'<br>EXP: '.$player->exp.'<br>GOLD: '.$player->gold;
              echo '<div class="mf-pin" data-toggle="tooltip" title="'.$statnya.'">
                    <img src="'.URL.'assets/images/static/tps_nopp.png" style="background-color: #fff">
                    '.$betnya.'
                    </div>';
            }
            ?>
          </div>
        </div>
        <div class="col-lg-6 col-xs-12">
          <div class="mf-panel mf-clear-top-1x mf-clear-bottom-1x text-center">
            <form>
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Bet...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">BET</button>
                  </span>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-6 col-xs-12">
          <div class="mf-panel mf-clear-top-1x mf-clear-bottom-1x text-center">
            :D
          </div>
        </div>
      </div>
    </div>
    <?php include(APP . 'view/_templates/_footer.php') ?>



  </body>
</html>
