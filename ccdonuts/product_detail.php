<?php require 'includes/header.php'; ?>
<?php
$dsn = 'mysql:host=localhost;dbname=ccdonuts;charset=utf8';
$user = 'ccStaff';
$password = 'ccDonuts';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    die("DB接続失敗: " . $e->getMessage());
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$sql = "SELECT * FROM products WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$product = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$product) {
    echo "商品が見つかりません";
    exit;
}
?>
<div class="productDetail">
<img src="images/<?= htmlspecialchars($product['id']) ?>.png" alt="<?= htmlspecialchars($product['name']) ?>">
<div class="productText">
<h1><?= htmlspecialchars($product['name']) ?></h1>
<div  class="productText2">
<p><?=htmlspecialchars($product['introduction']) ?></p>
</div>
<p class="price">税込 <?= htmlspecialchars($product['price']) ?>円</p>
</div>
</div>
<?php require 'includes/footer.php'; ?>