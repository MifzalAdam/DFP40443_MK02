<?php
require 'config.php';
checkAuth();

$products = [
 ["id"=>1,"name"=>"Laptop","price"=>3500,"image_url"=>"https://via.placeholder.com/300","stock_status"=>true],
 ["id"=>2,"name"=>"Mouse","price"=>50,"image_url"=>"https://via.placeholder.com/300","stock_status"=>true],
 ["id"=>3,"name"=>"Keyboard","price"=>120,"image_url"=>"https://via.placeholder.com/300","stock_status"=>false],
 ["id"=>4,"name"=>"Monitor","price"=>800,"image_url"=>"https://via.placeholder.com/300","stock_status"=>true],
 ["id"=>5,"name"=>"Printer","price"=>600,"image_url"=>"https://via.placeholder.com/300","stock_status"=>false],
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Catalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
  <div class="container">
    <a class="navbar-brand">Product Catalog</a>
    <div class="ms-auto text-white">
        Hi, <strong><?= $_SESSION['username'] ?></strong>
        <a href="logout.php" class="btn btn-sm btn-danger ms-3">Logout</a>
    </div>
  </div>
</nav>

<div class="container mt-4">
    <div class="row g-4">

<?php foreach($products as $p): ?>
    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img src="<?= $p['image_url'] ?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?= $p['name'] ?></h5>
                <p class="card-text">RM <?= number_format($p['price'],2) ?></p>

                <?php if($p['stock_status']): ?>
                    <span class="badge bg-success">In Stock</span>
                <?php else: ?>
                    <span class="badge bg-danger">Out of Stock</span>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>

    </div>
</div>

</body>
</html>
