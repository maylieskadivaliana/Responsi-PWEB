<?php 

echo "<head><title>ID Pengguna</title></head>";
$fp = fopen("data.txt", "r");
echo("<center><h1>Identitas Diri</h1>");
echo ("<a href='tampilan.html'><b>::Isi Data diri::</b></a><br><hr>");
echo ("<a href=home.php> Kembali ke Home </a><br><hr>)";
echo "<table border='1' width='70%' style='text-align: center;'>";
echo("<tr><td>Tanggal</td><td>Nama</td><td>Alamat</td><td>Email</td><td>Status</td><td>Komentar</td></tr>");
$tanggal=date("Y-m-d");

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo("<tr><td>$tanggal</td>
    	<td>$pisah[0]</td>
    	<td>$pisah[1]</td>
    	<td>$pisah[2]</td>
    	<td>$pisah[3]</td>
    	<td>$pisah[4]</td></tr>");
}

echo "</table></center>";
?>