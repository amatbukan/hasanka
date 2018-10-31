<!DOCTYPE html>
<?php
include "../config/koneksi.php";
   if(isset($_POST['pL'])){
      $myusername = $_POST['pU'];
      $mypassword = $_POST['pS']; 
	  
	  $hash_pass  = md5($mypassword);
      
      $sql 		= "SELECT * FROM users 
				  WHERE username = '$myusername' 
				  and password = '$hash_pass' AND blokir='N'";
	  
      $result 	= mysql_query($sql);
      $row 		= mysql_fetch_array($result);
      $count 	= mysql_num_rows($result);
	 
      if($count == 1) {
		$_SESSION[namauser]     = $row[username];
		$_SESSION[namalengkap]  = $row[nama_lengkap];
		$_SESSION[passuser]     = $row[password];
		$_SESSION[sessid]       = $row[id_session];
		$_SESSION[leveluser]    = $row[level];	  
		$_SESSION[foto]    		= $row[foto];	  
		header('location:beranda');
      }else{
			$_SESSION['pesan_salah'] = "<small>ID Pengguna/Sandi Salah</small>";
			header('Location:index');
			exit;
      }
   }
?>
<html lang="en">
<head>
	<title>Login Hasanka</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../assets/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../assets/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../assets/login/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST">
<?php
	if (isset($_SESSION['pesan_salah']) && $_SESSION['pesan_salah'] <> '') {
		echo pesan_salah($_SESSION['pesan_salah']);
	}
	unset($_SESSION['pesan_salah']);
?>
					<span class="login100-form-title p-b-34 p-t-27">
						Selamat Datang
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="pU" placeholder="Username" required oninvalid="this.setCustomValidity('Username Harus Diisi')" oninput="setCustomValidity('')" autofocus>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pS" placeholder="Sandi" required oninvalid="this.setCustomValidity('Sandi Harus Diisi')" oninput="setCustomValidity('')">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="pL">
							Masuk
						</button>
					</div>
					<!--<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Lupa Sandi ?
						</a>
					</div>-->
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="../assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="../assets/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../assets/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../assets/login/js/main.js"></script>
	<script type="text/javascript">
		window.setTimeout(function() { $(".alert-danger").fadeTo(700, 0).slideUp(700, function(){ $(this).remove(); }); }, 1500);

	</script>
</body>
</html>