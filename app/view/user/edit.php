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
      <?php include(APP . 'view/_templates/_hana.php') ?>
      <h1 class="page-header"><a href="<?= URL ?>portal"><i class="fa fa-arrow-left" aria-hidden="true"></i> Portal</a> <i class="fa fa-angle-right" aria-hidden="true"></i> Profile <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="<?= URL ?>user?id=<?= $hashi->username ?>"><?= $hashi->fullname ?></a> <i class="fa fa-angle-right" aria-hidden="true"></i> Edit</h1>

      <ol class="breadcrumb">
        <li><a href="<?= URL ?>portal">Portal</a></li>
        <li><a href="<?= URL ?>user?id=<?= $hashi->username ?>">Profile</a></li>
        <li class="active">Edit</li>
      </ol>

      <form method="post" action="<?= URL; ?>user/editpost">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" value="<?= $hashi->username ?>" required readonly>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password">
          <small class="text-muted">Fill with new password if you want change password ASAP.</small>
        </div>
        <div class="form-group">
          <label for="fullname">Fullname<span style="color: red;">*</span></label>
          <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $hashi->fullname ?>" required>
        </div>
        <div class="form-group">
          <label for="lineid">Line ID</label>
          <input type="text" class="form-control" id="lineid" name="lineid" value="<?= $hashi->lineid ?>">
          <small class="text-muted">Line ID dibutuhkan saat giveaway konten Line</small>
        </div>
        <div class="form-group">
          <label for="nohp">Handphone Number</label>
          <input type="text" class="form-control" id="nohp" name="nohp" value="<?= $hashi->nohp ?>">
          <small class="text-muted">Handphone Number dibutuhkan saat giveaway konten Pulsa</small>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" value="<?= $hashi->email ?>">
          <small class="text-muted">Email dibutuhkan suatu saat nanti</small>
        </div>


        <hr>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">UPDATE</button><br><br>
        </div>
      </form>

    </div>
    <?php include(APP . 'view/_templates/_footer.php') ?>



  </body>
</html>
