<?php
// DB接続設定
$dsn = 'mysql:host=localhost;dbname=ccdonuts;charset=utf8';
$user = 'ccStaff';
$password = 'ccDonuts';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    die("データベース接続失敗: " . $e->getMessage());
}

// 商品データ取得
$sql = "SELECT * FROM products ORDER BY id";
$stmt = $pdo->query($sql);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// 1～6と7～12に分割（array_sliceを利用）
$group1 = array_slice($products, 0, 6);
$group2 = array_slice($products, 6, 6);
?>

<?php require 'includes/header.php'; ?>
<div class="title">
<h1 class="syouhin">商品一覧</h1>
</div>
<h2 class="group">メインメニュー</h2>
<div class="product-list">
  <?php foreach ($group1 as $product): ?>
<div class="product">
  <img src="images/<?= htmlspecialchars($product['id']) ?>.png" alt="<?= htmlspecialchars($product['name']) ?>">
  <a href="product_detail.php?id=<?= urlencode($product['id']) ?>">
      <?= htmlspecialchars($product['name']) ?>
  </a>
  <p class="price">税込 <?= htmlspecialchars($product['price']) ?>円</p>
</div>

  <?php endforeach; ?>
</div>

<h2 class="group">バラエティメニュー</h2>
<div class="product-list">
  <?php foreach ($group2 as $product): ?>
<div class="product">
  <img src="images/<?= htmlspecialchars($product['id']) ?>.png" alt="<?= htmlspecialchars($product['name']) ?>">
  <a href="product_detail.php?id=<?= urlencode($product['id']) ?>">
      <?= htmlspecialchars($product['name']) ?>
  </a>
  <p class="price">税込 <?= htmlspecialchars($product['price']) ?>円</p>
</div>

  <?php endforeach; ?>
</div>

<?php require 'includes/footer.php'; ?>
