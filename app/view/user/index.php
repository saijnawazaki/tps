<!doctype html>
<html lang="en">
  <head>
    <?php include(APP . 'view/_templates/_meta.php') ?>

    <title><?= $nori->fullname; ?> (<?= $nori->username; ?>) - TPS</title>

  <?php include(APP . 'view/_templates/_css.php') ?>
  <?php include(APP . 'view/_templates/_js.php') ?>

  <script>
  $(document).ready(function(){


      $('[data-toggle="tooltip"]').tooltip({
          animated: 'fade',
          html: true
      });

  });
  </script>

  </head>
  <body>
    <?php include(APP . 'view/_templates/_header.php') ?>

    <div class="container">
      <div class="div">
        <div class="col-lg-2 col-xs-12">
          <img style="width: 120px; height: 120px;" class="img-circle" src="<?= URL ?>repo/user/pp/<?= $nori->pp; ?>">
        </div>
        <div class="col-lg-10 col-xs-12">
          <h1 class="page-header"><?= $nori->fullname; ?> <small>(<?= $nori->username; ?>)</small></h1>
          <i class="fa fa-star" aria-hidden="true"></i> <?= Seihelper::tps_rank($nori->exp).' <small class="text-muted">('.$nori->exp.' EXP)</small>'; ?><br>
          <i class="fa fa-jpy" aria-hidden="true"></i> <?= '<span class="text-muted">'.$nori->gold.' GOLD</span>'; ?>
          <?php
            if(isset($_SESSION['tps_username'])){
              if($_SESSION['tps_username'] == $p_id OR $_SESSION['tps_type_account'] == 'admin'){
                ?>
                <div class="well text-muted" style="margin-top: 10px;">
                  <strong data-toggle="tooltip" title="ONLY YOU AND ADMINS CAN SEE THIS INFORMATION">HIDDEN CONTENT</strong><br>
                  <small class="text-muted">ONLY YOU AND ADMINS CAN SEE THIS INFORMATION</small><br><br>
                  <ul>
                    <li>Line ID: <?= $nori->lineid ?></li>
                    <li>Phone Number: <?= $nori->nohp ?></li>
                    <li>Email: <?= $nori->email ?></li>
                  </ul>

                </div>
                <?php
              }
            }
          ?>
        </div>

      </div>




    </div>
    <?php include(APP . 'view/_templates/_footer.php') ?>



  </body>
</html>
