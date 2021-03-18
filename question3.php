<?php
session_start();
if (!empty(isset($_POST['ikisaki']) && is_array($_POST['ikisaki']))) {
  $_SESSION['ikisaki'] = $_POST['ikisaki'];
}
var_dump($_POST['ikisaki']);

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
  <h1 class="text-center">どうやって行きますか？</h1>

  <div id="fh5co-photos-section">
    <div class="container">
      <div class="row text-center">
        <form method="POST" action="./recomennded.php">
          <div class="col-md-6 animate-box">
            <!-- <a href="./assets/img/pic1.jpg" class="grid-photo img-popup" style="background-image: url(images/pic1.jpg);"> -->
            <a class="grid-photo mycar" style="background-image: url(assets/img/kuruma.jpg);">
              <div class="desc">
                <h3>マイカー・レンタカー<input type="radio" name="shudann" class="check-hidden car" value="1"></h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 animate-box">
            <!-- <a href="./assets/img/pic3.jpg" class="grid-photo img-popup" style="background-image: url(./assets/img/pic3.jpg);"> -->
            <a class="grid-photo airplane" style="background-image: url(./assets/img/hikouki.jpg);">
              <div class="desc">
                <h3>飛行機<input type="radio" name="shudann" class="check-hidden air" value="2"></h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 animate-box">
            <!-- <a href="./assets/img/pic4.jpg" class="grid-photo img-popup" style="background-image: url(./assets/img/pic4.jpg);"> -->
            <a class="grid-photo sinnkannsenn" style="background-image: url(./assets/img/sinnkannsenn.jpg);">
              <div class="desc">
                <h3>新幹線<input type="radio" name="shudann" class="check-hidden sinnkann" value="3"></h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 animate-box">
            <!-- <a href="./assets/img/pic5.jpg" class="grid-photo img-popup" style="background-image: url(./assets/img/pic5.jpg);"> -->
            <a class="grid-photo plane" style="background-image: url(./assets/img/dennsha.jpg);">
              <div class="desc">
                <h3>電車・バス<input type="radio" name="shudann" class="check-hidden pln" value="4"></h3>
              </div>
            </a>
          </div>
          <input type="submit">
        </form>
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
      $('.mycar').on('click', function() {
      $(this).toggleClass('isActive');

      if ($('.car').prop('checked')) {

        // チェックを外す
        // $('input:checkbox[name="ikisaki"]').val(["1"]);
        $('.car').prop('checked', false)
        // もしチェックが外れていたら
      } else {

        // チェックを入れる
        $('.car').prop('checked', true);
      }
    })

    $('.airplane').on('click', function() {
      $(this).toggleClass('isActive');

      if ($('.air').prop('checked')) {

        $('.air').prop('checked', false)
      } else {


        $('.air').prop('checked', true);
      }
    })

    $('.sinnkannsenn').on('click', function() {
      $(this).toggleClass('isActive');

      if ($('.sinnkann').prop('checked')) {

        $('.sinnkann').prop('checked', false)

      } else {


        $('.sinnkann').prop('checked', true);
      }
    })

    $('.plane').on('click', function() {
      $(this).toggleClass('isActive');

      if ($('.pln').prop('checked')) {
        $('.pln').prop('checked', false)

      } else {

        $('.pln').prop('checked', true);
      }
    })

    </script>
</body>

</html>