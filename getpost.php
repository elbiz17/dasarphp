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







        
  


   <div class="clear"></div>
      
   <ul>
   <?php foreach($mahasiswa as $mhs ){ ?>
         <li>

         <a href="getpost2.php?Gambar=<?php echo $mhs["Gambar"]; ?>">
         
      </a>
            <!-- <img src="img/<?php echo $mhs["Gambar"]; ?>" alt="" width=120px> -->
         </li>
        <li>
           <a href="getpost2.php?nama=<?php echo $mhs["nama"]; ?>
           &Nrp=<?php echo $mhs["Nrp"]; ?>&Email=<?php echo $mhs["Email"]; ?>
           &Jurusan=<?php echo $mhs["Jurusan"]; ?>
           &Gambar=<?php echo $mhs["Gambar"]; ?>">
            <?= $mhs["nama"]; ?>
         </a>
        </li>
     
        
   <?php } ?>
    
   </ul>
  



</body>
</html>