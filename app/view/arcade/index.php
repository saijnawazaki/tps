<!doctype html>
<html lang="en">
  <head>
    <?php include(APP . 'view/_templates/_meta.php') ?>

    <title>TPS</title>

  <?php include(APP . 'view/_templates/_css.php') ?>
  <?php include(APP . 'view/_templates/_js.php') ?>



  </head>
  <body>
    <?php include(APP . 'view/_templates/_header.php') ?>

    <div class="container">
      <h1 class="page-header"><a href="<?= URL ?>portal"><i class="fa fa-arrow-left" aria-hidden="true"></i> Portal</a> <i class="fa fa-angle-right" aria-hidden="true"></i> Arcade</h1>
      <ol class="breadcrumb">
        <li><a href="<?= URL ?>portal">Portal</a></li>
        <li class="active">Arcade</li>
      </ol>

      <div class="div">
        <div class="col-lg-3 col-xs-12">
          <div class="mf-panel text-center">
            <a href="<?= URL ?>arcade/betdx" class="mf-link-fix">
            <i class="fa fa-sticky-note-o fa-5x" aria-hidden="true"></i>
            <h4>BetDX</h4>
            <hr style="max-width: 100px;">
            <p>
              Bet---!
            </p>
            <?php
            if(isset($_SESSION['tps_type_account'])){
              if($_SESSION['tps_type_account'] == 'admin'){
                  echo '<hr><a href="'.URL.'arcade/betdxreset" class="btn btn-primary">RESET</a>';
              }
            }

            ?>
          </a>
          </div>
        </div>
      </div>

    </div>
    <?php include(APP . 'view/_templates/_footer.php') ?>



  </body>
</html>
