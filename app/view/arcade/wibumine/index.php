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

    setInterval(function() {
          $( "#battlefield" ).load( "<?= URL ?>wibumine/battlefield" );
    }, 5000);

    $( "#battlefield" ).load( "<?= URL ?>wibumine/battlefield" );

  //Wasurenai

});


function kafir(za){
  var oyasumi = $(za).css("background-color");

  if(oyasumi == 'rgb(230, 230, 230)'){
    $('#wm_no_after_fuck').text(za.id);
    $('#wmforcepop').modal();
  }
  else{
    //
    var unp_no = za.id;
    var unp_fm = 'g';
    $.ajax({
    type: "GET",
    url: "<?= URL ?>wibumine/plant",
    data: { no: unp_no, fm: unp_fm },
    cache: false,

    success: function(data){
      var murd = JSON.parse(data);
      $('#wmsaoalert').modal();
      $('#wmsaoalert_content').text(murd.konten);
      $( "#battlefield" ).load( "<?= URL ?>wibumine/battlefield" );
    }
    });
    //
  }

}

function murtad(za){
  var unp_no = $('#wm_no_after_fuck').text();
  var unp_fm = za.id;
  $.ajax({
  type: "GET",
  url: "<?= URL ?>wibumine/plant",
  data: { no: unp_no, fm: unp_fm },
  cache: false,

  success: function(data){
    var murd = JSON.parse(data);
    $('#wmsaoalert').modal();
    $('#wmsaoalert_content').text(murd.konten);
    $( "#battlefield" ).load( "<?= URL ?>wibumine/battlefield" );
  }
  });

}




</script>



  </head>
  <body>

    <?php include(APP . 'view/arcade/wibumine/_headerbot.php') ?>
    <?php include(APP . 'view/_templates/_header.php') ?>

    <div class="container">

      <div class="row">
        <div class="col-lg-9 col-xs-12">
          <div class="mf-panel mf-clear-top-2x text-center">
          <div id="battlefield"></div>
          </div>
        </div>

        <div class="col-lg-3 col-xs-12">
          <div class="mf-panel mf-clear-top-2x">

          :D

          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div id="wmforcepop" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title text-center">CHOOSE YOUR FORCE</h4>
          </div>
          <div class="modal-body" style="background-color: #D7D7D7;">
            <p>Choose your Pokemon</p>
            <p>No: <span id="wm_no_after_fuck"></span></p>
            <div class="row">
              <div class="col-lg-4 col-xs-6">
                <button class="btn btn-default" data-dismiss="modal" style="width: 100%; height: 80px;" id="g" onclick="murtad(this)">GUNTING</button>
              </div>
              <div class="col-lg-4 col-xs-6">
                <button class="btn btn-default" data-dismiss="modal" style="width: 100%; height: 80px;" id="b" onclick="murtad(this)">BATU</button>
              </div>
              <div class="col-lg-4 col-xs-6">
                <button class="btn btn-default" data-dismiss="modal" style="width: 100%; height: 80px;" id="k" onclick="murtad(this)">KERTAS</button>
              </div>
            </div>
          </div>
          <div class="modal-footer" style="text-align: center;">
            <button type="button" class="btn btn-default" data-dismiss="modal" style="border-color: transparent; color: #C82864;">
              <span class="fa-stack fa-2x">
                <i class="fa fa-circle-o fa-stack-2x"></i>
                <i class="fa fa-times fa-stack-1x"></i>
              </span>
            </button>
          </div>
        </div>

      </div>
    </div>

    <!-- SAO ALERT -->
    <div id="wmsaoalert" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title text-center">INFORMATION</h4>
          </div>
          <div class="modal-body" style="background-color: #D7D7D7;">
            <p id="wmsaoalert_content">Just Monica</p>
          </div>
          <div class="modal-footer" style="text-align: center;">
            <button type="button" class="btn btn-default" data-dismiss="modal" style="border-color: transparent; color: #3278BE;">
              <span class="fa-stack fa-2x">
                <i class="fa fa-circle-o fa-stack-2x"></i>
                <i class="fa fa-circle-o fa-stack-1x"></i>
              </span>
            </button>
          </div>
        </div>

      </div>
    </div>
<!-- Modal -->

    <?php include(APP . 'view/_templates/_footer.php') ?>
<div style="height: 100px;"></div>


  </body>
</html>
