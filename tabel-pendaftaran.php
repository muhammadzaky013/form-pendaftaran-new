<?php
include ("koneksi.php");
?>
<html>
    <head></head>
    <body>
        <h1>Tabel Data Siswa<h1>
            <h4><a href ="form-pendaftaran.php">MendaftarkanDiri</a></h4>
            <table border=1>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap<th>
                    <th>Tempat Lahir<th>
                    <th>Tanggal Lahir<th>
                    <th>Alamat<th>
                    <th>Jenis Kelamin<th>
                    <th>Agama<th>
                    <th>Aksi<th>
</tr>
<?php
include ("koneksi.php");
$sql = "SELECT * FROM tb_daftar";
$query = mysqli_query($db, $sql);

while($daftar=mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>". $daftar['id']."</td>";
    echo "<td>". $daftar['nama']."</td>";
    echo "<td>". $daftar['tempat']."</td>";
    echo "<td>". $daftar['tanggal']."</td>";
    echo "<td>". $daftar['alamat']."</td>";
    echo "<td>". $daftar['jk']."</td>";
    echo "<td>". $daftar['agama']."</td>";
    echo "<td>";
    echo "<a href='edit.php?id=".$tb_daftar['id']."'>Edit</a> ||";
    echo "<a href='hapus.php?id=".$tb_daftar['id']."'>Hapus</a>";
    echo "</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>
