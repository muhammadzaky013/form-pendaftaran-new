<?php
include("koneksi.php");

if(isset($_POSt['simpan'])){;
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$stanggal = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$JK = $_POST['jk'];
$agama = $_POST['agama'];

$sql = "UPDATE daftar SET nama='$nama', tempat='$tempat', tanggal='$tanggal', 'alamat='$alamat', jk='$jk', agama='$agama' ";
$query= mysqli_query($db,$sql);

if($query){
    header('Location:daftar.php');
}else{
    die ("Gagal menyimpan perubahan..");
}
}else{
    die("akses dilarang");
}
?>