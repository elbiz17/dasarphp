<?php 

session_start();
if ( !isset($_SESSION["login"])){
   header("Location: login.php");
   exit;

}


require 'functions.php';

//pagination
$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman =ceil( $jumlahData / $jumlahDataPerHalaman);

$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman ");
// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// $jumlahData = mysqli_num_rows($result);


//tombol cari ditekan
if(isset($_POST["cari"])){
   $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Halaman Admin</title>
</head>
<body>

   <a href="logout.php">Log Out</a>
   <h1>Daftar Mahasiswa</h1>
   <a href="add.php">Tambah data Mahasiswa</a><br><br>

   <form action="" method="post">
      <input type="text" name="keyword" size="50px" 
      placeholder="Cari" autofocus autocomplete="off" id="keyword">
      <button type="submit" name="cari" id="tombol-cari">Cari</button>
   </form>
   <br>
   <!-- navigasi -->

   <?php if($halamanAktif > 1): ?>
      <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
   <?php endif; ?>
 
   
   <?php for($i=1; $i<= $jumlahHalaman; $i++) : ?>
      <?php if($i == $halamanAktif) : ?>
         <a href="?halaman=<?= $i; ?>" style="font-weight=:bold; color:red;"><?php echo $i; ?></a>
       
      <?php else :  ?>
         <a href="?halaman=<?= $i; ?>"><?php echo $i; ?></a>
      <?php endif; ?>
   <?php endfor; ?>

   <?php if($halamanAktif < $jumlahHalaman): ?>
      <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
   <?php endif; ?>
   <br><br>

   <div id="container">
   <table border="1" cellpadding="10" cellspacing="0">
      <tr>
         <th>No</th>
         <th>aksi</th>
         <th>Gambar</th>
         <th>NRP</th>
         <th>Nama</th>
         <th>Email</th>
         <th>Jurusan</th>
      </tr>

      <?php $i = 1;  ?>
      <?php foreach($mahasiswa as $mhs) : ?>

      <tr>
         <td><?= $i; ?></td>
         <td>
            <a href="update.php?id=<?= $mhs["id"]; ?> ">ubah</a> |
            <a href="delete.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('anda yakin?')";>hapus</a>
         </td>
         <td><img src="img/<?= $mhs["gambar"]; ?>" alt="" srcset="" width=120px></td>
         <td> <?= $mhs["nrp"]; ?></p></td>
         <td><?= $mhs["nama"];  ?></td>
         <td><?= $mhs["email"]; ?></td>
         <td><?= $mhs["jurusan"]; ?></td>
      </tr>
       <?php $i++; ?>
      <?php endforeach; ?>
     
   </table>
   </div>
   <script src="js/jquery-3.6.0.min.js"></script>
   <script src="js/script.js"></script>
</body>
</html>