<?php
  include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <!-- Own CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>SURAT MASUKI  | CRUD</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: pink; text-uppercase">
        <div class="container">
            <a class="navbar-brand" href="index.php">DATA SURAT MASUK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Close Navbar -->
    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="fw-bold text-uppercase"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah Data Surat Masuk</h3>
            </div>
            <hr>
        </div>
        <section class="row">
        <div class="col-md-6 offset-md-3 align-self-center"> 
        <h1 class="text-center mt-4">Form Tambah Data</h1><br>
        <div class="row my-2">
            <div class="col-md">
                <form action="" method="post" enctype="multipart/form-data">
          <div class="mb-3">
          <label for="inputNIP" class="form-label">Nomor</label>
          <input type="text" class="form-control" id="inputNomor" name="nomor" placeholder="Masukan nomor surat">
        </div>
        <div class="mb-3">
          <label for="inputNama" class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="inputTanggal" name="tanggal">
        </div>
        <div class="mb-3">
          <label for="inputAlamat" class="form-label">Pengirim</label>
          <input type="text" class="form-control" id="inputPengirim" name="pengirim" placeholder="Masukan nama pengirim">
        </div>
        <input name="rekam" type="submit" class="btn btn-primary" value="Tambah">
        <a href="index.php" type="button" class="btn btn-info text-white">Kembali</a>
      </form>
    </div>
  </section>

  <?php
    
    // Buat kondisi jika tombol data di klik
    if(isset($_POST['rekam'])){
      // Membuat variable setiap field inputan agar kodingan lebih rapi.
      $nomor = $_POST['nomor'];
      $tanggal = $_POST['tanggal'];
      $pengirim = $_POST['pengirim'];

      // Membuat Query
      $query = "INSERT INTO tbl_suratmasuk (nomor, tanggal, pengirim) VALUES('".$nomor."', '".$tanggal."', '".$pengirim."')";

      $result = mysqli_query($koneksi, $query);

      if($result){
        header("location: index.php");
      } else {
        echo "<script>alert('Data Gagal di tambahkan!')</script>";
      }

    }    

  ?>
     <!-- Footer -->
    <div class="container-fluid">
        <div class="row text-black" style="background-color: pink;">
            <div class="col-md-6 my-2" id="about">
                <h4 class="fw-bold text-uppercase">Tentang</h4>
                <p>Program Studi Sarjana Terapan Teknik Informatika | Politeknik Harapan Bersama Tegal</p>
            </div>
            <div class="col-md-6 my-2 text-center link">
                <h4 class="fw-bold text-uppercase">Social Media</h4>
                <a href="#" target="_blank"><i class="bi bi-facebook fs-3"></i></a>
                <a href="#" target="_blank"><i class="bi bi-github fs-3"></i></a>
                <a href="#" target="_blank"><i class="bi bi-instagram fs-3"></i></a>
                <a href="#" target="_blank"><i class="bi bi-twitter fs-3"></i></a>
            </div>
        </div>
    </div>
    <footer class="text-black text-center" style="padding: 5px; background-color: pink;">
        <p>Created with <i class="bi bi-suit-heart-fill" style="color: black;"></i> By Esti Restia Ningrum</p>
    </footer>
    <!-- Close Footer -->
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>