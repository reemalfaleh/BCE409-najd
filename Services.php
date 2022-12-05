<!DOCTYPE html>

	<html lang="en">

			<head>

				<title> Najd | Services </title>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
				<meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- might remove-->
				
				<!-- BOOTSTRAP CSS -->
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
				
				<!-- EXTERNAL STYLE SHEET -->
				<link rel="stylesheet" href="CSS/Services.css">

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


                <!--START FIRST SECTION-->
               
                <div class="first_section">
					<div class="container services_headline">
                        <h1> <span class="diff-font">Our Services</span></h1>
                    </div>
                </div>
                <!--END FIRST SECTION-->

							

                <!--START SECOND SECTION-->
				<div class="second_section">
					
					<h1 id="header-of-cards" > How does it work?</h1>
							
					<!-- START CARDS-->
					
					<div id="card-section" class="container">
						<div class ="row">
						
							<div class="col-md-4 py-4">
								<div class="card">
								<img class="card-img-top" src="images/Homepage/HIW1.jpg" alt="card image1">
									<div class="card-body">
	
									<h4 class="card-title" style=" color: #e9a37f; text-align: center;"> Renew</h4>
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
									<h4 class="card-title" style=" color: #e9a37f; text-align: center;"> Ready made </h4>
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
									<h4 class="card-title" style=" color: #e9a37f; text-align: center;"> Bespoke vintage</h4>
									<p class="card-text">we will design together with you into 
										a statement piece truly unique to you! </p>
									</div>
								</div>
							</div>
								
							
						</div>


						<div style="text-align: center;">
							<a href="Services_options.php" class=" btn btn-md"> Get started ! </a>
						</div>

					</div>
					<!-- END CARDS -->
             	</div>	
				
                <!--END SECOND SECTION-->

					

                <!--START THIRD SECTION-->
				<div class="third_section">
					
					<div  class="container">
				
						<div class="row py-5">


							<div class="col-lg-3 ">
							
								<h1><span class="diff-font">Our Work</span></h1>
							</div>

							<div class="col-lg-9  ">
								
								<!-- IMAGE CAROUSEL --> <!--ask deem to fix-->
								<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="2500" >
							
									<!-- CAROUSEL CONTENT -->
									<div class="carousel-inner" ><!-- if i want to change the height add this attribute here style="height: 80vh;"-->
											
										<!--Carousel item 1-->
										<div class="carousel-item active " >
											
											<img class="w-100" src="images/services/image1.jpg" alt="chair image" >
												
											<div class="carousel-caption">
												
										
											</div> 
										
										</div>
		
										<!--Carousel item 2-->
										<div class="carousel-item">
										
											<img class="w-100" src="images/services/image2.jpg" alt="fabric image " >
										
											<div class="carousel-caption ">
												
											</div>
										
										</div>
										
										<!--Carousel item 3-->
										<div class="carousel-item">
										
											<img class="w-100" src="images/services/image3.jpg" alt=" image" >
		
											<div class="carousel-caption">
												
											</div>
						
										</div>
										
										<!--Carousel item 4-->
										<div class="carousel-item">
										
											<img class="w-100" src="images/services/image4.jpg" alt="image" >
		
											<div class="carousel-caption">
												
											</div>
						
										</div>

										<!--Carousel item 5-->
										<div class="carousel-item">
										
											<img class="w-100" src="images/services/image5.jpg" alt=" image" >
		
											<div class="carousel-caption">
												
											</div>
						
										</div>

										<!--Carousel item 6-->
										<div class="carousel-item">
										
											<img class="w-100" src="images/services/image6.jpg" alt=" image" >
		
											<div class="carousel-caption">
												
											</div>
						
										</div>

										<!--Carousel item 7-->
										<div class="carousel-item">
										
											<img class="w-100" src="images/services/image7.jpg" alt=" image" >
		
											<div class="carousel-caption">
												
											</div>
						
										</div>

										<!--Carousel item 8-->
										<div class="carousel-item">
										
											<img class="w-100" src="images/services/image8.jpg" alt=" image" >
		
											<div class="carousel-caption">
												
											</div>
						
										</div>
									
			
								
									
									</div>	
									<!-- END CAROUSEL CONTENT -->

									<!-- CAROUSEL INDICATORS -->
									<div class="carousel-indicators">
										<button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active"></button>
										<button type="button" data-bs-target="#carousel" data-bs-slide-to="1"></button>
										<button type="button" data-bs-target="#carousel" data-bs-slide-to="2"></button>
										<button type="button" data-bs-target="#carousel" data-bs-slide-to="3"></button>
										<button type="button" data-bs-target="#carousel" data-bs-slide-to="4"></button>
										<button type="button" data-bs-target="#carousel" data-bs-slide-to="5"></button>
										<button type="button" data-bs-target="#carousel" data-bs-slide-to="6"></button>
										<button type="button" data-bs-target="#carousel" data-bs-slide-to="7"></button>
										
									</div>
									<!-- END CAROUSEL INDICATORS -->

								</div>
								<!-- END IMAGE CAROUSEL -->	
								
								
							
							</div>
							
							
							
						</div>
					
					</div>
			
					


					
				
				</div>
                <!--END THIRD SECTION-->

			

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
		if (<?php $email?> != ''){
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
