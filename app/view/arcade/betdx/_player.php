<script>
$('[data-toggle="tooltip"]').tooltip({
    animated: 'fade',
    html: true
});
</script>
<?php
foreach ($nando as $player) {
  $betnya = $player->bdx_bet;
  if($betnya == null){
    $betnya = '#ERROR';
  }
  $statnya = $player->fullname.'<br>Rank: '.Seihelper::tps_rank($player->exp).'<br>EXP: '.$player->exp.'<br>GOLD: '.$player->gold;
  echo '<div class="mf-pin" data-toggle="tooltip" title="'.$statnya.'">
        <img src="'.URL.'assets/images/static/tps_nopp.png" style="background-color: #fff">
        '.$betnya.'
        </div>';
}
?>
