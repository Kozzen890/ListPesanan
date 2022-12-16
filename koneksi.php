<?php  
$servername = "localhost";
$database = "dinusresto";
$username = "root";
$password = "root";

$koneksi = mysqli_connect($servername,$database,$username,$password);
if(!$koneksi){
  die("Koneksi Gagal : " . mysqli_connect_error());
}
echo "Koneksi Berhasil";
mysqli_close($koneksi);
?>