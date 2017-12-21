<!doctype html>
<html lang="en">
  <head>
    <?php include(APP . 'view/_templates/_meta.php') ?>

    <title>TPS</title>

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
      <h1 class="page-header"><a href="<?= URL ?>portal"><i class="fa fa-arrow-left" aria-hidden="true"></i> Portal</a> <i class="fa fa-angle-right" aria-hidden="true"></i> Achievement</h1>
      <ol class="breadcrumb">
        <li><a href="<?= URL ?>portal">Portal</a></li>
        <li class="achievement">Achievement</li>
      </ol>
      <div class="div">
        <?php
        $base = 0;
        foreach ($hanashi as $achi) {
          $zaza = 'Achievement unlocked<br>ID: '.$achi->id_achi.'<br>To: '.$achi->fullname.'<br>Date: '.$achi->timestamp;
          echo '<div class="col-lg-3 col-xs-12">
            <div class="mf-panel text-center mf-clear-top-2x" data-toggle="tooltip" title="'.$zaza.'">

              <i class="fa fa-trophy fa-5x" aria-hidden="true"></i>
              <h4>'.$achi->achi_name.'</h4>
              <hr style="max-width: 100px;">
              '.$achi->fullname.'
              <hr style="max-width: 100px;">


              <p id="'.$base.'" class="collapse">
                '.$achi->achi_konten.'
              </p>
              <button data-toggle="collapse" data-target="#'.$base.'" class="btn btn-default" style="width: 100%; margin-top: 6px;">DETAILS</button>


            </div>
          </div>';
          $base++;
        }
        ?>

      </div>



    </div>
    <?php include(APP . 'view/_templates/_footer.php') ?>



  </body>
</html>
