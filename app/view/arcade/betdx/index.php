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

//Cardigan Engine
setInterval(function() {
      $( "#linkerstatus" ).load( "<?= URL ?>arcade/linkerstatus" );
      $( "#logbdx" ).load( "<?= URL ?>arcade/bdxlogstatus" );
      $( "#bdxplayer" ).load( "<?= URL ?>arcade/bdxplayer" );
}, 10000);

$( "#linkerstatus" ).load( "<?= URL ?>arcade/linkerstatus" );
$( "#logbdx" ).load( "<?= URL ?>arcade/bdxlogstatus" );
$( "#bdxplayer" ).load( "<?= URL ?>arcade/bdxplayer" );

});
</script>



  </head>
  <body>

    <div id="linkerstatus"></div>
    <?php include(APP . 'view/_templates/_header.php') ?>

    <div class="container">

      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <div class="mf-panel mf-clear-top-2x mf-clear-bottom-2x text-center">
            <?php include(APP . 'view/_templates/_hana.php') ?>

          
            <?php include(APP . 'view/arcade/betdx/_timer.php') ?>
            <span class="label label-primary" data-toggle="tooltip" title="Maksimum"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i> <?= $nande->bdx_max; ?></span>
            <span class="label label-primary" data-toggle="tooltip" title="Minimum"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i> <?= $nande->bdx_min; ?></span>
            <span class="label label-primary" data-toggle="tooltip" title="EXP yang didapatkan"><i class="fa fa-star" aria-hidden="true"></i> <?= $nande->bdx_exp; ?></span>
            <span class="label label-primary" data-toggle="tooltip" title="GOLD yang didapatkan"><i class="fa fa-jpy" aria-hidden="true"></i> <?= $nande->bdx_gold  ; ?></span>
            <span class="label label-primary" data-toggle="tooltip" title="GIFT yang didapatkan"><i class="fa fa-gift" aria-hidden="true"></i> <?= $nande->bdx_gift  ; ?></span>
            <span class="label label-primary" data-toggle="tooltip" title="SPONSOR GIFT"><i class="fa fa-user" aria-hidden="true"></i> <?= $nande->bdx_sponsor; ?></span>

            <hr>
            <div id="bdxplayer"></div>
          </div>
        </div>
        <div class="col-lg-6 col-xs-12">
          <div class="mf-panel mf-clear-top-1x mf-clear-bottom-1x">
            <h4>Bet</h4>
            <hr>
            <form method="post" action="<?= URL ?>arcade/bdxpostbet">
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Bet..." name="bdx_bet">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">BET</button>
                  </span>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-6 col-xs-12">
          <div class="mf-panel mf-clear-top-1x mf-clear-bottom-1x">
            <h4>Log</h4>
            <hr>
            <div id="logbdx"></div>
            <button data-toggle="collapse" data-target="#dxplus" class="btn btn-default mf-clear-top-1x mf-clear-bottom-1x" style="width: 100%;">MORE <i class="fa fa-caret-down" aria-hidden="true"></i></button>

              <div id="dxplus" class="collapse">
                <?php
                foreach ($nandi as $logi) {
                  echo '<span class="label label-primary">'.$logi->ts_konten.'</span><br><i class="fa '.$logi->icon_konten.'" aria-hidden="true"></i> '.$logi->log_konten.'<br>';
                }
                ?>
              </div>
          </div>
        </div>
      </div>
    </div>

    <?php include(APP . 'view/_templates/_footer.php') ?>
<div style="height: 100px;"></div>


  </body>
</html>
