<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $kode=$_POST['id'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $no_tlp=$_POST['no_tlp'];
    $agama=$_POST['agama'];
    $tanggal_masuk=$_POST['tanggal_masuk'];
    $gejala=$_POST['gejala'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $no_kamar=$_POST['no_kamar'];

    $sql = "UPDATE tb_pasien SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', no_tlp='$no_tlp', agama='$agama', tanggal_masuk='$tanggal_masuk', gejala='$gejala', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', no_kamar='$no_kamar' WHERE id=$kode";
    $query= mysqli_query($koneksi,$sql);

    if($query){
        header('Location:pasien.php');
    }else{
        die ("gagal mengedit");
    }}
    else{
        die ("akses dilarang");
    }
?>