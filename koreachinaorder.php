<?php
error_reporting(1);
session_start();
$i=$_REQUEST['img'];
$_SESSION['sid']=$_POST['id'];
include("connection.php");
$i=$_REQUEST['img'];
if($_POST['ord'])
{ 
$prodno=$_POST['prodno'];
$price=$_POST['price'];
$name=$_POST['nam'];
$phone=$_POST['pho'];
$qu=$_POST['qu'];
$si=$_POST['si'];
$me=$_POST['me'];
$adds=$_POST['adds'];
$add=$_POST['add'];
$ordno=ord.rand(100,500);
$pay=$_POST['pay'];
$namecard=$_POST['namecard'];
$ccnumber=$_POST['ccnumber'];
$exp=$_POST['exp'];
if(mysql_query("insert into orders(productno,price,name,phone,qu,si,me,adds,address,order_no,pay,namecard,ccnumber,exp) values('$prodno','$price','$name','$phone','$qu','$si','$me','$adds','$add','$ordno','$pay','$namecard','$ccnumber','$exp')"))
{
//echo "<script>location.href='koreachinasent.php?prod'</script>";
header("location:koreachinasent.php?order_no=$ordno");  }
else {$error= "user already exists";}}
	
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Food Paradise : Food Delivery in Yangon</title>  
    <meta name="keywords" content="Burger, Pizza, Korea Food, Myanmar Food, Liquors">
    <meta name="description" content="We Intended that consumers can order a various kinds of food in one place">
    <meta name="author" content="Hedamn!">
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://foodparadise.com/koreachinaorder.php" />
	<meta property="og:title" content="Korea Chinese Order" />
	<meta property="og:site_name" content="Online Food Delivery Service" />

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon55.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
	a.back:link, a.back:visited {
	color: black;
	padding: 10px 20px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	margin-right: auto;
}

