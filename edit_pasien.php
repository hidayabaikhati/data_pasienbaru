<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("Location:pasien.php?");
}
$kode=$_GET['id'];
$sql="SELECT * FROM tb_pasien where id=$kode";
$query = mysqli_query($koneksi,$sql);
$pasien = mysqli_fetch_assoc($query);
if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
}

?>
<html>
    <head>
</head>
<body>
    <h1>From Edit </h1>
    <form action="proses_edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $pasien['id']?>" />
            <p>
                <label for="nama">Nama Lengkap :</label>
                <input type="text" name="nama" value= "<?php echo $pasien['nama']?>" />
</p>
<p>
                <label for="alamat">Alamat :</label>
                <input type="text"  name="alamat" row="5" value="<?php echo $pasien['alamat']?>" />
</p>
<p>
                <label for="jenis_kelamin">jenis_kelamin :</label>
               <label> <input type="radio" name="jenis_kelamin"value="laki-laki"<?php echo $pasien['jenis_kelamin']?> />Laki-laki</label>
               <label> <input type="radio" name="jenis_kelamin"value="perempuan"<?php echo $pasien['jenis_kelamin']?> />perempuan</label>
</p>
<p>
                <label for="no_tlp">No Telephone :</label>
                <input type="number"  name="no_tlp" row="5" value="<?php echo $pasien['no_tlp']?>" />
</p>
<p>
               <label for="agama">agama :</label>
                <select  name="agama" value="<?php echo $pasien['agama']?>" >
                <option value="islam">Islam</option>
                <option value="kristen">kristen</option>
                <option value="katholik">katholik</option>
                <option value="budha">budha</option>
                <option value="hindu">hindu</option>
                <option value="khongucu">khongucu</option>
</select>
                
</p>
<p>
    <label for="tanggal_masuk">tanggal_masuk:</label>
    <input type="date" name="tanggal_masuk" value="<?php echo $pasien['tanggal_masuk']?>"/>
</p>
<p>
     <label for="gejala">gejala:</label>
    <input type="text" name="gejala" value="<?php echo $pasien['gejala']?>"/>
</p>
<p>
    <label for="tempat_lahir">tempat_lahir:</label>
    <input type="text" name="tempat_lahir" value="<?php echo $pasien['tempat_lahir']?>"/>
</p>
<p>
    <label for="tanggal_lahir">tanggal_lahir:</label>
    <input type="date" name="tanggal_lahir" value="<?php echo $pasien['tanggal_lahir']?>"/>
</p>
<p>
    <label for="no_kamar">no_kamar:</label>
    <input type="number" name="no_kamar" value="<?php echo $pasien['no_kamar']?>"/>
</p>
<p>
    <input type="submit" value="Edit" name="edit"/>
</p>
</fieldset>
</form>
</body>
</html>
                