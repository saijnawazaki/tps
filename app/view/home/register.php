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
            <h1 class="page-header text-center">Register</h1>
            <form method="post" action="<?= URL; ?>linker/reg">
              <div class="form-group">
                <label for="username">Username<span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="username" name="username" required>
              </div>
              <div class="form-group">
                <label for="password">Password<span style="color: red;">*</span></label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <div class="form-group">
                <label for="fullname">Fullname<span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="fullname" name="fullname" required>
              </div>
              <div class="form-group">
                <label for="lineid">Line ID</label>
                <input type="text" class="form-control" id="lineid" name="lineid">
                <small class="text-muted">Line ID dibutuhkan saat giveaway konten Line</small>
              </div>
              <div class="form-group">
                <label for="nohp">Handphone Number</label>
                <input type="text" class="form-control" id="nohp" name="nohp">
                <small class="text-muted">Handphone Number dibutuhkan saat giveaway konten Pulsa</small>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email">
                <small class="text-muted">Email dibutuhkan suatu saat nanti</small>
              </div>
              <hr>
              <span style="color: red;">*</span> Required.

              <hr>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button><br><br>
                <small class="text-muted">Dengan menekan "CREATE" Anda menyatakan menyutujui dan memahami semua isi dari <a href="<?= URL ?>page/tos">Terms of Service</a>, <a href="<?= URL ?>page/eula">End User License Agreement</a> dan <a href="<?= URL ?>page/pp">Privacy Policy</a></small>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php include(APP . 'view/_templates/_footer.php') ?>



  </body>
</html>
