<!doctype html>
<html lang="en">
  <head>
    <?php include(APP . 'view/_templates/_meta.php') ?>

    <title>TPS</title>

  <?php include(APP . 'view/_templates/_css.php') ?>
  <?php include(APP . 'view/_templates/_js.php') ?>



  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-lg-offset-4 col-xs-12 col-xs-offset-0">
          <?php include(APP . 'view/_templates/_hana.php') ?>
          <div class="mf-panel mf-clear-top-4x mf-clear-bottom-4x">
            <h1 class="page-header text-center">Link</h1>
            <form method="post" action="<?= URL; ?>linker">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Link</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php include(APP . 'view/_templates/_footer.php') ?>



  </body>
</html>