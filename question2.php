<?php
session_start();
if (!empty(isset($_POST['mokuteki']) && is_array($_POST['mokuteki']))) {
  $_SESSION['mokuteki'] = $_POST['mokuteki'];
}
var_dump($_POST['mokuteki']);
?>

<!doctype html>
<html lang="ja" class="no-js">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
  <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
  <meta name="author" content="FREEHTML5.CO" />

  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc
    +NcPb1dKGj7Sk" crossorigin="anonymous"> -->
  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet"> -->

  <!-- Animate.css -->
  <link rel="stylesheet" href="assets\css\animate.css">
  <!-- Icomoon Icon Fonts-->
  <!-- <link rel="stylesheet" href="assets\css\icomoon.css"> -->
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="./assets/css/bootstrap.css">
  <!-- Magnifoc Popup  -->
  <link rel="stylesheet" href="./assets/css/magnific-popup.css">

  <link rel="stylesheet" href="./assets/css/style.css">


  <!-- Modernizr JS -->
  <script src="./assets/js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

  <title>旅行計画</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarEexample1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">タイトル</a>
        </div>

        <div class="collapse navbar-collapse" id="navbarEexample1">
          <ul class="nav navbar-nav">
            <li><a href="#">メニューＡ</a></li>
            <li class="active"><a href="#">メニューＢ</a></li>
            <li><a href="#">メニューＣ</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <h1 class="text-center">どこへ行きますか？（複数選択可）</h1>

  <div id="fh5co-photos-section">
    <div class="container">
      <div class="row text-center">
        <form method="POST" action="./question3.php">
          <div class="col-md-3 animate-box">
            <!-- <a href="./assets/img/pic1.jpg" class="grid-photo img-popup" style="background-image: url(images/pic1.jpg);"> -->
            <a class="grid-photo hokkaidou" style="background-image: url(assets/img/hokkaidou.jpg);">
              <div class="desc">
                <h3>北海道<input type="checkbox" name="ikisaki[]" class="check-hidden hokka" value="1"></h3>
              </div>
            </a>
          </div>
          <div class="col-md-3 animate-box ">
            <!-- <a href="./assets/img/pic3.jpg" class="grid-photo img-popup" style="background-image: url(./assets/img/pic3.jpg);"> -->
            <a class="grid-photo touhoku" style="background-image: url(./assets/img/touhoku.jpg);">
              <div class="desc">
                <h3>東北地方<input type="checkbox" name="ikisaki[]" class="check-hidden tou" value="2"></h3>
              </div>
            </a>
          </div>
          <div class="col-md-3 animate-box ">
            <!-- <a href="./assets/img/pic4.jpg" class="grid-photo img-popup" style="background-image: url(./assets/img/pic4.jpg);"> -->
            <a class="grid-photo kanntou" style="background-image: url(./assets/img/kanntou.jpg);">
              <div class="desc">
                <h3>関東地方<input type="checkbox" name="ikisaki[]" class="check-hidden knt" value="3"></h3>
              </div>
            </a>
          </div>
          <div class="col-md-3 animate-box ">
            <!-- <a href="./assets/img/pic5.jpg" class="grid-photo img-popup" style="background-image: url(./assets/img/pic5.jpg);"> -->
            <a class="grid-photo tyuubu" style="background-image: url(./assets/img/tyuubu.jpg);">
              <div class="desc">
                <h3>中部地方<input type="checkbox" name="ikisaki[]" class="check-hidden tyb" value="4"></h3>
              </div>
            </a>
          </div>

          <div class="col-md-3 animate-box ">
            <!-- <a href="./assets/img/pic5.jpg" class="grid-photo img-popup" style="background-image: url(./assets/img/pic5.jpg);"> -->
            <a class="grid-photo kinnki" style="background-image: url(./assets/img/kinnki.jpg);">
              <div class="desc">
                <h3>近畿地方<input type="checkbox" name="ikisaki[]" class="check-hidden knk" value="5"></h3>
              </div>
            </a>
          </div>

          <div class="col-md-3 animate-box ">
            <!-- <a href="./assets/img/pic5.jpg" class="grid-photo img-popup" style="background-image: url(./assets/img/pic5.jpg);"> -->
            <a class="grid-photo tyuugoku" style="background-image: url(./assets/img/kannkouti.jpg);">
              <div class="desc">
                <h3>中国地方<input type="checkbox" name="ikisaki[]" class="check-hidden tyg" value="6"></h3>
              </div>
            </a>
          </div>

          <div class="col-md-3 animate-box ">
            <!-- <a href="./assets/img/pic5.jpg" class="grid-photo img-popup" style="background-image: url(./assets/img/pic5.jpg);"> -->
            <a class="grid-photo sikoku" style="background-image: url(./assets/img/sikoku.jpg);">
              <div class="desc">
                <h3>四国地方<input type="checkbox" name="ikisaki[]" class="check-hidden skk" value="7"></h3>
              </div>
            </a>
          </div>

          <div class="col-md-3 animate-box ">
            <!-- <a href="./assets/img/pic5.jpg" class="grid-photo img-popup" style="background-image: url(./assets/img/pic5.jpg);"> -->
            <a class="grid-photo kyuushuu" style="background-image: url(./assets/img/kyuushuu.jpg);">
              <div class="desc">
                <h3>九州地方<input type="checkbox" name="ikisaki[]" class="check-hidden kys" value="8"></h3>
              </div>
            </a>
          </div>
          <input type="submit">
        </form>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script> -->

  <!-- jQuery -->
  <script src="./assets/js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="./assets/js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="./assets/js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="./assets/js/jquery.waypoints.min.js"></script>
  <!-- Counters -->
  <script src="./assets/js/jquery.countTo.js"></script>
  <!-- Magnific Popup -->
  <script type="text/javascript" src="./assets/js/jquery.magnific-popup.min.js"></script>

  <!-- Main JS (Do not remove) -->
  <script src="./assets/js/main.js"></script>
  <script>
    $('.Item').on('click', function() {
      $(this).toggleClass('isActive');
    })

    $('.hokkaidou').on('click', function() {
      $(this).toggleClass('isActive');

      if ($('.hokka').prop('checked')) {

        // チェックを外す
        // $('input:checkbox[name="ikisaki"]').val(["1"]);
        $('.hokka').prop('checked', false)
        // もしチェックが外れていたら
      } else {

        // チェックを入れる
        $('.hokka').prop('checked', true);
      }
    })

    $('.touhoku').on('click', function() {
      $(this).toggleClass('isActive');

      if ($('.tou').prop('checked')) {

        // チェックを外す
        // $('input:checkbox[name="ikisaki"]').val(["1"]);
        $('.tou').prop('checked', false)
        // もしチェックが外れていたら
      } else {

        // チェックを入れる
        $('.tou').prop('checked', true);
      }
    })

    $('.kanntou').on('click', function() {
      $(this).toggleClass('isActive');

      if ($('.knt').prop('checked')) {

        // チェックを外す
        // $('input:checkbox[name="ikisaki"]').val(["1"]);
        $('.knt').prop('checked', false)
        // もしチェックが外れていたら
      } else {

        // チェックを入れる
        $('.knt').prop('checked', true);
      }
    })

    $('.tyuubu').on('click', function() {
      $(this).toggleClass('isActive');

      if ($('.tyb').prop('checked')) {

        // チェックを外す
        // $('input:checkbox[name="ikisaki"]').val(["1"]);
        $('.tyb').prop('checked', false)
        // もしチェックが外れていたら
      } else {

        // チェックを入れる
        $('.tyb').prop('checked', true);
      }
    })

    $('.kinnki').on('click', function() {
      $(this).toggleClass('isActive');

      if ($('.knk').prop('checked')) {

        // チェックを外す
        // $('input:checkbox[name="ikisaki"]').val(["1"]);
        $('.knk').prop('checked', false)
        // もしチェックが外れていたら
      } else {

        // チェックを入れる
        $('.knk').prop('checked', true);
      }
    })

    $('.tyuugoku').on('click', function() {
      $(this).toggleClass('isActive');

      if ($('.tyg').prop('checked')) {

        // チェックを外す
        // $('input:checkbox[name="ikisaki"]').val(["1"]);
        $('.tyg').prop('checked', false)
        // もしチェックが外れていたら
      } else {

        // チェックを入れる
        $('.tyg').prop('checked', true);
      }
    })

    $('.sikoku').on('click', function() {
      $(this).toggleClass('isActive');

      if ($('.skk').prop('checked')) {

        // チェックを外す
        // $('input:checkbox[name="ikisaki"]').val(["1"]);
        $('.skk').prop('checked', false)
        // もしチェックが外れていたら
      } else {

        // チェックを入れる
        $('.skk').prop('checked', true);
      }
    })

    $('.kyuushuu').on('click', function() {
      $(this).toggleClass('isActive');

      if ($('.kys').prop('checked')) {

        // チェックを外す
        // $('input:checkbox[name="ikisaki"]').val(["1"]);
        $('.kys').prop('checked', false)
        // もしチェックが外れていたら
      } else {

        // チェックを入れる
        $('.kys').prop('checked', true);
      }
    })
  </script>

</body>

</html>