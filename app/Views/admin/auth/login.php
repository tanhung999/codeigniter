
<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/auth/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<?php if(isset($successMessage)): ?>
			<script type="text/javascript">alert("<?= $successMessage ?>");</script>
		<?php endif; ?>
		<h1><?=$title;?> Account</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
			<form action="<?php echo base_url();?>action_login" method="post">
					<input class="text" type="text" name="username" placeholder="Username" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<!-- <div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div> -->
					<button type="submit" style="padding:10px">SINGUP</button>
				</form>
				<p>Don't have an Account? <a href="http://localhost/codeigniter-main/public/signup"> SignUp Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2023 HungNgo Login Form. All rights reserved | Design by </p>
		</div>
		<!-- //copyright -->
		
	</div>
	<!-- //main -->
<!-- Code injected by live-server -->

</body>
</html>