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
  <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js?ver=1.11.3'></script>

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
          <a class="navbar-brand" href="#">旅行計画</a>
        </div>

        <div class="collapse navbar-collapse" id="navbarEexample1">
          <ul class="nav navbar-nav">
            <li><a href="#">メニューＡ</a></li>
            <li class="active"><a href="#">メニューＢ</a></li>
            <li><a href="./priority.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                </svg></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <h1 class="text-center">旅の目的を３つ選んでください。</h1>
  <!-- <div class="input-group">
    <input type="text" class="form-control" placeholder="目的地がある場合ここで探してください">
    <span class="input-group-btn">
      <button type="button" class="btn btn-default">検索</button>
    </span>
  </div> -->

  <div id="fh5co-photos-section">
    <div class="container">
      <div class="row text-center">
        <form action="./question2.php" method="POST">

          <ul>
            <div class="col-md-3 animate-box">
              <!-- <a href="./assets/img/pic1.jpg" class="grid-photo img-popup" style="background-image: url(images/pic1.jpg);"> -->
              <a class="grid-photo kannkouti" style="background-image: url(assets/img/kannkouti.jpg);">
                <div class="desc">
                  <h3>
                    <li>
                      <input type="checkbox" name="mokuteki[]" class="check-hidden knk" value="1" id="box_1">
                      <label for="box_1" class="checkbox">人気観光地めぐり</label>
                    </li>
                  </h3>
                </div>
              </a>
            </div>
            <div class="col-md-3 animate-box ">
              <!-- <a href="./assets/img/pic3.jpg" class="grid-photo img-popup" style="background-image: url(./assets/img/pic3.jpg);"> -->
              <a class="grid-photo rifuresshu" style="background-image: url(./assets/img/zekkei.jpg);">
                <div class="desc">
                  <h3>
                    <li>
                      <input type="checkbox" name="mokuteki[]" class="check-hidden rif" value="2" id="box_2">
                      <label for="box_2" class="checkbox">リフレッシュ・パワースポット</label>
                    </li>
                  </h3>
                </div>
              </a>
            </div>
            <div class="col-md-3 animate-box">
              <!-- <a href="./assets/img/pic4.jpg" class="grid-photo img-popup" style="background-image: url(./assets/img/pic4.jpg);"> -->
              <a class="grid-photo ryouri" style="background-image: url(./assets/img/ryouri.jpg);">
                <div class="desc">
                  <h3>
                    <li>
                      <input type="checkbox" name="mokuteki[]" class="check-hidden ryr" value="3" id="box_3">
                      <label for="box_3" class="checkbox">美味しい料理</label>
                    </li>
                  </h3>
                </div>
              </a>
            </div>
            <div class="col-md-3 animate-box">
              <!-- <a href="./assets/img/pic5.jpg" class="grid-photo img-popup" style="background-image: url(./assets/img/pic5.jpg);"> -->
              <a class="grid-photo rekisi" style="background-image: url(./assets/img/rekisi.jpg);">
                <div class="desc">
                  <h3>
                    <li>
                      <input type="checkbox" name="mokuteki[]" class="check-hidden rks" value="4" id="box_4">
                      <label for="box_4" class="checkbox">歴史めぐり</label>
                    </li>
                  </h3>
                </div>
              </a>
            </div>

            <div class="col-md-3 animate-box">
              <!-- <a href="./assets/img/pic5.jpg" class="grid-photo img-popup" style="background-image: url(./assets/img/pic5.jpg);"> -->
              <a class="grid-photo rezya-" style="background-image: url(./assets/img/usj.jpg);">
                <div class="desc">
                  <h3>
                    <li>
                      <input type="checkbox" name="mokuteki[]" class="check-hidden pws" value="5" id="box_5">
                      <label for="box_5" class="checkbox">アクティビティ・レジャー</label>
                    </li>
                  </h3>
                </div>
              </a>
            </div>

            <div class="col-md-3 animate-box">
              <!-- <a href="./assets/img/pic5.jpg" class="grid-photo img-popup" style="background-image: url(./assets/img/pic5.jpg);"> -->
              <a class="grid-photo siki" style="background-image: url(./assets/img/siki.jpg);">
                <div class="desc">
                  <h3>
                    <li>
                      <input type="checkbox" name="mokuteki[]" class="check-hidden sk" value="6" id="box_6">
                      <label for="box_6" class="checkbox">四季を楽しむ</label>
                    </li>
                  </h3>
                </div>
              </a>
            </div>

            <div class="col-md-3 animate-box">
              <!-- <a href="./assets/img/pic5.jpg" class="grid-photo img-popup" style="background-image: url(./assets/img/pic5.jpg);"> -->
              <a class="grid-photo geizyutu" style="background-image: url(./assets/img/geizyutu.jpg);">
                <div class="desc">
                  <h3>
                    <li>
                      <input type="checkbox" name="mokuteki[]" class="check-hidden gzt" value="7" id="box_7">
                      <label for="box_7" class="checkbox">芸術作品</label>
                    </li>
                  </h3>
                </div>
              </a>
            </div>

            <div class="col-md-3 animate-box">
              <!-- <a href="./assets/img/pic5.jpg" class="grid-photo img-popup" style="background-image: url(./assets/img/pic5.jpg);"> -->
              <a class="grid-photo deai" style="background-image: url(./assets/img/hakkenn.jpg);">
                <div class="desc">
                  <h3>
                    <li>
                      <input type="checkbox" name="mokuteki[]" class="check-hidden dai" value="8" id="box_8">
                      <label for="box_8" class="checkbox">出会い・発見</label>
                    </li>
                  </h3>
                </div>
              </a>
            </div>
          </ul>

          <input type="submit" value="次へ">
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
    $(function() { //なにかしらの処理 });
      var checkCount = 0
      // var 文は関数スコープまたはグローバルスコープの変数を宣言し、任意でそれをある値に初期化します。
      $('.kannkouti').on('click', function() {

        if ($('.knk').prop('checked')) {
          checkCount--;
          console.log(checkCount);
          $(this).toggleClass('isActive'); //toggleClass→クラスがあれば除去、なければ追加する
          // チェックを外す
          // $('input:checkbox[name="ikisaki"]').val(["1"]);
          $('.knk').prop('checked', false)
          // もしチェックが外れていたら
        } else {
          if (checkCount < 3) {
            $(this).toggleClass('isActive');
            checkCount++;
            console.log(checkCount);
            // チェックを入れる
            $('.knk').prop('checked', true);
          }
        }


        click_cb()

      })

      $('.rifuresshu').on('click', function() {

        if ($('.rif').prop('checked')) {
          checkCount--;
          console.log(checkCount);
          $(this).toggleClass('isActive');
          $('.rif').prop('checked', false)
        } else {
          if (checkCount < 3) {
            $(this).toggleClass('isActive');
            checkCount++;
            console.log(checkCount);
            $('.rif').prop('checked', true);
          }
        }

        click_cb()
      })

      $('.ryouri').on('click', function() {

        if ($('.ryr').prop('checked')) {
          checkCount--;
          console.log(checkCount);
          $(this).toggleClass('isActive');
          $('.ryr').prop('checked', false)

        } else {
          if (checkCount < 3) {
            $(this).toggleClass('isActive');
            checkCount++;
            console.log(checkCount);
            $('.ryr').prop('checked', true);
          }
        }

        click_cb()
      })

      $('.rekisi').on('click', function() {

        if ($('.rks').prop('checked')) {
          checkCount--;
          console.log(checkCount);
          $(this).toggleClass('isActive');
          $('.rks').prop('checked', false)
        } else {
          if (checkCount < 3) {
            $(this).toggleClass('isActive');
            checkCount++;
            console.log(checkCount);
            $('.rks').prop('checked', true);
          }
        }
        click_cb()
      })

      $('.rezya-').on('click', function() {

        if ($('.pws').prop('checked')) {
          checkCount--;
          console.log(checkCount);
          $(this).toggleClass('isActive');
          $('.pws').prop('checked', false)

        } else {
          if (checkCount < 3) {
            $(this).toggleClass('isActive');
            checkCount++;
            console.log(checkCount);
            $('.pws').prop('checked', true);
          }
        }

        click_cb()

      })

      $('.siki').on('click', function() {

        if ($('.sk').prop('checked')) {
          checkCount--;
          console.log(checkCount);
          $(this).toggleClass('isActive');
          $('.sk').prop('checked', false)

        } else {
          if (checkCount < 3) {
            $(this).toggleClass('isActive');
            checkCount++;
            console.log(checkCount);
            $('.sk').prop('checked', true);
          }
        }

        click_cb()

      })

      $('.geizyutu').on('click', function() {

        if ($('.gzt').prop('checked')) {
          checkCount--;
          console.log(checkCount);
          $(this).toggleClass('isActive');
          $('.gzt').prop('checked', false)
        } else {
          if (checkCount < 3) {
            $(this).toggleClass('isActive');
            checkCount++;
            console.log(checkCount);
            $('.gzt').prop('checked', true);
          }
        }

        click_cb()

      })

      $('.deai').on('click', function() {

        if ($('.dai').prop('checked')) {
          checkCount--;
          console.log(checkCount);
          $(this).toggleClass('isActive');
          $('.dai').prop('checked', false)

        } else {
          if (checkCount < 3) {
            $(this).toggleClass('isActive');
            checkCount++;
            console.log(checkCount);
            $('.dai').prop('checked', true);
          }
        }

        click_cb()

      })

      function click_cb() {

        // 0個のとき（チェックがすべて外れたとき）
        if (checkCount == 0) {
          console.log("checkCount == 0")
          // $(".input_item ul li").each(function() {
          $(".check-hidden").removeClass("locked");
          // });
          // 3個以上の時（チェック可能上限数）
        } else if (checkCount > 2) {
          console.log("checkCount > 2");

          if ($('.knk').prop('checked')) {
            ;
          } else {
            $('.knk').prop('disabled', true), $('.kannkouti').addClass("locked");
          }

          if ($('.rif').prop('checked')) {

          } else {
            $('.rif').prop('disabled', true)
            $('.rifuresshu').addClass("locked")
          }
          if ($('.ryr').prop('checked')) {

          } else {
            $('.ryr').prop('disabled', true)
            $('.ryouri').addClass("locked")
          }
          if ($('.rks').prop('checked')) {

          } else {
            $('.rks').prop('disabled', true)
            $('.rekisi').addClass("locked")
          }
          if ($('.pws').prop('checked')) {

          } else {
            $('.pws').prop('disabled', true)
            $('.rezya-').addClass("locked")
          }
          if ($('.sk').prop('checked')) {

          } else {
            $('.sk').prop('disabled', true)
            $('.siki').addClass("locked")
          }
          if ($('.gzt').prop('checked')) {

          } else {
            $('.gzt').prop('disabled', true)
            $('.geizyutu').addClass("locked")
          }
          if ($('.dai').prop('checked')) {

          } else {
            $('.dai').prop('disabled', true)
            $('.deai').addClass("locked")
          }

          // $('.knk').prop('checked') ? '' : $('.knk').prop('disabled', true), $('.kannkouti').addClass("locked");  //複数の式を利用できない
          // $('.rif').prop('checked') ? '' : $('.rif').prop('disabled', true), $('.rifuresshu').addClass("locked");
          // $('.ryr').prop('checked') ? '' : $('.ryr').prop('disabled', true), $('.ryouri').addClass("locked");
          // $('.rks').prop('checked') ? '' : $('.rks').prop('disabled', true), $('.rekisi').addClass("locked");
          // $('.pws').prop('checked') ? '' : $('.pws').prop('disabled', true), $('.rezya-').addClass("locked");
          // $('.sk').prop('checked') ? '' : $('.sk').prop('disabled', true), $('.siki').addClass("locked");
          // $('.gzt').prop('checked') ? '' : $('.gzt').prop('disabled', true), $('.geizyutu').addClass("locked");
          // $('.dai').prop('checked') ? '' : $('.dai').prop('disabled', true), $('.deai').addClass("locked");

          // $(".input_item ul li").each(function() {
          // チェックされていないチェックボックスをロックする
          // if (!$(this).children("input[type='checkbox']").prop('checked')) {
          //   $(this).children("input[type='checkbox']").prop('disabled', true);
          //   $(this).addClass("locked");
          // }
          // });

        } else {
          console.log("else")
          $('.knk').prop('checked') ? '' : $('.knk').prop('disabled', false);
          $('.kannkouti').removeClass("locked");
          $('.rif').prop('checked') ? '' : $('.rif').prop('disabled', false);
          $('.rifuresshu').removeClass("locked");
          $('.ryr').prop('checked') ? '' : $('.ryr').prop('disabled', false);
          $('.ryouri').removeClass("locked");
          $('.rks').prop('checked') ? '' : $('.rks').prop('disabled', false);
          $('.rekisi').removeClass("locked");
          $('.pws').prop('checked') ? '' : $('.pws').prop('disabled', false);
          $('.rezya-').removeClass("locked");
          $('.sk').prop('checked') ? '' : $('.sk').prop('disabled', false);
          $('.siki').removeClass("locked");
          $('.gzt').prop('checked') ? '' : $('.gzt').prop('disabled', false);
          $('.geizyutu').removeClass("locked");
          $('.dai').prop('checked') ? '' : $('.dai').prop('disabled', false);
          $('.deai').removeClass("locked");
          // $(".input_item ul li").each(function() {
          //   // チェックされていないチェックボックスを選択可能にする
          //   if (!$(this).children("input[type='checkbox']").prop('checked')) {
          //     $(this).children("input[type='checkbox']").prop('disabled', false);
          //     $(this).removeClass("locked");
          //   }
          // });
        }
        return false; //処理をとめるための記述
      }
    });
  </script>

</body>

</html>