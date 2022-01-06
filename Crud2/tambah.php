<?php 
// koneksi ke database mysqli

$conn= mysqli_connect("localhost", "root", "", "phpdasar");

// cek apakah tombol submit sudah ditekan

if(isset($_POST["submit"])){
   // ambil tiap data dari elemen form
   $nama = $_POST["nama"];
   $nrp = $_POST["nrp"];
   $email = $_POST["email"];
   $jurusan = $_POST["jurusan"];
   $gambar = $_POST["gambar"];

   // insert query data
   $query = "INSERT INTO mahasiswa
            VALUES('','$nama','$nrp','$email', '$jurusan','$gambar')";

   mysqli_query($conn, $query);
   // cek apakah data berhasil ditambahkan atau tidak
   // var_dump(mysqli_affected_rows($conn));
   if(mysqli_affected_rows($conn)>0){
      echo "berhasil";
   }else{
      echo "gagal";
      echo "<br>";
      echo mysqli_error($conn);
   }
}

// require "functions.php";

// if(isset($_POST["submit"])){

//    //cek data berhasil dan gagal ditambahkan
//    if(tambah($_POST) > 0) {
//       echo "data berhasil ditambahkan !";
//    }else {
//       echo "gagal";
//    }
//    // var_dump(mysqli_affected_rows($conn));
// }

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
      <ul>
         <li><label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama">
         </li>
         <li><label for="nrp">Nrp :</label>
            <input type="text" name="nrp" id="nrp">
         </li>
         <li>
            <label for="email">Email :</label>
            <input type="text" name="email" id="email"> 
         </li>
         <li>
            <label for="jurusan">Jurusan :</label>
            <input type="text" name="jurusan" id="jurusan"> 
         </li>
         <li>
            <label for="gambar">Gambar :</label>
            <input type="text" name="gambar" id="gambar"> 
         </li>
         <li>
            <button type="submit" name="submit">Tambah Data</button>
         </li>
      </ul>
   </form>
   <a href="index.php">Kembali</a>
</body>
</html>