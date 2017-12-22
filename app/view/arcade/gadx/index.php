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

    setInterval(function() {
          $( "#gadxplayer" ).load( "<?= URL ?>arcade/gadxplayer" );
    }, 5000);

    $( "#gadxplayer" ).load( "<?= URL ?>arcade/gadxplayer" );

  //Wasurenai
  $(document).on('click',"#gadxjoin",function () {
    $.get( "<?= URL ?>arcade/gadxjoin", function( ) {
      alert( "Joined!");
    });
      });

});

 


</script>



  </head>
  <body>

    <div id="linkerstatus"></div>
    <?php include(APP . 'view/_templates/_header.php') ?>

    <div class="container">

      <div class="row">
        <div class="col-lg-9 col-xs-12">
          <div class="mf-panel mf-clear-top-2x text-center">
          <div id="gadxplayer"></div>
          </div>
        </div>

        <div class="col-lg-3 col-xs-12">
          <div class="mf-panel mf-clear-top-2x">

            <!-- KAnATA!!! -->
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <div class="mf-circle" style="width: 60px; height: 60px; display: inline-block; margin-right: 4px; top: 0px;">
                    <div class="mf-circle-border"></div>
                    <div class="mf-circle-static" style="padding: 4px;"><img src="<?= URL ?>assets/images/static/tps_nopp.png" style="background-color: #fff; width: 52px; height: 52px;" class="img-circle"></div>
                  </div>
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading"><?= $s_linker->fullname ?></h4>
                <span class="label label-primary"><i class="fa fa-star" aria-hidden="true"></i> RANK:  <?= Seihelper::tps_rank($s_linker->exp) ?> (<?= $s_linker->exp ?> EXP)</span>
                <span class="label label-primary"><i class="fa fa-jpy" aria-hidden="true"></i> GOLD: <?= $s_linker->gold ?></span>

              </div>
            </div>
            <!-- WOOO! -->

          </div>
        </div>
      </div>
    </div>

    <?php include(APP . 'view/_templates/_footer.php') ?>
<div style="height: 100px;"></div>


  </body>
</html>
