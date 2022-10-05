<?php
include("koneksi-pendaftaran.php");
isset($_GET['id']);
$kode = $_GET['id'];
$sql= "DELETE FROM daftar WHERE id=$kode";
$query = mysqli_query($db, $sql);

if($query){
    hearder("Location:daftar.php?status=sukses");
}else{
    die("akses dilarang");
}
?>                   
