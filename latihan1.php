<?php

// $mahasiswa = [
//     [
//         "nama" => "Sandhika Galih",
//         "nrp" => "043040023",
//         "email" => "sandhikagalih@unpas.ac.id"
//     ],
//     [
//         "nama" => "Erick Doank",
//         "nrp" => "043040023",
//         "email" => "erik@gmail.com"
//     ],
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpmvc', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>