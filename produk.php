<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LSP TOKO SEPATU</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <?php include('components/Navbar.php'); ?>
  <h1 class="text-3xl font-bold underline">
    Halaman Produk
  </h1>
  <div class="my-3">
    <a class="bg-blue-500 px-3 py-2" href="produk/tambah.php">Tambah Produk</a>
  </div>
  <?php
    include('koneksi.php');
    $query = mysqli_query($koneksi, "SELECT * FROM produk");
    $products = $query->fetch_all(MYSQLI_ASSOC);
    var_dump($products);
    foreach($products as $product){
  ?>
    <div>
      <h1><?= $product['nama_produk']?></h1>
    </div>
  <?php } ?>
  <?php include('components/Footer.php'); ?>
</body>
</html>