
<div class="container">
  <form method="post" action="<?php echo URL; ?>sandbox/hack">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="submit">
  </form>

  <?= SeiHelper::sei_echo('<script>alert("lol");</script>'); ?>

  <hr>

</div>
