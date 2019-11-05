<html>
<head>
  <title>Data Mahasiswa Itera</title>
</head>
<body>
  
  <h1>Simpan Data Mahasiswa Itera</h1>
  
  <?php
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $foto = $_POST["foto"];
    $prodi = $_POST["prodi"];
    $conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal");
    mysqli_select_db($conn,"minggu8");

    echo "NRP/NIM : $nim <br>";
    echo "Nama : $nama <br>";
    echo "Foto : $foto <br>";
    echo "Jurusan : $prodi <br>";
    
    $sqlstr1="insert into mahasiswa values ('$nim','$nama','$foto','$prodi')";
    $hasil = mysqli_query($conn,$sqlstr1);
    
    echo "<br>";
    echo "Simpan Data Mahasiswa berhasil Sukses";
  ?>
  
  <form action="TambahData.html">
      <input type ="submit" value="Menu Awal">
  </form>

</body>
</html>