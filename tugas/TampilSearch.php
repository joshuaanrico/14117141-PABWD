<?php
echo "<h1>DATA YANG DITEMUKAN</h1>";
$cari=$_POST['cari']
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"minggu8");

$hasil=mysqli_query($conn,"select nim,nama,foto,id_jur from mahasiswa natural join jurusan where nama like '%$cari%'");
$jumlah=mysqli_num_rows($hasil);

echo "<br>";
echo "Ditemukan: $jumlah";
echo "<br>";
echo "<br>";

while($baris=mysqli_fetch_array($hasil)){
    echo "NIM : ";
    echo $baris[0];
    echo "<br>";
    echo "Nama : ";
    echo $baris[1];
    echo "<br>";
    echo "Foto :";
    echo $baris[2];
    echo "<br>";
    echo "Jurusan :";
    echo $baris[3];
    echo "<br>";
    echo "<br>";
}
?>
<form action="TambahData.html">
    <input type ="submit" value="Menu Awal">
</form>