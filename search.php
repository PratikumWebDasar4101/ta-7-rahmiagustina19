<?php
echo ("<h3>Hasil Pencarian</h3>");

mysql_connect("localhost","","");
mysqli_select_db("TEST_DB");

$perintah = "SELECT data where nim like '%cari%'";
$hasil = mysql_query($perintah);
$jumlah = mysql_num_rows($hasil);
if($jumlah>0){
	echo ("Data yang ditemukan : $jumlah<br><br>");
	while ($data=mysql_fetch_row($hasil)) {
		echo ("Nama : $data[1]<br><br>");
		echo ("Alamat	: $data[2]<br><br>");
	}
}else{
	echo ("maaf, data yang anda cari tidak ada");
}?>