<?php
session_start();
include("library.php");
if(empty($_SESSION['id'])){ //fungsi jika session kosong, belum login
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SOSMED GADUNGAN</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
<?php
navbarindex();//memanggil fungsi navbarindex
modallogin();//memanggil fungsi modallogin
?>
  
<div class="container">
        <div class="jumbotron">
            <h2>NAMA SOSMED</h2>
            <p>AWAS... INI SOSMED GADUNGAN</p>
        </div>
	<div class="row">
			<div class="col-md-4">
			</div>
	<!-- ISI -->
		<div class="col-md-4">
		   <h3><center>PENDAFTARAN AKUN SUKSES! SILAHKAN LOGIN</center></h3>
		<form name="login" method="post" action="login.php">
		<div class="form-group">
			<label for="inputEmail">Email</label>
			<input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
		 </div>
		 <div class="form-group">
			<label for="inputPassword">Password</label>
			<input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
		  </div>
		<button type="submit" class="btn btn-primary">Login</button>
		</form>
		</div>
	</div>
	
<?php  
footer();// memanggil fungsi footer
?>
</div>

</body>
</html>

<?php
}else{
	header("Location:home.php"); // fungsi jika session sudah login
}
?>