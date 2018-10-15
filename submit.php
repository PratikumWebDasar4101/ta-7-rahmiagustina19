<?php

require_once("db.php");



$nama = $_POST["nama"];

$nim = $_POST["nim"];

$jk = $_POST["jk"];
$prodi = $_POST["prodi"];
$fakultas = $_POST["fakultas"];
$asal = $_POST["asal"];
$moto_hidup = $_POST["moto_hidup"];


$sql = "INSERT INTO pendataan (nama,nim,jk, prodi, fakultas, asal, moto_hidup) VALUES ('$nama','$nim','$jk','$prodi','$fakultas','$asal','$moto_hidup')";



if (mysqli_query($conn, $sql)) {

    echo "created successfully<br>";

}else {

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}



mysqli_close($conn);

echo "Silahkan klik <a href='lihatdata.php'>link ini</a> untuk melanjutkan";