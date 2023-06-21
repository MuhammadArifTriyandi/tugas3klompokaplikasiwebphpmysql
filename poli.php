<!DOCTYPE html>
<html lang="en">
<head>
  <title>poli</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>FORM POLI</h2>
  <form method="post">
    <div class="mb-3 mt-3">
      <label for="namapoli">nama poli :</label>
      <input type="text" class="form-control" id="namapoli" placeholder="Enter nama poli " name="namapoli">
    </div>
    <div class="mb-3">
      <label for="kodepoli">kode poli:</label>
      <input type="int" class="form-control" id="kodepoli" placeholder="Enter kode poli" name="kodepoli">
    </div>
  
    <button type="submit" class="btn btn-primary" name="bSimpan" >Simpan</button>
  </form>
  <?php
   if (isset($_POST['bSimpan'])) {
    $namapoli = filter_var($_POST['namapoli'],FILTER_SANITIZE_STRING);
	  $kodepoli = filter_var($_POST['kodepoli'],FILTER_SANITIZE_STRING);
	
	  $kon=mysqli_connect("localhost","root","","tugas1");
	  $sql="insert into poli (namapoli,kodepoli,) values (
	  '".$namapoli."','".$kodepoli."')";
	  $q=mysqli_query($kon,$sql);
   }
  ?>
</div>

</body>
</html>