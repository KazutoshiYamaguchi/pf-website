<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>飲食店向け 無料ホームページテンプレート tp_cafe17</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<div id="container">

<header>
<h1 id="logo"><a href="{{route('welcome')}}"><img src="images/logo.png" alt="Sample Cafe"></a></h1>
</header>

<main>

<section>

<h2>Compact Menu<span>画像配置のコンパクトメニュー</span></h2>

<div class="list-container up">

<div class="list">
<figure><img src="images/sample1.jpg" alt=""></figure>
<h4>メニュータイトル</h4>
<p>1,000yen</p>
</div>

<div class="list">
<figure><img src="images/sample1.jpg" alt=""></figure>
<h4>メニュータイトル</h4>
<p>1,000yen</p>
</div>

<div class="list">
<figure><img src="images/sample1.jpg" alt=""></figure>
<h4>メニュータイトル</h4>
<p>1,000yen</p>
</div>

<div class="list">
<figure><img src="images/sample1.jpg" alt=""></figure>
<h4>メニュータイトル</h4>
<p>1,000yen</p>
</div>

<div class="list">
<figure><img src="images/sample1.jpg" alt=""></figure>
<h4>メニュータイトル</h4>
<p>1,000yen</p>
</div>

<div class="list">
<figure><img src="images/sample1.jpg" alt=""></figure>
<h4>メニュータイトル</h4>
<p>1,000yen</p>
</div>

<div class="list">
<figure><img src="images/sample1.jpg" alt=""></figure>
<h4>メニュータイトル</h4>
<p>1,000yen</p>
</div>

<div class="list">
<figure><img src="images/sample1.jpg" alt=""></figure>
<h4>メニュータイトル</h4>
<p>1,000yen</p>
</div>

</div>
<!--/.list-container-->

</section>

<section>

<h2>Text Menu<span>テキストタイプのメニュー</span></h2>

<dl class="textmenu up">
<dt>メニュータイトル</dt>
<dd>1,000yen</dd>
<dt>メニュータイトル</dt>
<dd>1,000yen</dd>
<dt>メニュータイトル</dt>
<dd>1,000yen</dd>
<dt>メニュータイトル</dt>
<dd>1,000yen</dd>
<dt>メニュータイトル</dt>
<dd>1,000yen</dd>
<dt>メニュータイトル</dt>
<dd>1,000yen</dd>
<dt>メニュータイトル</dt>
<dd>1,000yen</dd>
</dl>

</section>

</main>

<footer>
<ul class="icon">
<li><a href="#"><img src="images/icon_facebook.png" alt="Facebook"></a></li>
<li><a href="#"><img src="images/icon_twitter.png" alt="Twitter"></a></li>
<li><a href="#"><img src="images/icon_instagram.png" alt="Instagram"></a></li>
<li><a href="#"><img src="images/icon_youtube.png" alt="YouTube"></a></li>
<li><a href="#"><img src="images/icon_line.png" alt="LINE"></a></li>
</ul>
<small>Copyright&copy; <a href="{{route('welcome')}}">Sample Cafe</a> All Rights Reserved.</small>
<span class="pr"><a href="https://template-party.com/" target="_blank">《Web Design:Template-Party》</a></span>
</footer>

</div>
<!--/#container-->

<!--メインメニュー-->
<nav id="menubar">
<ul>
<li><a href="{{route('welcome')}}">Home<span>ホーム</span></a></li>
<li><a href="{{route('about')}}">About<span>お店について</span></a></li>
<li><a href="{{route('menu')}}">Cafe Menu<span>メニューのご紹介</span></a></li>
<li><a href="{{route('access')}}">Access<span>アクセス</span></a></li>
</ul>
</nav>

<!--jQueryファイルの読み込み-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!--パララックス（inview）-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
<script src="assets/js/jquery.inview_set.js"></script>

<!--メニュー開閉用のスクリプト-->
<div id="menubar_hdr"></div>
<script src="assets/js/openclose_tp.js"></script>

<!--ページの上部へ戻るボタン-->
<p class="pagetop"><a href="#">↑</a></p>
</body>
</html>
