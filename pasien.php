<?php 
include 'koneksi.php';
?>
 
<h1>Pencarian Pasien KHAYANGAN</h1>
 <h4><a href=index.php>Ke Halaman Utama</a></h4>
<form action="pasien.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
<?php
include("koneksi.php");?>
<html>

<head>
<title>Document</title>
    <style>
        body{
    background-image:url('123.jpg') ;
    color:black;
    background-size: cover;
         background-position: center;
         text-align: center;
         height: 100%
    font-family:Arial;
}
</style>
.action-btn {
</head>
<body>

<table border="1">
    <tr>
        <th>id</th>
        <th>nama</th>
        <th>alamat</th>
        <th>jenis_kelamin</th>
        <th>no_tlp</th>
        <th>agama</th>
        <th>tanggal_masuk</th>
        <th>gejala</th>
        <th>tempat_lahir</th>
        <th>tanggal_lahir</th>
        <th>no_kamar</th>
        
</tr>

<?php
     include("koneksi.php");
     
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$sql = "SELECT * FROM tb_pasien  WHERE nama LIKE '%".$cari."%'";	
        $query=mysqli_query($koneksi,$sql);			
	}else{
		$sql = 'SELECT *FROM tb_pasien';
        $query=mysqli_query($koneksi,$sql);			
	}
	
    
	

     while($pasien=mysqli_fetch_array($query)){
    echo "<tr>";
          echo "<td>".$pasien['id']."</td>";
          echo "<td>".$pasien['nama']."</td>";
          echo "<td>".$pasien['alamat']."</td>";
          echo "<td>".$pasien['jenis_kelamin']."</td>";
          echo "<td>".$pasien['no_tlp']."</td>";
          echo "<td>".$pasien['agama']."</td>";
          echo "<td>".$pasien['tanggal_masuk']."</td>";
          echo "<td>".$pasien['gejala']."</td>";
          echo "<td>".$pasien['tempat_lahir']."</td>";
          echo "<td>".$pasien['tanggal_lahir']."</td>";
          echo "<td>".$pasien['no_kamar']."</td>";
          echo "<td>";
          
          echo "<a href='edit_pasien.php?id=".$pasien['id']."'>Edit</a> |";
          echo "<a href='hapus.php?id=".$pasien['id']."'>Hapus</a> |";
          echo "</td>";
          echo '</tr>';

     }
     ?>
     </table>
    </body>
    </html>