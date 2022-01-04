<?php
$mahasiswa = [
      ["nama" => "Lukman",
        "Nrp" => "0989989",
        "Email" => "lukman@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Gambar" => "ELBIZjpg.jpg"
         ],
      ["nama" => "Lukman2",
        "Nrp" => "0989988",
        "Email" => "lukman2@gmail.com",
        "Jurusan" => "Teknik Informatika S2",
        "Gambar" => "Dandi.jpg"
      ],

   ];
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Transition</title>
</head>
<body>
<style>
      .kotak {
         width:50px;
         height:50px;
         background-color:salmon;
         text-align:center;
         line-height: 50px;
         margin:3px;
         float:left;
         transition:1s;
      }
      .kotak:hover{
         transform:rotate(360deg);
         border-radius:50%;
      }
      .clear{
         clear:both;
      }
   </style>


<?php

$angka =[[1,2,3],
         [4,5,6,],
         [7,8,9]]


         ?>
   <?php foreach($angka as $a) : ?>
      <?php foreach($a as $b) : ?>

         <div class="kotak"> <?= $b; ?> </div>
      <?php endforeach; ?>
   <?php endforeach; ?>


   <div class="clear"></div>
      <?php foreach($mahasiswa as $mhs ){ ?>
   <ul>
         <li>
            <img src="img/<?php echo $mhs["Gambar"]; ?>" alt="" width=120px>
         </li>
         <li> <?php echo $mhs["nama"]; ?> </li>
         <li> <?php echo $mhs["Nrp"]; ?> </li>
         <li> <?php echo $mhs["Email"]; ?> </li>
         <li> <?php echo $mhs["Jurusan"]; ?> </li>
        

    
   </ul>
   <?php } ?>

</body>
</html>