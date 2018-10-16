<?php
require_once("db.php");
$nim = $_GET["nim"];
$sql = "SELECT * FROM pendataan WHERE nim='$nim' ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="update.php" method="post">
        <table align="center" border="1">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $row["nama"]; ?>"></td>
            </tr>
            <tr>
                <td>Nim</td>
                <td>:</td>
                <td>
                    <input type="text" value="<?php echo $row["nim"]; ?>" disabled><input type="hidden" name="nim" value="<?php echo $row["nim"]; ?>">
            </td>
            </tr>
            <tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type="radio" name="jk" value="Laki-laki" <?php if($row["jk"]=="laki-laki"):echo "checked";endif; ?>>Laki-laki<br>
                    <input type="radio" name="jk" value="Perempuan" <?php if($row["jk"]=="perempuan"):echo "checked";endif; ?>>Perempuan<br></td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td>:</td>
                    <td>
                        <select name="prodi">
                            <option <? if($row["prodi"]=="D3 Sistem Informasi"): echo "selected";endif?>> D3 Sistem Informasi</option>
                            <option <? if($row["prodi"]=="D3 Komputerisasi Akuntansi"): echo "selected";endif?>>D3 Komputerisasi Akuntansi</option>
                            <option <? if($row["prodi"]=="D3 Teknik Telekomunikasi"): echo "selected";endif?>>D3 Teknik Telekomunikasi</option>
                            <option <? if($row["prodi"]=="D3 Teknik Informatika"): echo "selected";endif?>>D3 Teknik Informatika</option>
                            <option <? if($row["prodi"]=="D3 Manajemen Pemasaran"): echo "selected";endif?>>D3 Manajaemen Pemasaran</option>
                            <option <? if($row["prodi"]=="D3 Perhotelan"): echo "selected";endif?>>D3 Perhotelan</option>
                            <option><? if($row["prodi"]=="D4 Sistem Multimedia"): echo "selected";endif?>>D4 Sistem Multimedia</option>
                        </select>
                    </td>
                </tr>
                <tr>
                <td>Fakultas</td>
                <td> : </td>
                <td>
                <select name="fakultas">
                <option <?php if($row["fakultas"]=="FEB"):echo "selected";endif?>>FEB</option> 
                <option <?php if($row["fakultas"]=="FKB"):echo "selected";endif?>>FKB</option>
                <option <?php if($row["fakultas"]=="FRI"):echo "selected";endif?>>FIK</option>
                <option <?php if($row["fakultas"]=="FIK"):echo "selected";endif?>>FRI</option>
                <option <?php if($row["fakultas"]=="FTE"):echo "selected";endif?>>FTE</option>
                <option <?php if($row["fakultas"]=="FIF"):echo "selected";endif?>>FIF</option>
                <option <?php if($row["fakultas"]=="FIT"):echo "selected";endif?>>FIT</option>
                </select>
            </td>
            </tr>
            <tr>
                <td>Asal</td>
                <td>:</td>
                <td><input type="text" name="asal" value="<?php echo $row["asal"]; ?>"></td>
            </tr>
            <tr>
                <td>Moto Hidup</td>
                <td>:</td>
                <td><textarea name="moto_hidup" id="" cols="30" rows="1"><?php echo $row["moto_hidup"]?></textarea></td>
            </tr>
                <td colspan="2"><input type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>



