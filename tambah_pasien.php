<!DOCTYPE html>
<html lang="en">
    <header>
<title>From Pendaftaran Pasien Baru</title>
<style>
        body{
    background-image:url('monic.jpg') ;
    color:black;
    background-size: cover;
         background-position: center;
         text-align: center;
         height: 100%
    font-family:Arial;
}
</style>
</head>
<center>
<body>
    <header>
    <h2>Form Pendaftaran Pasien Baru</h2>
</header>
</center>
    <form action="proses_tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama"/>
</p>
<p>
                     <label for="alamat">Alamat :</label>
                    <textarea name="alamat" row="5"></textarea>
</p>
<p>
                     <label for="jenis_kelamin">Jenis Kelamin :</label>
                    <label><input type="radio" name=jenis_kelamin value="laki-laki"/>Laki-Laki</label>
                    <label><input type="radio" name=jenis_kelamin value="perempuan"/>Perempuan</label>
</p>
<p>
                    <label for="no_tlp">No Tlp :</label>
                    <input type="number" name="no_tlp"/>
</p>
<p>
                    <label for="agama">Agama:</label>
                    <select name="agama" >
                        <option value="islam">islam</option>
                        <option value="kristen">kristen</option>
                        <option value="katholik">katholik</option>
                        <option value="budha">budha</option>
                        <option value="hindu">hindu</option>
                        <option value="khongucu">khongucu</option>
</select>

</p>
<p>
                   <label for="tanggal_masuk">Tanggal Masuk :</label>
                    <input type="date" name="tanggal_masuk"/>
</p>
<p>
                    <label for="gejala">Gejala:</label>
                    <input type="text" name="gejala"/>
</p>
<p>
                     <label for="tempat_lahir">Tempat Lahir:</label>
                    <input type="text" name="tempat_lahir"/>
</p>
<p>
                  <label for="tanggal_lahir">Tanggal Lahir :</label>
                    <input type="date" name="tanggal_lahir"/>
</p>
<p>
                     <label for="no_kamar">No Kamar :</label>
                    <input type="number" name="no_kamar"/>
</p>
<p>
                     <input type="submit" value="Tambah Pasien" name="tambah"/>
</p>
</fieldset>
</form>
</body>
</html>