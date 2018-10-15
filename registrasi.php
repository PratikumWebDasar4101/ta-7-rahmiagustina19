<?php

session_start();

if(isset($_SESSION["pesan_nama"]) || isset($_SESSION["pesan_nim"]) || isset($_SESSION["pesan_email"])) {

    if(isset($_SESSION["pesan_nama"])) {

        $pesan_nama = $_SESSION["pesan_nama"];

    }else {

        $pesan_nama = "";

    }

    if(isset($_SESSION["pesan_nim"])) {

        $pesan_nim = $_SESSION["pesan_nim"];

    }else {

        $pesan_nim = "";

    }

    if(isset($_SESSION["pesan_email"])) {

        $pesan_email = $_SESSION["pesan_email"];

    }else {

        $pesan_email = "";

    }

    session_destroy();

}

?>

<!DOCTYPE html>

<html>

<head>

    <title>Pendataan Mahasiswa</title>
</style>

</head>

<body>

    <form action="submit.php" method="post">

        <h1 align="left">Formulir Registrasi</h1>

        <table align="left">

			<tr>

				<td>Nama</td>

			</tr>

			<tr>

				<td>

                    <input type="text" name="nama">

                    <?php if(isset($_SESSION["pesan_nama"])) { ?>

                    <p><?php echo $pesan_nama ?></p>

                    <?php } ?>

                </td>

			</tr>

			<tr>

				<td>NIM</td>

			</tr>
			<tr>

				<td>

                    <input type="text" name="nim">

                    <?php if(isset($_SESSION["pesan_nim"])) { ?>

                    <p><?php echo $pesan_nim ?></p>

                    <?php } ?>

                </td>

			</tr>
			<tr>

				<td>Jenis Kelamin</td>

			</tr>

			<tr>

				<td>

					<input type="radio" name="jk" value="laki-laki">Laki-laki

					<input type="radio" name="jk" value="perempuan">Perempuan

				</td>

			</tr>

			<tr>
				<td>Prodi</td>
				
					<td><input type="radio" name="prodi" value="D3 Sistem Informasi">D3 Sistem Informasi</td>
					<td><input type="radio" name="prodi" value="D4 Sistem Multimedia">D3 Sistem Multimedia</td>
					<td><input type="radio" name="prodi" value="D3 Komputerisasi Akuntansi">D3 Komputerisasi Akuntansi</td>
					<td><input type="radio" name="prodi" value="D3 Teknik Telekomunikasi">D3 Teknik Telekomunikasi</td>
					<td><input type="radio" name="prodi" value="D3 Manajemen Pemasaran">D3 Manajemen Pemasaran</td>
					<td><input type="radio" name="prodi" value="D3 Perhotelan">D3 Perhotelan</td>
					<td><input type="radio" name="prodi" value="D3 Teknik Informatika">D3 Teknik Informatika</td>
				
			</tr>
			<tr>

				<td>Fakultas</td>

			</tr>

			<tr>

				<td>

					<select name="fakultas">

						<option value="FEB">FEB</option>

						<option value="FKB">FKB</option>

						<option value="FRI">FRI</option>

						<option value="FIK">FIK</option>

						<option value="FTE">FTE</option>

						<option value="FIF">FIF</option>

						<option value="FIT">FIT</option>

					</select>

				</td>

			</tr>
			<tr>

				<td>Asal</td>

			</tr>

			<tr>

				<td>

                    <input type="text" name="asal">


			<tr>

				<td>Moto Hidup</td>

			</tr>

			<tr>

				<td><textarea name="moto_hidup"></textarea></td>

			</tr>

			<tr>

				<td align="left"><input type="submit" name="submit" value="Kirim"></td>

			</tr>
			<tr>
				<td><a href="lihatmahasiswa.php">lihat mahasiswa</td>
			</tr>
        </table>

    </form>

</body>

</html>