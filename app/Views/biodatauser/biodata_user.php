
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V14</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v14/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v14/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v14/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v14/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v14/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v14/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v14/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v14/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v14/css/util.css">
	<link rel="stylesheet" type="text/css" href="ContactFrom_v14/css/main.css">
<!--===============================================================================================-->
<link rel="shortcut icon" href="favicon.ico?v=1" type="image/x-icon">

</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
				
					Biodata Diri
				</span>
				
				<label class="label-input100" for="first-name">Username, 
					</label>
				<div class="wrap-input100 rs1 validate-input">
					<input id="first-name" class="input100" type="text" name="first-name" placeholder="First name"><?php foreach ($users as $us) :?>
				<?= $us['username'];?>	
				<?php endforeach; ?>
					<span class="focus-input100"></span>
				</div>
				<!-- <div class="wrap-input100 rs1 validate-input">
					<input class="input100" type="text" name="last-name" placeholder="Last name">
					<span class="focus-input100"></span>
				</div> -->

				<label class="label-input100" for="email">Email Address</label>
				<div class="wrap-input100 validate-input">
					<input id="email" class="input100" type="text" name="email" placeholder="Masukkan Email Address">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Phone Number</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="phone" placeholder="Masukkan nomor Handphone">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="message">Alamat Rumah</label>
				<div class="wrap-input100 validate-input">
					<textarea id="message" class="input100" name="message" placeholder="Masukkan alamat rumah"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="zmdi zmdi-arrow-right m-l-8"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="ContactFrom_v14/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom_v14/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom_v14/vendor/bootstrap/js/popper.js"></script>
	<script src="ContactFrom_v14/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom_v14/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom_v14/vendor/daterangepicker/moment.min.js"></script>
	<script src="ContactFrom_v14/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom_v14/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom_v14/js/main.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
