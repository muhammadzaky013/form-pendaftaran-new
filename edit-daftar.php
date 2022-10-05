<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("Location:tabel-daftar.php?");
}
    $kode=$_GET['id'];
    $sql="SELECt * FROM tb_daftar WHERE id=$kode";
    $query = mysqli_query($db,$sql);
    $daftar = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1){
        die ("Data tidak ditemukan");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>EDIT DATA DARI PENDAFTARAN</title>
    </head>
    <body>
        <h3>EDIT DATA DARI PENDAFTARAN </h3>
        <form action="proses-edit.php" method="POST">
            <fieldset>
            <input type="hidden" name="id" value="<?php echo $daftar['id']?>" />
            <p>
                <label for="nama">Nama Lengkap : </label>
                <input type="text" value="<?php echo $daftar['nama']?>" />
            </p>
            <p>
                <label for="tempat">Tempat Lahir : </label>
                <input type="text" name="tempat" value="<?php echo $daftar['tempat']?>" />
            </p>
            <p>
                <label for="tanggal">Tanggal Lahir : </label>
                <input type="date" name="tanggal" value="<?php echo $daftar['tanggal']?>" />
            </p>
            <p>
                <label for="alamat">Alamat : </label>
                <textarea name="alamat" rows="5" value="<?php echo $daftar['alamat']?>" ></textarea>
            </p>
            <P>
                <label for="jk">Jenis kelamin :</label>
                <label><input type="radio" name="jk" value="Laki-laki"<?php echo('Laki-laki') ? "checked": ""?> /> Laki-laki </label>
                <label><input type="radio" name="jk" value="Perempuan"<?php echo('Perempuan') ? "checked": ""?> /> Perempuan </label>
</p>
            <p>
                <label for="agama" >Agama : </label>
                <select name="agama">
                    <option <?php echo ('Islam') ? "selected": "" ?>>Islam </option>
                    <option <?php echo ('Kristen') ? "selected": "" ?>>Kristen </option>
                    <option <?php echo ('Katholik') ? "selected": "" ?>>Katholik </option>
                    <option <?php echo ('Hindu') ? "selected": "" ?>>Hindu </option>
                    <option <?php echo ('Buddha') ? "selected": "" ?>>Buddha </option>
                    <option <?php echo ('Konghucu') ? "selected": "" ?>>Konghucu </option>
</select>
            </p>
            <p>
                <input type="submit" value="Simpan" echo name="simpan" />
            </p>
        </fieldset>

    </from>
</body>
</html>