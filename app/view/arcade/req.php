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
      <div class="mf-panel mf-clear-top-2x mf-clear-bottom-2x text-center">
        <h1><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> REQUIRED</h1>
        <hr>
        Required: <?= $v_req; ?>
        <hr>
        <a href="<?= URL ?>user/edit" class="btn btn-primary">EDIT PROFILE</a> to add <?= $v_req; ?> to your profile
      </div>
    </div>
    <?php include(APP . 'view/_templates/_footer.php') ?>



  </body>
</html>
