<!doctype html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>旅行計画</title>
</head>

<body>
  <a id="skippy" class="sr-only sr-only-focusable" href="#content">
    <div class="container">
      <span class="skiplink-text">Skip to main content</span>
    </div>
  </a>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">自動旅行計画</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#" onclick="location.href='./index.php'">計画作成 <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">マイページ</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" onclick="location.href='./login.php'">ログイン</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" onclick="location.href='./account.php'">アカウント登録</a>
          </li>

        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->
      </div>
    </nav>
  </header>
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4"><img class="mw-100" src="./assets/img/haikei.jpg" alt="Max-width 100%"></h1>
  </div>

  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <!-- <h1 class="display-4">Pricing</h1> -->
    <h1 class="display-4">旅行計画</h1>
    <!-- <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p> -->
    <p class="lead">この「旅行計画」は旅行計画作成時に生じるストレスを解消してくれるサービスです。</p>
    <p class="lead">以下３つの機能を用いて、より旅行を楽しく行えます。</p>
    <p class="lead">＊宿泊はしないものとする。</p>
  </div>

  <div class="container">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-6 shadow-sm">
        <div class="card-header">
          <!-- <h4 class="my-0 font-weight-normal">Free</h4> -->
          <h4 class="my-0 font-weight-normal">オート作成</h4>
        </div>
        <div class="card-body">
          <!-- <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1> -->
          <ul class="list-unstyled mt-3 mb-4">
            <!-- <li>10 users included</li> -->
            <li>細かい内容が決定していない方におすすめ</li>
            <!-- <li>2 GB of storage</li> -->
            <li>お客様の旅行の目的に従い、</li>
            <!-- <li>Email support</li> -->
            <li>人気や評判のいいスポットをピックアップ。</li>
            <!-- <li>Help center access</li> -->
            <li>自動で計画を作成することができます。</li>
          </ul>
          <!-- <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button> -->
          <button type="button" class="btn btn-lg btn-block btn-primary" onclick=" location.href = './question1.php'">作成開始</button>
        </div>
      </div>
    
      <div class="card mb-6 shadow-sm">
        <div class="card-header">
          <!-- <h4 class="my-0 font-weight-normal">Enterprise</h4> -->
          <h4 class="my-0 font-weight-normal">計画閲覧</h4>
        </div>
        <div class="card-body">
          <!-- <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1> -->
          <ul class="list-unstyled mt-3 mb-4">
            <!-- <li>30 users included</li> -->
            <li>ユーザーが実行した計画を</li>
            <!-- <li>15 GB of storage</li> -->
            <li>閲覧することができます。</li>
            <!-- <li>Phone and email support</li> -->
            <li>実行者のコメントや評価を確認できるので、</li>
            <!-- <li>Help center access</li> -->
            <li>実際に旅行に行く際の注意点をあらかじめ把握できます。</li>
          </ul>
          <!-- <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button> -->
          <button type="button" class="btn btn-lg btn-block btn-primary" onclick=" location.href = './share-planning.php'">計画を探す</button>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>