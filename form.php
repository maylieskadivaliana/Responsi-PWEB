<html>

<head>
	<title>ID</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
	<div align="center"><strong><font size="6" face="Courier New, Courier,mono">Pengisian ID </font></strong></div>
	<form name="form1" method="post" action="proses.php">
	<table width="58%" border="0" align="center">

	<tr>
		<td>Nama Lengkap</td>
		<td><input name="nama" type="text" id="nama"></td>
	</tr>

	<tr>
		<td>Alamat</td>
		<td><input name="alamat" type="text" id="alamat"></td>
	</tr>

	<tr>
		<td>E-Mail</td>
		<td><input name="email" type="text" id="email"></td> </tr>
	</tr>

	<tr>
		<td>Status</td>
		<td><select name="status" id="status">
			<option>Mahasiswa</option>
			<option>Siswa</option>
		</select></td>
	</tr>

	<tr>
		<td>Komentar</td>
		<td><textarea name="komentar" id="komentar"></textarea></td> </textarea>
	</tr>

	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="Submit" value="Kirim"><input type="reset"name="Submit2" value="Batal"></td>
	</tr>

	</table>
	</form>
	<div align="center"><strong><a href="lihat.php">::Lihat Data::</a></strong></div>
	<div align="center"><strong><a href="home.php">::Kembali ke Home::</a></strong></div>
</body>
</html>