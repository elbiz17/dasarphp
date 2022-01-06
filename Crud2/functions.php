<?php

$conn = mysqli_connect("localhost","root", "", "phpdasar");

function query($query){
   global $conn;
   $result = mysqli_query($conn, $query);
   $rows = [];
   while($row = mysqli_fetch_assoc($result)){
      $rows[]=$row;
   }
   return $rows;
}

// function tambah($data){
//    global $conn;
//    $nama = $data["nama"];
//    $nrp = $data["nrp"];
//    $email = $data["email"];
//    $jurusan = $data["jurusan"];
//    $gambar = $data["gambar"];

//    $query = "INSERT INTO mahasiswa
//             VALUES
//             ('','$nama','$nrp','$email', '$jurusan','$gambar')
//             ";

//    mysqli_query($conn, $query);
// }

function add($data){
   // ambil tiap data dari elemen form
   global $conn;
   $nama = htmlspecialchars($data["nama"]);
   $nrp = htmlspecialchars($data["nrp"]);
   $email = htmlspecialchars($data["email"]);
   $jurusan = htmlspecialchars($data["jurusan"]);
   $gambar = htmlspecialchars($data["gambar"]);

     // insert query data
   $query = "INSERT INTO mahasiswa
     VALUES('','$nama','$nrp','$email', '$jurusan','$gambar')";

   mysqli_query($conn, $query);

   return mysqli_affected_rows($conn);
}

function delete($id){
   global $conn;
   mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
   return mysqli_affected_rows($conn);
}

function ubah($data){
   global $conn;
   $id = $data["id"];
   $nama = htmlspecialchars($data["nama"]);
   $nrp = htmlspecialchars($data["nrp"]);
   $email = htmlspecialchars($data["email"]);
   $jurusan = htmlspecialchars($data["jurusan"]);
   $gambar = htmlspecialchars($data["gambar"]);

     // insert query data
   $query = "UPDATE mahasiswa SET
            nama     = '$nama', 
            nrp      = '$nrp', 
            email    ='$email',
            jurusan  ='$jurusan', 
            gambar   ='$gambar'
            WHERE id = $id
            ";
   mysqli_query($conn, $query);

   return mysqli_affected_rows($conn);
}
?>