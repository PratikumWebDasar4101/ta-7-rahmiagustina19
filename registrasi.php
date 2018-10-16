

<!DOCTYPE html>

<html>

<head>

    <title>Pendataan Mahasiswa</title>
</style>

</head>

<body>

    <form action="submit.php" method="post" enctype="multipart/form-data">

        <h1 align="center">Formulir Pendataan Mahasiswa</h1>

        <table align="center">

			<tr>

				<td>Nama</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="nama" minlength="1" maxlength="20">
				</td>
			</tr>
			<tr>
				<td>NIM</td>
			</tr>
			<tr>

				<td>

                    <input type="text" name="nim">
				</td>
			</tr>
			<tr>

				<td>Jenis Kelamin</td>
			</tr>
			<tr>
				<td>

					<input type="radio" name="jk" value="laki-laki" required>Laki-laki

					<input type="radio" name="jk" value="perempuan" required>Perempuan

				</td>

			</tr>
			<tr>
				<td>Prodi</td>
			</tr>
			<tr>
				<td>
					<select name="prodi">
						<option value="D3 Sistem Informasi">D3 Sistem Informasi</option>
						<option value="D3 Komputerisasi Akuntansi">D3 Komputerisasi Akuntansi</option>
						<option value="D3 Teknik Telekomunikasi">D3 Teknik Telekomunikasi</option>
						<option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
						<option value="D3 Manajemen Pemasaran">D3 Manajemen Pemasaran</option>
						<option value="D3 Perhotelan">D3 Perhotelan</option>
						<option value="D4 Sistem Multimedia">D4 Sistem Multimedia</option>
					</select>
				</td>
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
        </table>

    </form>

</body>

</html>
