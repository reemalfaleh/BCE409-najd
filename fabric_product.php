<!DOCTYPE html>
	<html lang="en">
			<head>
				<title> Najd | Fabric Product </title>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
				<meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- might remove-->
				<!-- BOOTSTRAP CSS -->
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
				<!-- EXTERNAL STYLE SHEET -->
				<link rel="stylesheet" href="CSS/fabric.css">
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
						<img src="images/fabric/fps1.jpeg" alt="image of paint" class="paint_1stSection" style="width:100%">
						<div>
							
							<p class="text1">Fabrics </p>
						</div>
                </div><br><br>
                <!--END FIRST SECTION-->

				<CENTER>
				<!--START SECOND SECTION-->
				<div class="rowF1">

					<div class="col-4"><img class="img-fluid col-lg-4 col-md-4 col-12" src="images/paint/P1.png" style="width: 50px">
						<p>HIGH QUALITY</p>
					</div>
					
					<div class="col-4"><img class="img-fluid col-lg-4 col-md-4 col-12" src="images/fabric/f2.png" style="width: 50px">
						<p>WARRANTY PROTECTION</p>
					</div>
					
					
					<div class="col-4"><img class="img-fluid col-lg-4 col-md-4 col-12" src="images/paint/p3.png" style="width: 50px">
						<p>WARRANTY PROTECTION</p>
					</div>
					
				</div>
				<!--END SECOND SECTION-->
				</CENTER>

				<!--THIRD SECTION - PAGINATION-->
				<div class="pindicator">

					<div class="bullet current">
						<a href="fabric_product.php">
							<span class="icon">1</span>
						</a>
					  <div class="textp">Step 1 | Fabric </div>
					</div>

					<div class="bullet next future">
						<a href="furnitureLegs_product.php" >
							<span class="icon" >2</span>
						</a>
					  <div class="textp">Step 2 | Furnitur Legs</div>
					</div>

					<div class="bullet  future">
						<a href="measurementForm.php">
							<span class="icon">3</span>
						</a>
						<div class="textp">Step 3 | Measurement</div>
					</div>

				  </div>

				  <!-- PAGINATION - SCRIPT CODE -->
				  <script src="main.js"></script>

				<!-- END THIRD SECTION - PAGINATION-->


				<!--START FOURTH SECTIOIN - CARD PRODUCT-->
				<center>
					<section class="products">
					
						<div id="paint-products" class="container">
							<div class ="rowF2">
								
								<div class="col" >
									<div class="card">
										<img class="card-img-top" src="images/fabric/fp1.jpeg" onmouseover="this.src='images/fabric/fpp1.jpeg'" onmouseout="this.src='images/fabric/fp1.jpeg'" alt="fabric1">
										<div class="card-text">
											<p class="product-name" >Créme | Sprout Wovens</p>
											<h4 class="price"><b>223.65 SR</b></h4>
											<button type="button" class="btn2" id="SelectBtn" value="Créme | Sprout Wovens">Select</button>
										</div>
									</div>
								</div>	
								
								<div class="col ">
									<div class="card">
										<img class="card-img-top" src="images/fabric/fp2.jpeg" onmouseover="this.src='images/fabric/fpp2.jpeg'" onmouseout="this.src='images/fabric/fp2.jpeg'" alt="fabric2">										
										<div class="card-text">
											<p class="product-name" >Oat | Sprout Wovens</p>
											<h4 class="price"><b>223.65 SR</b></h4>
											<button type="button" class="SelectBtn"  value="Oat | Sprout Wovens">Select</button>
										</div>
									</div>
								</div>	

								<div class="col">
									<div class="card">
										<img class="card-img-top" src="images/fabric/fp3.jpeg" onmouseover="this.src='images/fabric/fpp3.jpeg'" onmouseout="this.src='images/fabric/fp3.jpeg'" alt="fabric3">										
										<div class="card-text">
											<p class="product-name" >Cremini | Sprout Wovens</p>
											<h4 class="price"><b>223.65 SR</b></h4>
											<button type="button" class="SelectBtn"  value="Cremini | Sprout Wovens">Select</button>
										</div>
									</div>
								</div>

								<div class="col" >
									<div class="card ">
										<img class="card-img-top" src="images/fabric/fp4.jpeg" onmouseover="this.src='images/fabric/fpp4.jpeg'" onmouseout="this.src='images/fabric/fp4.jpeg'" alt="fabric4">										
										<div class="card-text">
											<p class="product-name" >Pink Sand | Sprout Wovens</p>
										<h4 class="price"><b>223.65 SR</b></h4>
										<button type="button" class="SelectBtn"  value="Pink Sand | Sprout Wovens">Select</button>
										</div>
									</div>
								</div>
									
								<div class="col" >
									<div class="card">
										<img class="card-img-top" src="images/fabric/fp5.jpeg" onmouseover="this.src='images/fabric/fpp1.jpeg'" onmouseout="this.src='images/fabric/fp5.jpeg'" alt="fabric5">										
										<div class="card-text">
											<p class="product-name" >Sun Glow | Sprout Wovens</p>
											<h4 class="price"><b>223.65 SR</b></h4>
											<button type="button" class="SelectBtn" value="Sun Glow | Sprout Wovens" >Select</button>
										</div>
									</div>
								</div>	
								
								<div class="col">
									<div class="card">
										<img class="card-img-top" src="images/fabric/fp6.jpeg" onmouseover="this.src='images/fabric/fpp1.jpeg'" onmouseout="this.src='images/fabric/fp6.jpeg'" alt="fabric6">										
										<div class="card-text">
											<p class="product-name" >Cider | Sprout Wovens</p>
											<h4 class="price"><b>223.65 SR</b></h4>
											<button type="button" class="SelectBtn" >Select</button>								
										</div>
									</div>
								</div>	

								<div class="col">
									<div class="card">
										<img class="card-img-top" src="images/fabric/fp7.jpeg" onmouseover="this.src='images/fabric/fpp1.jpeg'" onmouseout="this.src='images/fabric/fp7.jpeg'" alt="fabric7">										
										<div class="card-text">
											<p class="product-name" >Autumnal | Sprout Wovens</p>
											<h4 class="price"><b>223.65 SR</b></h4>
											<button type="button" class="SelectBtn" value="Autumnal | Sprout Wovens">Select</button>								
										</div>
									</div>
								</div>

								<div class="col" >
									<div class="card ">
										<img class="card-img-top" src="images/fabric/fp8.jpeg" onmouseover="this.src='images/fabric/fpp1.jpeg'" onmouseout="this.src='images/fabric/fp8.jpeg'" alt="fabric8">										
										<div class="card-text">
											<p class="product-name" >Black Cherry | Sprout Wovens</p>
											<h4 class="price"><b>223.65 SR</b></h4>
											<button type="button" class="SelectBtn" value="Black Cherry | Sprout Wovens">Select</button>						
									</div>
									</div>
								</div>

								<div class="col" >
									<div class="card">
										<img class="card-img-top" src="images/fabric/fp9.jpeg" onmouseover="this.src='images/fabric/fpp1.jpeg'" onmouseout="this.src='images/fabric/fp9.jpeg'" alt="fabric9">										
										<div class="card-text">
											<p class="product-name" >Mallard | Sprout Wovens</p>
											<h4 class="price"><b>223.65 SR</b></h4>
										<button type="button" class="SelectBtn" value="Mallard | Sprout Wovens">Select</button>							
										</div>
									</div>
								</div>	
								
								<div class="col ">
									<div class="card">
										<img class="card-img-top" src="images/fabric/fp10.jpeg" onmouseover="this.src='images/fabric/fpp1.jpeg'" onmouseout="this.src='images/fabric/fp10.jpeg'" alt="fabric10">										
										<div class="card-text">
											<p class="product-name">Pineneedle | Sprout Wovens </p>
											<h4 class="price"><b>223.65 SR</b></h4>
											<button type="button" class="SelectBtn" value="Pineneedle | Sprout Wovens">Select</button>						
										</div>
									</div>
								</div>	

								<div class="col">
									<div class="card">
										<img class="card-img-top" src="images/fabric/fp11.jpeg" onmouseover="this.src='images/fabric/fpp1.jpeg'" onmouseout="this.src='images/fabric/fp11.jpeg'" alt="fabric11">										
										<div class="card-text">
											<p class="product-name" >Malachite | Sprout Wovens</p>
											<h4 class="price"><b>223.65 SR</b></h4>
											<button type="button" class="SelectBtn"  value="Malachite | Sprout Wovens">Select</button>								
										</div>
									</div>
								</div>

								<div class="col" >
									<div class="card ">
										<img class="card-img-top" src="images/fabric/fp12.jpeg" onmouseover="this.src='images/fabric/fpp1.jpeg'" onmouseout="this.src='images/fabric/fp12.jpeg'" alt="fabric12">										
										<div class="card-text">
											<p class="product-name" >Cenote | Sprout Wovens</p>
										<h4 class="price"><b>223.65 SR</b></h4>
										<button type="button" class="SelectBtn" value="Cenote | Sprout Wovens">Select</button>									
									</div>
									</div>
								</div>
									
								<div class="col" >
									<div class="card">
										<img class="card-img-top" src="images/fabric/fp13.jpeg" onmouseover="this.src='images/fabric/fpp2.jpeg'" onmouseout="this.src='images/fabric/fp13.jpeg'" alt="fabric13">										
										<div class="card-text">
											<p class="product-name" >Arctic | Sprout Wovens</p>
											<h4 class="price"><b>223.65 SR</b></h4>
											<button type="button" class="SelectBtn"  value="Arctic | Sprout Wovens">Select</button>							
										</div>
									</div>
								</div>	
								
								<div class="col">
									<div class="card">
										<img class="card-img-top" src="images/fabric/fp14.jpeg" onmouseover="this.src='images/fabric/fpp3.jpeg'" onmouseout="this.src='images/fabric/fp14.jpeg'" alt="fabric14">										
										<div class="card-text">
											<p class="product-name" > Storm | Sprout Wovens</p>
											<h4 class="price"><b>223.65 SR</b></h4>
											<button type="button" class="SelectBtn" value="Storm | Sprout Wovens">Select</button>									
										</div>
									</div>
								</div>	

								<div class="col">
									<div class="card">
										<img class="card-img-top" src="images/fabric/fp15.jpeg" onmouseover="this.src='images/fabric/fpp1.jpeg'" onmouseout="this.src='images/fabric/fp15.jpeg'" alt="fabric15">										
										<div class="card-text">
											<p class="product-name" >Ocean | Sprout Wovens</p>
											<h4 class="price"><b>223.65 SR</b></h4>
											<button type="button" class="SelectBtn" value="Ocean | Sprout Wovens">Select</button>								
										</div>
									</div>
								</div>

								<div class="col" >
									<div class="card ">
										<img class="card-img-top" src="images/fabric/fp16.jpeg" onmouseover="this.src='images/fabric/fpp2.jpeg'" onmouseout="this.src='images/fabric/fp16.jpeg'" alt="fabric16">										
										<div class="card-text">
										<p class="product-name">Midnight | Sprout Wovens</p>
										<h4 class="price"><b>223.65 SR</b></h4>
										<button type="button" class="SelectBtn" value="Midnight | Sprout Wovens">Select</button>							
									</div>
									</div>
								</div>
							
							</div>
							
							<button type="button" class="btn1" id="more">Show More</button>

						</div>

					</section>
				</center>
				
				<!--SCRIPT CODE-->
				<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
				<script>
				$(".col").slice(0, 8).show()
				$(".btn1").on("click", function(){
					$(".col:hidden").slice(0, 8).slideDown()
					if ($(".col:hidden").length == 0){
						$(".btn1").fadeOut('slow')
					}
				})
				</script>
				<!--END SCRIPT CODE-->

				<!--END FOURTH SECTIOIN - CARD PRODUCT-->



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