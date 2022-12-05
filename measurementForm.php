<!DOCTYPE html>

	<html lang="en">

			<head>

				<title> Najd | Measurement </title>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
				<meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- might remove-->
				
				<!-- BOOTSTRAP CSS -->
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
				
				<!-- EXTERNAL STYLE SHEET -->
				<link rel="stylesheet" href="CSS/measurementForm.css">

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



				<!-- START FIRST SECTION - PAGINATION-->
				<div class="pindicator">

					<div class="bullet past">
						<a href="paint_product.php">
							<span class="icon">1</span>
						</a>
					  <div class="textp">Step 1</div>
					</div>

					<div class="bullet past">
						<a href="furnitureLegs_product.php" >
							<span class="icon" >2</span>
						</a>
					  <div class="textp">Step 2 | Furnitur Legs</div>
					</div>

					<div class="bullet  current">
						<a href="measurementForm.php">
							<span class="icon">3</span>
						</a>
						<div class="textp">Step 3 | Measurement</div>
					</div>

				  </div>


				  <!-- PAGINATION - SCRIPT CODE -->
				  <script src="main.js"></script>

				<!-- END FIRST SECTION - PAGINATION -->


			<!--START SECOND SECTION - CART & Measurements FORM -->
			<div class="container-Measurements-form">
				
				<h1>Enter Your Furniture Measurements</h1>
				
				<div class="cart">
					
					<h2 class="cart-title">Selected Products :</h2>
					
					<div class="cart-content">
						
					<!--product 1 -->
						<div class="cart-box">
							<img src="images/furniture legs/fl14.jpeg" alt="product" class="cart-img" style="width: 50%;">
							<div class="detail-box">
														
								<div class="cart-product-title">Modal 14</div>
														
								<div class="cart-price">8750.75 SR</div>
							
							</div>   
							<i class="fa-regular fa-xmark cart-remove"></i>
							

										
						</div><br>
					<!--product 2 -->
						<div class="cart-box">
							<img src="images/paint/pp13.jpeg" alt="product" class="cart-img" style="width: 50%;">
													
							<div class="detail-box">
														
								<div class="cart-product-title">color 13</div>
														
								<div class="cart-price">52.51 SR</div>
							
							</div>   
							<i class="fa-regular fa-xmark cart-remove"></i>
							

										
						</div><br>
						
						<!--total-->
						<div class="total">
							
							<div class="total-title"><p>*Approximate total service cost value</p>
								Total:
								
							</div>
							
							<div class="total-price">0 SR</div>
						
						</div><br> 
						<hr>
						<!--FORM INSIDE CART CONTENT-->
						<h2>Measurements:</h2>

						<form class="Measurements-form" name="Measurements-form" action="#" method="post" onsubmit="">
	
							<input type="text" name="O_Name" id="O_Name"  placeholder="Order Name" class="input-form" required><br><br><br>
	
							<input type="number" name="length" id="length" size="26.6" placeholder="Length" class="input-form" required>
	
							<input type="number" name="width" id="width" size="26.6" placeholder="Width" class="input-form" required>
	
							<input type="number" name="hight" id="hight" size="26.6" placeholder="Hight" class="input-form" required><br><br><br><br>
	
							<input type="file" name="fileToUpload" id="fileToUpload" size="80" class="input-form"><br><br><br><br><br><br><br><br>
	
	
							<button type="submit" name="submit" value="submit" class="btn2" >Submit</button>
 

						</form>
					
					</div>
				
				</div>
			
			</div>
			

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
					<h6> JOIN OUR BLOG  </h6><br>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <input type="email" placeholder="Enter your email address" id="user-email"  name="email" class="input-join">
                        <button id="but1" type="submit" class="btn2" onclick="popup()">Sign up</button>
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
