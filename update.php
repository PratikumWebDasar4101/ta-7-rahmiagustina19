<?php
require_once("db.php");
$nama = $_POST["nama"];
$nim = $_POST["nim"];
$jk = $_POST["jk"];
$prodi = $_POST["prodi"];
$fakultas = $_POST["fakultas"];
$asal = $_POST["asal"];
$moto_hidup = $_POST["moto_hidup"];
$sql = "UPDATE pendataan SET nama='$nama',jk='$jk', prodi='$prodi', fakultas='$fakultas', asal='$asal', moto_hidup='$moto_hidup' where nim=$nim";
if (mysqli_query($conn, $sql)) {
    echo "created successfully<br>";
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
echo "Silahkan klik <a href='lihatdata.php'>lihat data</a> untuk melanjutkan";
