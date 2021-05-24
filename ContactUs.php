<?php
	session_start();
	if(isset($_POST['btn'])){
		include "app/ContactUs.php";
		$data=$_POST['frm'];
		$obj=new ContactUS();
		if($obj->sendMessage($data)){
			echo "Your message send to us!!";
		}
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>تماس با ما</title>
	<!-- CSS Stylesheets -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap4-rtl.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="ContactUs/css/style.css" />
</head>
<body class="rtl">
	<div class="contact1">
	<?php include "include/header.php"; ?>
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="ContactUS/pics/img-01.png" alt="IMG">
			</div>
			<form action="#" method="POST" class="contact1-form validate-form">
					<span class="contact1-form-title">فرم ارسال پیام</span>
				<div class="wrap-input1 validate-input" data-validate = "لطفا نام خود را وارد کنید!">
					<input class="input1" type="text" value="<?php if(isset($_SESSION['name'])){echo $_SESSION['name']; }?>" name="frm[name]" placeholder="نام شما">
					<span class="shadow-input1"></span>
				</div>
				<div class="wrap-input1 validate-input" data-validate = "لطفا ایمیل خود را وارد کنید!">
					<input class="input1" type="text" value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email']; }?>" name="frm[email]" placeholder="پست الکترونیک">
					<span class="shadow-input1"></span>
				</div>
				<div class="wrap-input1 validate-input" data-validate = "لطفا موضوع پیام را وارد کنید!">
					<input class="input1" type="text" name="frm[subject]" placeholder="موضوع پیام">
					<span class="shadow-input1"></span>
				</div>
				<div class="wrap-input1 validate-input" data-validate = "لطفا پیام خود را وارد کنید!">
					<textarea class="input1" name="frm[message]" placeholder="متن پیام"></textarea>
					<span class="shadow-input1"></span>
				</div>
				<div class="container-contact1-form-btn">
					<button type="submit" name="btn" class="contact1-form-btn">
							<span>ارسال پیام
								<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
							</span>
					</button>
				</div>
			</form>
		</div>
	</div>
	<!-- Scripts -->
	<script src="js/jquery-3.1.1.min.js"></script>
	<script  src="ContactUs/js/scripts.js"></script>
</body><!-- This template has been downloaded from Webrubik.com -->
</html>
