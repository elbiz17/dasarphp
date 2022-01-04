<?php

// $mahasiswa =["Lukman", "090300", "Teknik Informatika","lukman@gmail.com"];
$mahasiswa =[["Lukman", "090300", "Teknik Informatika","lukman@gmail.com"],
["Lukman2", "090300", "Teknik Informatika","lukman@gmail.com"]

];

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Daftar Mahasiswa</title>
</head>
<body>
   <h1>Daftar Mahasiswa</h1>
   <!-- <ul>
      <li>Lukman</li>
      <li>Lukman</li>
      <li>Lukman</li>
      <li>Lukman</li>
   </ul> -->
   <?php foreach($mahasiswa as $mhs ){ ?>
   <ul>
    
         <li> <?php echo $mhs[0]; ?> </li>
         <li> <?php echo $mhs[1]; ?> </li>
         <li> <?php echo $mhs[2]; ?> </li>
         <li> <?php echo $mhs[3]; ?> </li>
    
   </ul>
   <?php } ?>
</body>
</html>