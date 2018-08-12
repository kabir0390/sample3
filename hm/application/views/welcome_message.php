<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Hospital Management System</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="<?php echo base_url();?>assets/home/js/modernizr.js"></script>
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	
	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<br>
					<a href="index.html"><img src="<?php echo base_url();?>assets/home/img/logo.png" alt="" class="img-responsive logo"></a>
				</div>

				<div class="col-md-7">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      
					      <ul class="nav navbar-nav navbar-right">
					        <li><a class="menu active" href="#home" >Home</a></li>
					        <li><a class="menu" href="#about">about us</a></li>
					        <li><a class="menu" href="#service">our services </a></li>
					        <li><a class="menu" href="#team">our team</a></li>
					        <li><a class="menu" href="<?php echo base_url();?>Login">Login</a></li>
					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->

	<section class="slider" id="home">
		<div class="container-fluid">
			<div class="row">
			    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="header-backup"></div>
			        <!-- Wrapper for slides -->
			        <div class="carousel-inner" role="listbox">
			            <div class="item active">
			            	<img src="<?php echo base_url();?>assets/home/img/slide-one.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>providing</h1>
		               			<p>highquality service for men &amp; women</p>
		               			<button>learn more</button>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="<?php echo base_url();?>assets/home/img/slide-two.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>providing</h1>
		               			<p>highquality service for men &amp; women</p>
		               			<button>learn more</button>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="<?php echo base_url();?>assets/home/img/slide-three.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>providing</h1>
		               			<p>highquality service for men &amp; women</p>
		               			<button>learn more</button>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="<?php echo base_url();?>assets/home/img/slide-four.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>providing</h1>
		               			<p>highquality service for men &amp; women</p>
		               			<button>learn more</button>
			                </div>
			            </div>
			        </div>
			        <!-- Controls -->
			        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
			            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			            <span class="sr-only">Previous</span>
			        </a>
			        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
			            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			            <span class="sr-only">Next</span>
			        </a>
			    </div>
			</div>
		</div>
	</section><!-- end of slider section -->

	<!-- about section -->
	<section class="about text-center" id="about">
		<div class="container">
			<div class="row">
				<h2>about us</h2>
				<h4></h4>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail clearfix">
						<div class="about-img">
							<img class="img-responsive" src="<?php echo base_url();?>assets/home/img/item1.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>C</h1>
							</div>
							<h3>Children’s specialist</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="<?php echo base_url();?>assets/home/img/item2.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>W</h1>
							</div>

							<h3>Children’s specialist</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="<?php echo base_url();?>assets/home/img/item3.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>M</h1>
							</div>
							<h3>Children’s specialist</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of about section -->


	<!-- service section starts here -->
	<section class="service text-center" id="service">
		<div class="container">
			<div class="row">
				<h2>our services</h2>
				<h4></h4>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="heart img-responsive" src="<?php echo base_url();?>assets/home/img/service1.png" alt="">
							</div>
						</div>
						<h3>Heart problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="brain img-responsive" src="<?php echo base_url();?>assets/home/img/service2.png" alt="">
							</div>
						</div>
						<h3>brain problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="knee img-responsive" src="<?php echo base_url();?>assets/home/img/service3.png" alt="">
							</div>
						</div>
						<h3>knee problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="bone img-responsive" src="<?php echo base_url();?>assets/home/img/service4.png" alt="">
							</div>
						</div>
						<h3>human bones problem</h3>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of service section -->


	<!-- team section -->
	<section class="team" id="team">
		<div class="container">
			<div class="row">
				<div class="team-heading text-center">
					<h2>our Doctors</h2>
					<h4></h4>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="<?php echo base_url();?>assets/home/img/member1.jpg" alt="member-1">
					</div>
<!-- 
					<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iubat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM db_doctor";
$result = $conn->query($sql);

if ($result) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $arr[]= $row["doctor_first_name"];
         $arr_email[]= $row["doctor_email"];
           $arr_dept[]= $row["doctor_department"];
            $arr_designation[]= $row["doctor_designation"];
             $arr_phone[]= $row["doctor_phone"];

    }
} else {
    echo "0 results";
}

for ($i=0; $i <sizeof($arr); $i++) { 
  # code...
 print_r($arr[0]);
}

