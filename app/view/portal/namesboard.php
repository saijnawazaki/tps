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
    <div class="div">
      <div class="col-lg-12 col-xs-12">

        <h1 class="page-header"><a href="<?= URL ?>portal"><i class="fa fa-arrow-left" aria-hidden="true"></i> Portal</a> <i class="fa fa-angle-right" aria-hidden="true"></i> Names Board</h1>
        <ol class="breadcrumb">
            <li><a href="<?= URL ?>portal">Portal</a></li>
            <li>Names Board</li>
          </ol>

          <div class="mf-panel">
            <div class="row">
              <?php
                foreach ($nobu as $player) {
                  echo '<div class="col-lg-2 col-xs-12">
                    <a href="'.URL.'user?id='.$player->username.'">
                    <div class="mf-panel text-center mf-clear-top-2x mf-clear-bottom-2x">'.$player->fullname.'
                    </div>
                    </a>
                  </div>';
                }
              ?>

            </div>

          </div>


        </div>


      </div>
  </div>
    <?php include(APP . 'view/_templates/_footer.php') ?>



  </body>
</html>
