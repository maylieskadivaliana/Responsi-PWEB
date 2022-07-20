<?php
	$nama			= $_POST['nama'];
	$alamat			= $_POST['alamat'];
	$email			= $_POST['email'];
	$status			= $_POST['status'];
	$komentar		= $_POST['komentar'];

	echo "<head><title>data diri</head></title>";
	$fp = fopen("data.txt","a+");
	fputs($fp,"$nama|$alamat|$email|$status|$komentar\n");
	fclose($fp);

	echo "Terima Kasih Atas Partisipasi Anda Mengisi Identitas Diri<br>";
	echo "<a href=form.php> Isi data diri </a><br>";
	echo "<a href=lihat.php> lihat data diri </a><br>";
	echo "<a href=home.php> Kembali ke Home </a><br>";
?>