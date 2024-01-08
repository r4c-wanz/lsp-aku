<?php
  if(isset($_POST['tambah'])){
    tambahData();
  }
  
  function tambahData(){
    include '../../koneksi.php';
    $nama = $_POST['nama_produk'] ? $koneksi->real_escape_string($_POST['nama_produk']) : '';
    $harga = $_POST['harga_produk'] === '' ? 0 : $koneksi->real_escape_string($_POST['harga_produk']);
    $stok = $_POST['stok_produk'] === '' ? 0 : $koneksi->real_escape_string($_POST['stok_produk']);
    $foto = $_FILES['foto_produk']['name'];
    $deskripsi = $_POST['deskripsi_produk'] ? $koneksi->real_escape_string($_POST['deskripsi_produk']) : '';

    $targetUpload = '../../Uploads/';
    $targetFile = $targetUpload . basename($foto);
    
    // Cek tipe file
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    if($imageFileType != ('jpg' || 'png' || 'jpeg')){
      echo "File harus berupa jpg, jpeg, atau png";
    }

    // Cek Ukuran file
    $fileSize = $_FILES['foto_produk']['size'];
    if($fileSize > 2048){
      echo "File harus kurang dari 2 MB";
    }

    if(move_uploaded_file($_FILES['foto_produk']['tmp_name'], $targetFile)){
      $sql = mysqli_query($koneksi, "INSERT INTO produk(nama_produk, harga_produk, stok_produk, foto_produk, deskripsi_produk) VALUES ('$nama', '$harga', '$stok', '$foto', '$deskripsi')");
      if ($sql) {
        echo "Product added successfully.";
      } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
      }
    }
  }

?>