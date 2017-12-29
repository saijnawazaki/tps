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
          <?php
          if($nori->fullname != $nori->pk_fullname AND $nori->pk_fullname != null){
            echo '<div class="well text-muted">';
            echo '<strong>COMMUNITY DATA</strong><br>';
            echo '<small class="text-muted">THIS PUBLIC DATA PROVIDED</small><br><br>';
            echo '<h4>Name: '.$nori->pk_fullname.'</h4>';
            echo '</div>';
            echo '<hr>';
          }
          ?>
          <i class="fa fa-star" aria-hidden="true"></i> <?= Seihelper::tps_rank($nori->exp).' <small class="text-muted">('.$nori->exp.' EXP)</small>'; ?><br>
          <i class="fa fa-jpy" aria-hidden="true"></i> <?= '<span class="text-muted">'.$nori->gold.' GOLD</span>'; ?>

          <?php
            if(isset($_SESSION['tps_username'])){
              if($_SESSION['tps_username'] == $p_id OR $_SESSION['tps_type_account'] == 'admin'){
                ?>
                <div class="well text-muted" style="margin-top: 10px;">
                  <strong>HIDDEN CONTENT</strong><br>
                  <small class="text-muted">ONLY YOU AND ADMINS CAN SEE THIS INFORMATION</small><br><br>
                  <ul>
                    <li>Line ID: <?= Seihelper::valuecheck($nori->lineid) ?></li>
                    <li>Phone Number: <?= Seihelper::valuecheck($nori->nohp) ?></li>
                    <li>Email: <?= Seihelper::valuecheck($nori->email) ?></li>
                  </ul>
                  <hr>
                  <strong>COMMUNITY HIDDEN CONTENT</strong><br>
                  <small class="text-muted">ONLY YOU AND ADMINS CAN SEE THIS INFORMATION - THIS INFORMATION PROVIDED BY MANA STUDIO COMMUNITY</small><br><br>
                  <ul>
                    <li>Gender: <?= Seihelper::genderconverd(Seihelper::valuecheck($nori->pk_gender)) ?></li>
                    <li>Birthday: <?= Seihelper::valuecheck($nori->pk_birthday) ?></li>
                    <li>Age: <?php if($nori->pk_birthday == null){ echo 'No data provided';  } else { echo (date('Y') - date('Y', strtotime($nori->pk_birthday))); } ?></li>
                    <li>Birthplace: <?php if($nori->pk_birthplace != null){ echo '<i class="flag-icon flag-icon-'.substr($nori->pk_birthplace, 0, 2).'"></i> '.SeiHelper::flagnames(substr($nori->pk_birthplace, 0, 2)).' - '.SeiHelper::citynames(substr($nori->pk_birthplace, 3, 6)); } else { echo 'No data provided'; } ?></li>
                    <li>Place: <?php if($nori->pk_place != null){ echo '<i class="flag-icon flag-icon-'.substr($nori->pk_place, 0, 2).'"></i> '.SeiHelper::flagnames(substr($nori->pk_place, 0, 2)).' - '.SeiHelper::citynames(substr($nori->pk_place, 3, 6)); } else { echo 'No data provided'; } ?></li>
                    <li>Bloodtype: <?= strtoupper(Seihelper::valuecheck($nori->pk_bloodtype)) ?></li>
                    

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
