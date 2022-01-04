<?php

$baju = [["Baju Gamis" => "120.000",
         "Sweater" => "180.000",
         "BajuPend"  => "120.000",
         "Baju Polos" => "180.000"
      ],
          ["Baju Gamis" => "120.000",
         "Sweater" => "180.000",
         "BajuPend"  => "120.000",
         "Baju Polos" => "180.000"
      ],

      
];



$hape = [["Samsung"=>"3.200.000",
         "Xiaomi"=>"3.230.000"

         ],
      
];






?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Toko Baju</title>
</head>
<body>
   <h1>List Baju</h1>

   <?php foreach($baju as $bj) : ?>
     

   <ul>
      <li> Baju Gamis  : <?php echo $bj["Baju Gamis"]; ?> </li>
      <li> Sweater     : <?php echo $bj["Sweater"]; ?> </li>
      <li> Baju Pendek : <?php echo $bj["BajuPend"]; ?> </li>
      <li> Jaket       : <?php echo $bj["Baju Polos"]; ?> </li>
     

      
   </ul>
      
   <?php endforeach; ?>

   <?php foreach($hape as $h ) : ?>
      <ul>
      <li> Samsung : <?php echo $h["Samsung"]; ?> </li>
      <li> Xiaomi  : <?php echo $h["Xiaomi"]; ?> </li>
  
      </ul>
    

      <?php endforeach; ?>
</body>
</html>