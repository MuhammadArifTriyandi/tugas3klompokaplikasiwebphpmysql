<!DOCTYPE html>
<html lang="en">
<head>
  <title>pasien</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Form PASIEN </h2>
  <form method="post">
    <div class="mb-3 mt-3">
      <label for="nomorrekammedis">Nomor rekam medis:</label>
      <input type="text" class="form-control" id="nomorrekammedis" placeholder="Enter nomor rekam medis" name="nomorrekammedis">
    </div>
    <div class="mb-3">
      <label for="nomorktp">Nomor ktp:</label>
      <input type="text" class="form-control" id="nomorktp" placeholder="Enter nomor ktp" name="nomorktp">
    </div>
    <div class="mb-3">
	 <label for="namapasien">Nama pasien : </label>
	 <textarea class="form-control" name="namapasien" title="Ketik namapasien "></textarea>
	</div>
	<div class="mb-3 mt-3">
      <label for="agama">AGAMA:</label>
      <input type="text" class="form-control" id="agama" placeholder="agama" name="agama">
    </div>
    <div class="mb-3">
      <label for="tanggallahir">TANGGAL LAHIR:</label>
      <input type="date" class="form-control" id="tanggallahir" title="Enter tanggal lahir" name="tanggallahir">
    </div>
	<div class="mb-3">
      <label for="jeniskelamin">Jenis klamin:</label>
      <input type="text" class="form-control" id="jeniskelamin" title="Enter jenis kelamin" name="jeniskelamin">
    </div>
	<div class="mb-3">
	 <label for="golongandarah">golongan darah : </label>
	 <textarea class="form-control" name="golongandarah" title="Ketik golongandarah "></textarea>
	</div>
  <div class="mb-3">
	 <label for="kodepoli">kode poli : </label>
	 <textarea class="form-control" name="kodepoli" title="Ketik kodepoli "></textarea>
	</div>
	<div class="mb-3">
	 <select >
	  <?php 
	  $kon=mysqli_connect("localhost","root",""," tugas1");
	  $sql="select * from pasien";
	  $qpasien=mysqli_query($kon,$sql);
	  $rpasien=mysqli_fetch_array($qpasien);
	  do {
	  ?>
	  <option values="<?php echo $rpasien['kodepoi'];?>"><?php echo $rpasien['kodepoli'];?></option>
	  <?php
	  } while($rpasien=mysqli_fetch_array($qpasien));
	  ?>
	 </select>
	</div>
    <button type="submit" class="btn btn-primary" name="bSimpan" >Simpan</button>
  </form>
  <?php
   if (isset($_POST['bSimpan'])) {
    $nomorrekammedis= filter_var($_POST['nomorrekammedis'],FILTER_SANITIZE_STRING);
      $nomorktp = filter_var($_POST['nomorktp'],FILTER_SANITIZE_STRING);
	  $namapasien = filter_var($_POST['namapasien'],FILTER_SANITIZE_STRING);
	  $agama = filter_var($_POST['agama'],FILTER_SANITIZE_STRING);
	  $tanggallahir= filter_var($_POST['tanggallahir'],FILTER_SANITIZE_STRING);
	  $jeniskelamin= filter_var($_POST['jeniskelamin'],FILTER_SANITIZE_STRING);
	  $golongandarah= filter_var($_POST['golongandarah'],FILTER_SANITIZE_STRING);
    $kodepoli = filter_var($_POST['kodepoli'],FILTER_SANITIZE_STRING);

	  $sql="insert into pasien (nomorrekammedis,nomorktp,namapasien,agama,tanggallahir,jeniskelamin,golongandarah,kodepoli) values (
      '".$nomorrekammedis."','".$nomorktp."','".$namapasien."','".$agama."','".$tanggallahir."','".$jeniskelamin."','".$golongandarah."','".$kodepoli."')";
    $q=mysqli_query($kon,$sql);
   }
  ?>
</div>

</body>
</html>