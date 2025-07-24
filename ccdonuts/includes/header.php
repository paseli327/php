<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/reset.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <title>CCドーナツ</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/product.css">
    <link rel="stylesheet" href="styles/product_detail.css">
</head>
<body>
    <header>
  <nav class="gMenu">
    <input class="menu-btn" type="checkbox" id="menu-btn">

    <!-- ハンバーガーメニュー（左上） -->
    <label class="menu-icon menu-icon-open" for="menu-btn">
      <span class="navicon"></span>
    </label>

    <!-- 閉じるボタン（右上） -->
    <label class="menu-icon menu-icon-close" for="menu-btn">
      <span class="close-icon">✕</span>
    </label>

    <ul class="menu">
      <img src="images/pcMainLogo.png" alt="CCドーナツ" class="logo1">
      <div class="menuSize">
      <li><a href="index.php">TOP</a></li>
      <li><a href="product.php">商品一覧</a></li>
      <li><a href="#">よくある質問</a></li>
      <li><a href="#">お問い合わせ</a></li>
      <li><a href="#">当サイトのポリシー</a></li>
      </div>
    </ul>
  </nav>
<div class="header">
  <div class="headerLogo">
<img src="images/pcMainLogo.png" alt="CCドーナツ" class="logo">
</div>
<div class="headrLogin">
<img src="images/pcLogin.png" alt="CCドーナツ" class="login">
<img src="images/pcCart.png" alt="CCドーナツ" class="cart">
</div>
</div>
        <div class="search">
            <form action="search.php" method="get">
                <button type="submit"><img src="images/Vector.png"></button>
                <input type="text" name="keyword">
            </form>
        </div>
    </header>