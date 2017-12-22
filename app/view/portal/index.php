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
    <div class="div">
      <div class="col-lg-9 col-xs-12">

          <h1 class="page-header">Portal</h1>
          <ol class="breadcrumb">
            <li>Portal</li>
          </ol>
          <div class="div">
            <div class="col-lg-3 col-xs-12">
              <a href="<?= URL ?>arcade" class="mf-link-fix">
              <div class="mf-panel text-center mf-clear-top-2x mf-clear-bottom-2x">

                <i class="fa fa-gamepad fa-5x" aria-hidden="true"></i>
                <h4>Arcade</h4>
                <hr style="max-width: 100px;">
                <p>
                  Play?
                </p>

              </div>
              </a>
            </div>

            <div class="col-lg-3 col-xs-12">
              <a href="<?= URL ?>achievement" class="mf-link-fix">
              <div class="mf-panel text-center mf-clear-top-2x mf-clear-bottom-2x">

                <i class="fa fa-trophy fa-5x" aria-hidden="true"></i>
                <h4>Achievement</h4>
                <hr style="max-width: 100px;">
                <p>
                  Achievement
                </p>

              </div>
              </a>
            </div>


            <div class="col-lg-3 col-xs-12">
              <a href="<?= URL ?>portal/namesboard" class="mf-link-fix">
              <div class="mf-panel text-center mf-clear-top-2x mf-clear-bottom-2x">

                <i class="fa fa-user-circle-o fa-5x" aria-hidden="true"></i>
                <h4>Names Board</h4>
                <hr style="max-width: 100px;">
                <p>
                  Player List
                </p>

              </div>
              </a>
            </div>

          </div>

        </div>

        <div class="col-lg-3 col-xs-12">
        <?php include(APP . 'view/_templates/_pro.php') ?>

        </div>
      </div>
  </div>
    <?php include(APP . 'view/_templates/_footer.php') ?>



  </body>
</html>