foreach ($arr as $key => $value) {

  echo $value;
  # code...
}
$conn->close();
?> 
	 -->				<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3><?php print_r($arr[0]);?></h3>
						<p>Email: <?php print_r($arr_email[0]);?>
						Department :<?php print_r($arr_dept[0]);?>
						Designation:<?php print_r($arr_designation[0]);?><br />
						Phone : <?php print_r($arr_phone[0]);?>
						 </p>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3><?php print_r($arr[1]);?></h3>
						<p>Email: <?php print_r($arr_email[1]);?>
						Department :<?php print_r($arr_dept[1]);?>
						Designation:<?php print_r($arr_designation[1]);?><br />
						Phone : <?php print_r($arr_phone[1]);?>
						 </p>
					</div>
					<div class="person">
						<img class="img-responsive" src="<?php echo base_url();?>assets/home/img/member2.jpg" alt="member-2">
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="<?php echo base_url();?>assets/home/img/member3.jpg" alt="member-3">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3><?php print_r($arr[2]);?></h3>
						<p>Email: <?php print_r($arr_email[2]);?>
						Department :<?php print_r($arr_dept[2]);?>
						Designation:<?php print_r($arr_designation[2]);?><br />
						Phone : <?php print_r($arr_phone[2]);?>
						 </p>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3><?php print_r($arr[3]);?></h3>
						<p>Email: <?php print_r($arr_email[3]);?>
						Department :<?php print_r($arr_dept[3]);?>
						Designation:<?php print_r($arr_designation[3]);?><br />
						Phone : <?php print_r($arr_phone[3]);?>
						 </p>
					</div>
					<div class="person">
						<img class="img-responsive" src="<?php echo base_url();?>assets/home/img/member4.jpg" alt="member-4">
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="<?php echo base_url();?>assets/home/img/member5.jpg" alt="member-5">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3><?php print_r($arr[4]);?></h3>
						<p>Email: <?php print_r($arr_email[4]);?>
						Department :<?php print_r($arr_dept[4]);?>
						Designation:<?php print_r($arr_designation[4]);?><br />
						Phone : <?php print_r($arr_phone[4]);?>
						 </p>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3><?php print_r($arr[5]);?></h3>
						<p>Email: <?php print_r($arr_email[5]);?>
						Department :<?php print_r($arr_dept[5]);?>
						Designation:<?php print_r($arr_designation[5]);?><br />
						Phone : <?php print_r($arr_phone[5]);?>
						 </p>
					</div>
					<div class="person">
						<img class="img-responsive" src="<?php echo base_url();?>assets/home/img/member6.jpg" alt="member-5">
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of team section -->

	<!-- map section -->
	<div class="api-map" id="contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 map" id="map"></div>
			</div>
		</div>
	</div><!-- end of map section -->

	<!-- contact section starts here -->
	<section class="contact">
		<div class="container">
			<div class="row">
				<div class="contact-caption clearfix">
					<div class="contact-heading text-center">
						<h2>contact us</h2>
					</div>
					<div class="col-md-5 contact-info text-left">
						<h3>contact information</h3>
						<div class="info-detail">
							<ul><li><i class="fa fa-calendar"></i><span>Monday - Friday:</span> 9:30 AM to 6:30 PM</li></ul>
							<ul><li><i class="fa fa-map-marker"></i><span>Address:</span> 123 Some Street , London, UK, CP 123</li></ul>
							<ul><li><i class="fa fa-phone"></i><span>Phone:</span> (032) 987-1235</li></ul>
							<ul><li><i class="fa fa-fax"></i><span>Fax:</span> (123) 984-1234</li></ul>
							<ul><li><i class="fa fa-envelope"></i><span>Email:</span> info@doctor.com</li></ul>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1 contact-form">
						<h3>leave us a message</h3>

						<form class="form" action="<?php echo base_url();?>Home/visitor_message">
							<input class="name" type="text" placeholder="Name" name="visitor_name">
							<input class="email" type="email" placeholder="Email" 
							name="visitor_email">
							<input class="phone" type="text" placeholder="Phone No:" 
							name="visitor_phone">
							<textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Message" name="visitor_message"></textarea>
							<input class="submit-btn" type="submit" value="SUBMIT">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of contact section -->

	<!-- footer starts here -->
	<footer class="footer clearfix">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 footer-para">
					<p>&copy;Md. Almgir Kabir All right reserved</p>
				</div>
				<div class="col-xs-6 text-right">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-skype"></i></a>
				</div>
			</div>
		</div>
	</footer>

	<!-- script tags
	============================================================= -->
	<script src="<?php echo base_url();?>assets/home/js/jquery-2.1.1.js"></script>
	<script src="<?php echo base_url();?>assets/home/http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="<?php echo base_url();?>assets/home/js/gmaps.js"></script>
	<script src="<?php echo base_url();?>assets/home/js/smoothscroll.js"></script>
	<script src="<?php echo base_url();?>assets/home/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/home/js/custom.js"></script>

	 <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b0bb8e18859f57bdc7b9d62/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
</body>
</html>