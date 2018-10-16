<?php
require_once("db.php");
?>

<!DOCTYPE html>
<head>
    <body>
<table>


<tr>
    <th>Nama</th>
    <th>Nim</th>
    <th>Jenis Kelamin</th>
    <th>Prodi</th>
    <th>Fakultas</th>
    <th>Asal</th>
    <th>Moto Hidup</th>
    <th>Aksi</th>
</tr>
<?php
$sql = "SELECT * FROM pendataan";
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);
if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row['nama']?></td>
            <td><?php echo $row['nim']?></td>
            <td><?php echo $row["jk"]?></td>
            <td><?php echo $row['prodi']?></td>
            <td><?php echo $row['fakultas']?></td>
            <td><?php echo $row["asal"]?></td>
            <td><?php echo $row["moto_hidup"]?></td>
            <td> <a href="form_update.php?nim=<?php echo $row['nim']?>">Update</a>

            </tr>
            <?php
    }
}else{
    echo "0 Result";
}
mysqli_close($conn);
?>
</body>
</table>

</html>
