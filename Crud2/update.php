<?php 
require "functions.php";
$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id =$id")[0];
var_dump($mhs["nama"]);

if(isset($_POST["submit"])){
   if(ubah($_POST) > 0){
      echo "
      <script>
       alert('data berhasil dirubah');
       document.location.href = 'index.php';
      </script>";
   }else {
      echo "
      <script>
       alert('data gagal dirubah');
       document.location.href = 'index.php';
      </script>";
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tambah Data Mahasiswa</title>
</head>
<body>
   <h1>Tambah data mahasiswa</h1>

   <form action="" method="post">
      <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
      <ul>
         <li><label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" required
            value="<?= $mhs["nama"];?>">
         </li>
         <li><label for="nrp">Nrp :</label>
            <input type="text" name="nrp" id="nrp" required
            value="<?= $mhs["nrp"];?>">
         </li>
         <li>
            <label for="email">Email :</label>
            <input type="text" name="email" id="email" required
            value="<?= $mhs["email"];?>"> 
         </li>
         <li>
            <label for="jurusan">Jurusan :</label>
            <input type="text" name="jurusan" id="jurusan" required
            value="<?= $mhs["jurusan"];?>"> 
         </li>
         <li>
            <label for="gambar">Gambar :</label>
            <input type="text" name="gambar" id="gambar" required
            value="<?= $mhs["gambar"];?>"> 
         </li>
         <li>
            <button type="submit" name="submit">Simpan Data</button>
         </li>
      </ul>
   </form>
   <a href="index.php">Kembali</a>
</body>
</html>