a.back:hover, a.back:active {
	color: #d65106;
}
</style>
</head>
<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="images/aa1.png" alt="" width="120px"/>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="product.php">Food Paradise</a></li>
						<li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Feedback</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
					</ul>
				</div>
			</div>
			<a class="back" href="login.php"><img src="images/Login1.png" width="40">&nbsp LOGIN</a>
		</nav>
	</header>
	<!-- End header -->
	
	
		<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Korea Food & Chinese Food Order Form</h1>
				</div>
			</div>
		</div>
	</div>
	
	<div class="contact-box">
		<div class="container">
			<div class="row">
			<div class="col-lg-12">
			<div class="col-md-12">
			<div class="form-group">
            <img src="images/giphy.gif" align="right" width="600">
	<?php
			include("connection.php");
			$sel=mysql_query("select * from korea  where img='$i' ");
			$mat=mysql_fetch_array($sel);
			
			?>
            <form  method="post">
				
                <label>Product No: </label><br/>
                <input type="text" name="prodno" id="prodno" value="<?php echo $mat['prod_no'];?>" class="input_field" /><br/>
                <label>price:  </label><br/>
                <input type="text" name="price" id="price" value="<?php echo $mat['price'];?>" class="input_field" /><br/>
				 <label>Customer Name: </label><br/>
                <input type="text" name="nam" id="nam" class="input_field" /><br/>
				 <label>Customer Phone: </label><br/>
                <input type="text" name="pho" id="php" class="input_field" /><br/>
				<label>Quantity: </label><br/>
                1 <input type="radio" name="qu" id="qu" value="1"  />
				2 <input type="radio" name="qu" id="qu" value="2"  />
				3 <input type="radio" name="qu" id="qu" value="3" />
				4 <input type="radio" name="qu" id="qu" value="4" />
				5 <input type="radio" name="qu" id="qu" value="5" />
				6 <input type="radio" name="qu" id="qu" value="6" />
				7 <input type="radio" name="qu" id="qu" value="7" />
				8 <input type="radio" name="qu" id="qu" value="8" /><br/></br>
				<label>Size: </label><br/>
                Medium <input type="radio" name="si" id="si" value="Medium"  />
				Large <input type="radio" name="si" id="si" value="Large"  /></br></br>
				<label>Meat: </label><br/>
                Chicken <input type="radio" name="me" id="me" value="Chicken"  />
				Pork <input type="radio" name="me" id="me" value="Pork"  /></br></br>
				<label>When do you want to arrive?</br>Wait at least hlaf an hour</label><br/>
                <textarea id="adds" name="adds" rows="0" cols="0" class="required">Next 30minute</textarea><br/><br/>
				 <label>Address: </label><br/>
                <textarea id="add" name="add" rows="0" cols="0" class="required"></textarea><br/><br/>
				<label>Payment: </label><br/>
				<img src="images/download.png" width="60">
				Visa Pay: <input type="radio" name="pay" id="pay" value="Visa Pay"  />
				<img src="images/mpu.png" width="60">
				MPU Pay: <input type="radio" name="pay" id="pay" value="MPU Pay"  />
				<img src="images/og_image_for_kbzpay.png" width="60">
				K-Pay: <input type="radio" name="pay" id="pay" value="K-Pay"  />
				<img src="images/unnamed.png" width="60">
				Wave Pay: <input type="radio" name="pay" id="pay" value="Wave Pay"  />
				<img src="images/7196078_preview.png" width="80">
				Cash On Delivery: <input type="radio" name="pay" id="pay" value="Cash on Delivery"  /></br>
				<label>Name On Card: </label><br/>
                <input type="text" name="namecard" id="namecard" class="input_field" /><br/>
				<label>Credit card number: </label><br/>
                <input type="text" name="ccnumber" id="ccnumber" class="input_field" /><br/>
				<label>Exp Month/Year: </label><br/>
                <input type="text" name="exp" id="exp" class="input_field" /><br/></br>
                <input type="submit" name="ord" id="ord" value="sent order" class="submit_button" />
				 <input type="submit" name="Cancel" value="Cancel" class="submit_button" />
				
            </form>
			</br></br>
			<div class="mapouter"><div class="gmap_canvas"><iframe width="1080" height="700" id="gmap_canvas" src="https://maps.google.com/maps?q=yangon%20parami%20sein%20gay%20har&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://yt2.org">youtube to mp3</a><br><style>.mapouter{position:relative;text-align:right;height:700px;width:1080px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:700px;width:1080px;}</style></div></div>
			
	
		<div class="clear"></div>
    </div> <!-- END of tooplate_main -->
    <div style="display:none;" class="nav_up" id="nav_up"></div>
		</div>
		</div>
		</div>
		</div>
		</div>
		
	
	
			<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4 arrow-right">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							09-754921515
						</p>
					</div>
				</div>
				<div class="col-md-4 arrow-right">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							hedamn123@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							NO (71) , Parami Street ,  Hlaing Township , In Yangon
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
		
            
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="http://facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="http://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="http://vk.com"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="http://youtube.com"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="http://instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
					<h4 style="color:white"><b>We Deliver For U&#x2757;</b></h4>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">No(71) , Parami street , Near By Parami Sein Gay Har , Hlaing Township , In Yangon</p>
					<p class="lead"><a href="tel:09754921515">+9754921515</a></p>
					<p><a href="mailto:hedamn123@gmail.com">hedamn123@gmail.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday :</span>9:00AM - 5:30PM</p>
					<p><span class="text-color">Tueday :</span>9:00AM - 5:30PM(Deli Free)</p>
					<p><span class="text-color">Wedday :</span>9:00AM - 5:30PM</p>
					<p><span class="text-color">Thuday :</span>9:00AM - 5:30PM(Deli Free)</p>
					<p><span class="text-color">Friday :</span>9:00AM - 5:30PM</p>
					<p><span class="text-color">Satday :</span>8:00AM - 6:30PM</p>
					<p><span class="text-color">Sunday :</span>8:00AM - 6:30PM</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Delivery Fees</h3>
					<p>Hlaing Township -2000(KS)</p>
					<p>Kamar Yunt-2000(KS)</p>
					<p>Sanchaung-2000(KS)</p>
					<p>Mayangine-2000(KS)</p>
					<p>Insein-2500(KS)</p>
					<p>Lamadaw-2500(KS)</p>
					<p>Lathar-2500(KS)</p>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					<p class="company-name">2021 &copy; Yangon Food Paradise</p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	
<script src="js/scroll-startstop.events.jquery.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function() {
		var $elem = $('#content');
		
		$('#nav_up').fadeIn('slow');
		
		$(window).bind('scrollstart', function(){
			$('#nav_up,#nav_down').stop().animate({'opacity':'0.2'});
		});
		$(window).bind('scrollstop', function(){
			$('#nav_up,#nav_down').stop().animate({'opacity':'1'});
		});
		
		$('#nav_up').click(
			function (e) {
				$('html, body').animate({scrollTop: '0px'}, 800);
			}
		);
	});
</script>
	
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>