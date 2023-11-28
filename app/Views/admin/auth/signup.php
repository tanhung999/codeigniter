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
		<?php if (session()->has('error')): ?>
			<script type="text/javascript">alert("<?php echo session('error'); ?>");</script>
		<?php endif; ?>

		<?php if (isset($validation) && $validation->hasError('password_confirm')): ?>
			<script type="text/javascript">alert("<?php echo $validation->getError('password_confirm'); ?>");</script>
		<?php endif; ?>
    </div>
		<h1><?=$title;?>  Account</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="<?php echo base_url();?>action_signup" method="post">
					<input class="text" type="text" name="username" placeholder="Username" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="password_confirm" placeholder="Confirm Password" required="">
					<!-- <div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div> -->
					<button type="submit">Sign Up</button>
				</form>
				<p>You have an Account? <a href="http://localhost/codeigniter-main/public/login"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
		</div>
		<!-- //copyright -->
		
	</div>
	<!-- //main -->
</body>
</html>
