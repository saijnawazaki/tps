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
      <form method="post" action="<?= URL ?>arcade/betdxresetpost">
        <div class="form-group">
        <label>Real</label>
        <input type="text" name="bdx_real" class="form-control" value="1">
        </div>
        <div class="form-group">
        <label>Max</label>
        <input type="text" name="bdx_max" class="form-control" value="10">
      </div>
      <div class="form-group">
        <label>Min</label>
        <input type="text" name="bdx_min" class="form-control" value="1">
      </div>
      <div class="form-group">
        <label>EXP</label>
        <input type="text" name="bdx_exp" class="form-control" value="10">
      </div>
      <div class="form-group">
        <label>GOLD</label>
        <input type="text" name="bdx_gold" class="form-control" value="20">
      </div>
      <div class="form-group">
        <label>GIFT</label>
        <input type="text" name="bdx_gift" class="form-control" value="TPS">
      </div>
      <div class="form-group">
        <label>REQ.</label>
        <select name="bdx_req" class="form-control">
          <option value="">No</option>
          <option value="lineid">Line ID</option>
          <option value="nohp">Phone Number</option>
          <option value="email">Email</option>
        </select>
      </div>
      <div class="form-group">
        <label>SPONSOR</label>
        <input type="text" name="bdx_sponsor" class="form-control" value="TPS">
      </div>
      <div class="form-group">
        <label>END</label>
        <input type="text" name="bdx_end" class="form-control" value="<?= date('Y-m-d H:i:s') ?>">
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary">
      </div>
      </form>
    </div>
    <?php include(APP . 'view/_templates/_footer.php') ?>



  </body>
</html>
