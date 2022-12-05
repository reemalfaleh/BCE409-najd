<!DOCTYPE html>

	<html lang="en">

			<head>

				<title> Najd | Home Page </title>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
				<meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- might remove-->
				
				<!-- BOOTSTRAP CSS -->
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
				
				<!-- EXTERNAL STYLE SHEET -->
				<link rel="stylesheet" href="CSS/HomePage.css">

				<!-- Lust Font -->
				<link rel="stylesheet" href="https://use.typekit.net/sor3jvd.css">

				
			</head>
			
			<body>

				<!-- NAVIGATION -->
				<div class="navbar navbar-light navbar-expand-lg ">
				
					<div class="container">
					
						<a class="navbar-brand" href="HomePage.php"> <img  onmouseover="this.src='images/logo2.jpg'" onmouseout="this.src='images/logo.jpg'" id="logo" src="images/logo.jpg" alt="image of logo"></a>
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<div class="collapse navbar-collapse" id="collapsibleNavbar">
								
									<ul class="navbar-nav mx-auto ">
									  
										<li class="nav-item">
										  <a class="nav-link active" href="HomePage.php">Home</a>
										</li>
										
										<li class="nav-item">
										  <a class="nav-link" href="aboutUs.php">About</a>
										</li>
										
										<li class="nav-item">
										  <a class="nav-link" href="Services.php">Services</a>
										</li>
										
										<li class="nav-item">
										  <a class="nav-link" href="Inspiration.php">Inspiration</a>
										</li>
										
										<li class="nav-item">
										  <a class="nav-link" href="contact.php" >Contact Us</a>
										</li>
									
									</ul>

									<ul class="nav navbar-nav navbar-right" id="right-nav">
										
										<li class="nav-item" >
											<a class="nav-link" href="login.php" ><i class="fa-solid fa-user"></i> Account</a>
										</li>

									</ul>
									
						</div>
								
					</div>
								
				</div>
				<!-- END NAVIGATION -->

				<!-- IMAGE CAROUSEL --> <!--ask deem to fix-->
				<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="2500" >
					
					<!-- CAROUSEL CONTENT -->
					<div class="carousel-inner" ><!-- if i want to change the height add this attribute here style="height: 80vh;"-->
						
							<div class="carousel-item active " >
							
								<img class="w-100" src="images/Homepage/heading3.jpg" alt="chair image" >
									
								<div class="carousel-caption">
									
									<h1>Upholster</h1>
									<p>Choose your piece and upholster it for the life you want to live.</p>
								</div> 
							  
							</div>

							<div class="carousel-item">
							
							  	<img class="w-100" src="images/Homepage/heading2.jpeg" alt="fabric image " >
							
								<div class="carousel-caption ">
									<h1>Luxurios</h1>
									<p>thosends of fineast and most Luxurios materilas to fulfuil your taste and requirements.</p>

								</div>
							
							</div>
							 

							<div class="carousel-item">
							
								<img class="w-100" src="images/Homepage/heading1.jpeg" alt="chair image" >

								<div class="carousel-caption">
									<h1>Bespoke</h1>
									<p>Everything from A to Z , is hand made and supervised with experienced upholsters at our atelier.</p>

								</div>
			
							</div>				
					
					
					</div>
					<!-- END CAROUSEL CONTENT -->
					
		
						
					
				</div>
				<!-- END IMAGE CAROUSEL -->
				
				
				<!-- START TWO COLUMN SECTION -->
				<div id="brief" class="container py-3 mb-0">
				
					<div class="row py-5">


						<div class="col-lg-7">
						 <img class="w-100" src="images/Homepage/s2.png" alt="scissor image" class="w-100" >
						</div>

						<div class="col-lg-5 mb-4 my-lg-auto">
						<h1 class="mb-3">
							<span class="diff-font">Najd.</span> is all about 
							<span class="diff-font">artistry</span>and <span class="diff-font">quality</span>
						</h1> 
						
						<h3 class="mb-4">We are passionate about and believe in second chances, preservation, and sustainability.</h3>
						
						</div>
						
						
						<a href="aboutUs.php" class=" btn btn-md"> Read more... </a>
					</div>
					
				</div>
				<!-- END TWO COLUMN SECTION -->


				<!-- START FIXED BACKGROUND IMG -->				
				<div class="fixed-background">
					<div class="fixed-wrap">
						<div class="fixed">
                            <img src="images/Homepage/FI1.jpeg" class="fixed">
						</div>
					</div>
				</div>
				<!-- END FIXED BACKGROUND IMG -->


				<!-- START JUMBOTRON -->
				<div class="jumbotron py-5 mb-0">
					<div class="container">
						<div class="row">

								<h1>Set Your Inner Designer Free </h1>

						</div>
					</div>
				</div>
				<!-- END JUMBOTRON -->
				
				<!-- START CARDS-->
				<h1 id="header-of-cards" > How does it work?</h1>

				<br>

				<div id="card-section" class="container-fluid">
					<div class ="row">
					
						<div class="col-md-4 py-4">
							<div class="card">
							<img class="card-img-top" src="images/Homepage/HIW1.jpg" alt="card image1">
								<div class="card-body">

								<h4 class="card-title"> Renew</h4>
								<p class="card-text">
									In remembrance of things past
									Get your heirloom furniture restored &
									 upholstered to give it a second lease of life. 
								</p>

								</div>
							</div>
						</div>	
						
						<div class="col-md-4 py-4">
							<div class="card">
							<img class="card-img-top" src="images/Homepage/HIW2.jpg" alt="card image2">
								<div class="card-body">
								<h4 class="card-title"> Ready made </h4>
								<p class="card-text">
									Fall in love with unique cushions
									 and pieces of furniture that have 
									 been fully restored. We ship worldwide. </p>
								</div>
							</div>
						</div>	

						<div class="col-md-4 py-4">
							<div class="card">
							<img class="card-img-top" src="images/Homepage/HIW3.jpg" alt="card image3">
								<div class="card-body">
								<h4 class="card-title"> Bespoke vintage</h4>
								<p class="card-text">we will design together with you into 
									a statement piece truly unique to you! </p>
								</div>
							</div>
						</div>
							
						
					</div>

					<br>

					<div style="text-align: center;  padding-top: 3em;">
						<a href="Services_options.php" class=" btn btn-md"   > Get started ! </a>

					</div>

				</div>
				<!-- END CARDS -->


				<!-- START FOOTER -->
				<footer>
				
					<div class="container pt-5">
					
										
						<div class="row text-left">
						
							<div class="col-md-3 py-3">
								<h6> WE ARE HERE </h6>
								<p> </p>
								<p><a href="https://www.facebook.com/" target=”_blank”><i class="fa-brands fa-facebook-square fa-xl"></i></a> Facebook</p>
								<p><a href="https://www.instagram.com/?hl=en" target=”_blank”><i class="fa-brands fa-instagram fa-xl"></i></a> Instagram</p>
								<p> <a href="https://www.pinterest.com/" target=”_blank”><i class="fa-brands fa-pinterest-square fa-xl"></i></a> Pinterest</p>
							</div>
							
							<div class="col-md-3 py-3">
								<h6> GET IN TOUCH  </h6>
								<p> Email us at: <br> <a href = "mailto: najdupholstery.com" style="color: #43634a !important;">najdupholstery.com</a></p>
								<br>
								<p><i class="fa-solid fa-phone"></i> 011-2487765</p>
							</div>
							
							<div class="col-md-3 py-3">
							
					
									<h6> QUICK LINKS </h6>
							
									
									<p> <a href="inspiration.html" style="color: #43634a !important; ">Inspiration blog</a></p> <!-- add  text-decoration: none; attribute if we want w/o underline -->
									<p> <a href="Appointment.php" style="color: #43634a !important;">Book an appointment</a> </p>
									<p><a href="services.html" style="color: #43634a !important;">Our services</a> </p>
									<p> <a href="contact.php" style="color: #43634a !important;">Contact us</a> </p>
									
							
							</div>
                            
    <!-- PHP CODE OF EMAIL SUBSCRIBERS-->
        <?php
            require_once 'config.php';
            $conn = new mysqli($hn, $un, $pw, $db);
            if ($conn->connect_error) die ("Connection failed: ".$conn->connect_error);
            
            if (!empty($_POST['email'])){
                $email = $_POST["email"];
                $query    = "INSERT INTO subscribes VALUES".
		          "('$email')";
                $result   = $conn->query($query);
                if (!$result) 
                    echo "failed";
                else
                    $conn->close();
					exit();
              }

        ?>
    <!-- END PHP CODE -->
							
							<div class="col-md-3 py-3">
								<h6> JOIN OUR BLOG  </h6>
								<br>
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                    <input type="email" placeholder="Enter your email address" id="user-email"  name="email">
                                    <button id="but1" type="submit" class="btn" onclick="popup()">Sign up</button>
                                </form>
							</div>
<script>
    function popup(){
		if (<?php  $email?> != ''){
			window.alert("You have been added to our subscriber's list!");
		}
		else{
			window.alert("Please insert your email to be added to our subscriber's list!");
		}
        
    }                        
</script>		
						
						</div>
					
					
					</div>
					
				</footer>
				<!-- END FOOTER -->


				<!-- START SOCKET -->
				<div class="socket text-left py-4">
				<img id="logo" src="images/logo.jpg" alt="image of logo"> <br>
				<p>&copy;2022 najd. Upholst.</p>
				</div>
				<!-- END SOCKET -->


				<!-- SCRIPT SOURCE FILES -->

				<!-- JQUERY -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
				<!-- BOOTSTRAP JS -->
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
				<!-- POPPER JS -->
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
				<!-- FONT AWSOME ICONS -->
				<script src="https://kit.fontawesome.com/6abe466a32.js" crossorigin="anonymous"></script>
				
				<!-- END SCRIPT SOURCE FILES -->
			
			</body>
	</html>
