<?php 
// sleep(1);
usleep(500000);

require "../functions.php";

$keyword = $_GET["keyword"];

$query = "SELECT * FROM mahasiswa WHERE 
         nama LIKE '%$keyword%' OR 
         nrp LIKE '%$keyword%' OR
         email LIKE '%$keyword%' OR
         jurusan LIKE '%$keyword%' 
         ";
$mahasiswa = query($query);



?>


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