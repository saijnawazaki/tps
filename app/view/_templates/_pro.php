<a href="<?= URL ?>arcade" class="mf-link-fix">
<div class="mf-panel text-center">
  <h2 class="text-muted">PROFILE</h2>
  <hr style="max-width: 100px;">
  <img style="width: 100px; height: 100px;" class="img-circle" src="<?= URL ?>repo/user/pp/<?= $sp_naniga->pp; ?>">
  <h4><?= $sp_naniga->fullname ?></h4>
  <small class="text-muted"><?= $sp_naniga->username ?></small>
  <hr style="max-width: 100px;">
  <p class="text-left">
    <i class="fa fa-star" aria-hidden="true"></i> <?= Seihelper::tps_rank($sp_naniga->exp).' <small class="text-muted">('.$sp_naniga->exp.' EXP)</small>'; ?><br>
    <i class="fa fa-jpy" aria-hidden="true"></i> <?= '<span class="text-muted">'.$sp_naniga->gold.' GOLD</span>'; ?>
  </p>

</div>
</a>
