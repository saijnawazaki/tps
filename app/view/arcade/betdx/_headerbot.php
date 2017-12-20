<div style="position: fixed; bottom: 0; width: 100%; margin: 0px; z-index: 3;">
  <div class="mf-panel" style="background-color: #fff;">

    <div class="media">
      <div class="media-left">
        <a href="#">
          <div class="mf-circle" style="width: 60px; height: 60px; display: inline-block; margin-right: 4px; top: 0px;">
            <div class="mf-circle-border"></div>
            <div class="mf-circle-static" style="padding: 4px;"><img src="<?= URL ?>assets/images/static/tps_nopp.png" style="background-color: #fff; width: 52px; height: 52px;" class="img-circle"></div>
          </div>
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading"><?= $s_linker->fullname ?></h4>
        <span class="label label-primary"><i class="fa fa-star" aria-hidden="true"></i> RANK:  <?= Seihelper::tps_rank($s_linker->exp) ?> (<?= $s_linker->exp ?> EXP)</span>
        <span class="label label-primary"><i class="fa fa-jpy" aria-hidden="true"></i> GOLD: <?= $s_linker->gold ?></span>
        <br>
        <span class="label label-primary"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> BET: <?php if(!isset($s_betdx->bdx_rbet)){ echo 'N/A'; }else{ echo $s_betdx->bdx_rbet; } ?></span>
      </div>
    </div>


  </div>
</div>
