<?php
// cek apakah tidak ada data $_GET

if( !isset($_GET["nama"]) || 
    !isset($_GET["Nrp"]) || 
    !isset($_GET["Email"]) || 
    !isset($_GET["Jurusan"]) || 
    !isset($_GET["Gambar"])){
   //redirect
   header("Location: getpost.php");
   exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Get</title>
</head>
<body>
   <ul>
      <li> <img src="img/<?php echo $_GET["Gambar"]; ?>" alt="" width=120px></li>
      <li><?php echo $_GET["nama"]; ?></li>
      <li><?php echo $_GET["Nrp"]; ?></li>
      <li><?php echo $_GET["Email"]; ?></li>
      <li><?php echo $_GET["Jurusan"]; ?></li>

      <a href="getpost.php">Kembali</a>
   </ul>
</body>
</html>