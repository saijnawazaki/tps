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
                <button type="submit" class="btn btn-primary" style="width:100%">LINK</button>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-6 col-xs-6">
                    <a href="<?= URL ?>register" class="btn btn-info" style="width:100%">REGISTER</a>
                  </div>
                  <div class="col-lg-6 col-xs-6">
                    <a href="<?= URL ?>resetpassword" class="btn btn-warning" style="width:100%">RESET PASSWORD</a>
                  </div>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php include(APP . 'view/_templates/_footer.php') ?>



  </body>
</html>
