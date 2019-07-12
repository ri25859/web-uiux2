<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <a class="navbar-brand" href="#">Digital Talent</a>

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Programming
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">PHP</a>
        <a class="dropdown-item" href="#">ASP</a>
        <a class="dropdown-item" href="#">AJAX</a>
        <a class="dropdown-item" href="#">jQuery</a>
        <a class="dropdown-item" href="#">MYSQL</a>
        <a class="dropdown-item" href="#">CSS</a>
      </div>
	</li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Software
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">PHP</a>
        <a class="dropdown-item" href="#">ASP</a>
        <a class="dropdown-item" href="#">AJAX</a>
        <a class="dropdown-item" href="#">jQuery</a>
        <a class="dropdown-item" href="#">MYSQL</a>
        <a class="dropdown-item" href="#">CSS</a>
      </div>
	</li>
    <li class="nav-item">
		<a class="nav-link" href="#">Contact Us</a>
	</li>
  </ul>
</nav>
<div style="padding:100px;">
    <h2>Form Dengan Bootstrap</h2>
<br>
<div class="form-group">
	<form action="cek3.php" method="POST">
		<h5>Nama Anda</h5>
      <input class="form-control" style="width: 100%;" type="text" name="nama" required>
		<br><br>		
        <h5>Alamat Anda</h5>
        <textarea class="form-control" style="width: 100%;" rows="4" name="alamat" required></textarea>	
        <br><br>
        <h5>Tempat</h5>
      <input class="form-control" style="width: 100%;" type="text" name="tmpt" required>
		<br><br>	
		<h5>Pilih Jenis Kelamin</h5>
        <select class="form-control form-control-lg" style="width: 100%;" name="sex">
			<option value="Laki-Laki">Laki-Laki <br>
			<option value="Perempuan">Perempuan <br>
		</select>
        <br><br>
        <h5>Usia Anda</h5>
      <input class="form-control" style="width: 100%;" type="text" name="usia" required>
		<br><br>
	<input class="btn btn-primary" type="submit" name="submit" value="Simpan">
	</form></div>
</div>
<?php
        echo $_POST['nama'];
        echo $_POST['alamat'];
        echo $_POST['tmpt'];
        echo $_POST['sex'];
        echo $_POST['usia'];
        echo "<br>";
        echo $_GET['submit'];
    ?>
</body>
</html>