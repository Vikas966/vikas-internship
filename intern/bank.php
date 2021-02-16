<!DOCTYPE html>
<html>
<head>
	<title>Bank</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>
<link href='home.css' rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
<link href="footer.css" rel='stylesheet' type='text/css'>
	<?php

$server="localhost";
$user="root";
$password="";
$dbname="money_t";
$conn=mysqli_connect($server,$user,$password,$dbname);
if(!$conn){
	die("Connection failed ".mysql_connect_error());
}?>
	<link rel="stylesheet" type="text/css" href="sandy.css">
	<style type="text/css">
		.toggle{
	padding: 10px 30px;
	cursor: pointer;
	background: transparent;
	border:0;
	outline: none;
	position: relative;
}
	</style>
</head>
<body>
<script src="home.js"></script>
<header class="main_h">

<div class="row">
  <a class="logo" href="#">Vikas Bank</a>

  <div class="mobile-toggle">
	<span></span>
	<span></span>
	<span></span>
  </div>

  <nav>
	<ul>
	  <li><a href="#sec00">HOME</a></li>
	  <li><a href="#sec03">ABOUT US</a></li>
	  <li><a href="view.php">View Customers </a></li>
	  <li><a href="index.php">Transfer Money</a></li>
	  
	</ul>
  </nav>

</div> <!-- / row -->

</header>

	<center>
		
<div class="a" id="id1">
	
		<font size="1000%">
			
 <h1>Vikas Bank</h1>
 </font>
 


</div>
<br>
<hr>
		<div class= "ab1">
		<div class ="abimg">
			<div class="aabimg"><div class="aaabimg">
			<img src="d.jpg"></div>
			</div>
			</div>
            <div class="ab2">
            	<div class="ab3"><h1>About Bank</h1></div>
            	<div >
            		<p>
					            
					            
				Allow money trasfer online<br>
					Time efficient <br>
					User friendly web interactions <br>
		
</div>
            </div>
			</div>

					<div class="er1">
						<div class="er4">
						<div class="er2"><h1>
						our RESPONSIBILITIES</h1></div></div>
						<div class="er3">
						<ul>
 					<li>Making money transfer easy and effient </li>
<li>Safe fund transfer</li>
<li>User friendly website interaction</li>
<li>View our customer</li>

						</ul>
						</div>
						</div> 		
						<br>
				
		
		<br>
<div>
	<h1>SERVICES OFFERED</h1>
</div>
	<br>
	<div class="Serviceoffered">
	<div id="ima" class="imagebox">
		<div class="imagesslot">
			<div class="imagessubslot" >
			<img src="d1.png" onclick="fade1()" ></div>
			<div class="imagestext" onclick="fade1()">
				<button ><a href="view.php">View customers</a></button>
				
				
			</div>
		</div>
		<div class="imagesslot">
			<div class="imagessubslot" data-text="Repairs">
			<img src="d2.jpg" onclick="fade1()" ></div>
			<div class="imagestext" onclick="fade1()">
				<button ><a href="index.php">Transfer money </a></button>
			</div>
		</div>
		
		
	</div>
</div>
</div>
<hr>
</center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>+91 9090909090</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>vikas@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><h1>Vikas Bank</h1></a>
                            </div>
                            <div class="footer-text">
                                <p>This website allow users to make successfull trasaction </p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a>Home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">About us</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Help us improving by your valuable feedback.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
</body>
</html>
