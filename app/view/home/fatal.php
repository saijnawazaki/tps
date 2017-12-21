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
      <div class="row">
        <div class="col-lg-4 col-lg-offset-4 col-xs-12 col-xs-offset-0">
          <?php include(APP . 'view/_templates/_hana.php') ?>
          <div class="mf-panel mf-clear-top-4x mf-clear-bottom-4x text-center">
            <h1 class="page-header">FATAL ERROR</h1>
            <a href="<?= URL ?>" class="btn btn-primary">BACK TO HOME</a>
          </div>
        </div>
      </div>
    </div>
    <?php include(APP . 'view/_templates/_footer.php') ?>



  </body>
</html>
