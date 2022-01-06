<?php 

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
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
   <h1>Daftar Mahasiswa</h1>
   <a href="add.php">Tambah data Mahasiswa</a><br><br>
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
</body>
</html>