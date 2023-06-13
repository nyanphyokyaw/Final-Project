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
	<meta property="og:url" content="https://foodparadise.com/accountkorea.php" />
	<meta property="og:title" content="Account Korea Chinese" />
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
	a.two:link {color:#d65106;}
	a.two:visited {color:#d65106;}
	a.two:hover {font-size:150%;}
	
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


.pagination .page-link {
    color: #d65106;
    border-radius: 20px;
    border-color: #d65106;
    margin: 0 2px;

}

.pagination .page-link:hover,
.pagination .page-item.active .page-link {
    color: white;
    background: #d65106;
}

.pagination .disabled .page-link {
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
						<li class="nav-item"><a class="nav-link" href="user.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="accountproduct.php">Food Paradise</a></li>
						<li class="nav-item"><a class="nav-link" href="accountcontact.php">Feedback</a></li>
						<li class="nav-item"><a class="nav-link" href="accountabout.php">About Us</a></li>
					</ul>
				</div>
			</div>
			<a class="back" href="account.php"><img src="images/account.png" width="40">&nbsp Account</a>
		</nav>
	</header>
	<!-- End header -->
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	<div class="col-12">
                        <ul class="pagination pagination-lg justify-content-center">
                            <li class="page-item"><a class="page-link" href="user.php">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="accountproduct.php">1</a></li>
                            <li class="page-item"><a class="page-link" href="accountchicken.php">2</a></li>
                            <li class="page-item"><a class="page-link" href="accountkorea.php">3</a></li>
							<li class="page-item"><a class="page-link" href="accountmyanmar.php">4</a></li>
							<li class="page-item"><a class="page-link" href="accountmyanmars.php">5</a></li>
                            <li class="page-item"><a class="page-link" href="accountbeer.php">6</a></li>
							<li class="page-item"><a class="page-link" href="accountbeers.php">7</a></li>
                            <li class="page-item"><a class="page-link" href="accountnext.php">Next</a></li>
                        </ul> 
                    </div></br>
	<h1  align="center" style="color:red;"><b>Korea Food & Chinese Food</b></h1></br>
	
	 <?php
					 error_reporting(1);
					 include("connection.php");
						$sel=mysql_query("select * from korea ");
						echo"<form method='post'><table border='0' align='center'><tr>";
   $n=0;
    while($arr=mysql_fetch_array($sel))
   {
   $i=$arr['img'];
   
    if($n%5==0)
	{
	echo "<tr>";
	}
   echo "
   <td height='290' width='280' align='center'><img src='images/$i' height='250' width='250'><br/>
 
 <b>product name:</b>".$arr['prod_no'].
   "<br><b>Price:</b>&nbsp;".$arr['price'].
  "<br><a href='accountkoreaorder.php?img=$i'><b>Pick up</b></a>
   
   </td>";
   
  $n++;

   }
   	  echo "</tr></table>
       </form>";
	?>	
</br>
 <div class="row">
                    <div class="col-12">
                        <ul class="pagination pagination-lg justify-content-center">
                             <li class="page-item"><a class="page-link" href="user.php">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="accountproduct.php">1</a></li>
                            <li class="page-item"><a class="page-link" href="accountchicken.php">2</a></li>
                            <li class="page-item"><a class="page-link" href="accountkorea.php">3</a></li>
							<li class="page-item"><a class="page-link" href="accountmyanmar.php">4</a></li>
							<li class="page-item"><a class="page-link" href="accountmyanmars.php">5</a></li>
                            <li class="page-item"><a class="page-link" href="accountbeer.php">6</a></li>
							<li class="page-item"><a class="page-link" href="accountbeers.php">7</a></li>
                            <li class="page-item"><a class="page-link" href="accountnext.php">Next</a></li>
                        </ul> 
                    </div>
                </div>
				</br>
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4 arrow-right">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							09-09754921515
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