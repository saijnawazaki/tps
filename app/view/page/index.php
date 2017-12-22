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
      <h1 class="page-header">Pages</h1>

      <ul class="list-group">
        <li class="list-group-item"><a href="<?= URL ?>page/tos">Terms of Service</a></li>
        <li class="list-group-item"><a href="<?= URL ?>page/pp">Privacy Policy</a></li>
        <li class="list-group-item"><a href="<?= URL ?>page/eula">End User License Agreement</a></li>

      </ul>

    </div>
    <?php include(APP . 'view/_templates/_footer.php') ?>



  </body>
</html>
