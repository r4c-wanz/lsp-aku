<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LSP TOKO SEPATU</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <?php include('../components/Navbar.php'); ?>
  <h1 class="text-3xl font-bold underline">
    Halaman Produk
  </h1>
  <div class="my-3">
    <a class="bg-blue-500 px-3 py-2" href="../produk.php">Kembali kehalaman Produk</a>
  </div>
  <form action="../service/produk/index.php" method="post" class="border boder-slate-600 rounded-xl p-5 w-1/3 mx-auto" enctype="multipart/form-data">
    <div class="mb-3 flex flex-col">
      <label for="nama_produk">Nama Produk</label>
      <input type="text" id="nama_produk" placeholder="Nama Produk" name="nama_produk" class="border px-3 py-2">
    </div>
    <div class="mb-3 flex flex-col">
      <label for="harga_produk">Harga Produk</label>
      <input type="number" id="harga_produk" placeholder="Harga Produk" name="harga_produk" class="border px-3 py-2">
    </div>
    <div class="mb-3 flex flex-col">
      <label for="stok_produk">Stok Produk</label>
      <input type="number" id="stok_produk" placeholder="Stok Produk" name="stok_produk" class="border px-3 py-2">
    </div>
    <div class="mb-3 flex flex-col">
      <label for="foto_produk">Foto Produk</label>
      <input type="file" id="foto_produk" placeholder="Foto Produk" name="foto_produk" class="border px-3 py-2">
    </div>
    <div class="mb-3 flex flex-col">
      <label for="deskripsi_produk">Deskripsi Produk</label>
      <textarea name="deskripsi_produk" id="deskripsi_produk" rows="3" placeholder="Deskripsi Produk" class="border px-3 py-2"></textarea>
    </div>
    <div class="flex justify-end">
      <button type="submit" name="tambah" class="bg-blue-500 px-3 py-2">Tambah</button>
    </div>
  </form>
  <?php include('../components/Footer.php'); ?>
</body>
</html>