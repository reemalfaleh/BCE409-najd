<!DOCTYPE html>
	<html lang="en">
			<head>
				<title> Najd | Services  </title>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
				<meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- might remove-->
				<!-- BOOTSTRAP CSS -->
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
				<!-- EXTERNAL STYLE SHEET -->
				<link rel="stylesheet" href="CSS/options.css">
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

                <!--OPTIONS SECTION-->                
				<div class="options">
					<h1 id="header-of-cards" > Select Your Product</h1>

					<!-- START CARDS-->
					<div id="card-section" class="container">
						<div class ="row">
					
							<div class="col-md-4 py-4" >
								<div class="card ">
								<a href="#" data-toggle="modal" data-target="#modalTable" ><img class="card-img-top" src="images/options/table_product.jpeg" alt="table"> </a>
									
								
								<div class="card-body">
									<h4 class="card-title"> Table</h4>
									</div>
								</div>
							</div>	
							
							<div class="col-md-4 py-4">
								<div class="card">
									<a href="#" data-toggle="modal" data-target="#modalSofa" ><img class="card-img-top" src="images/options/sofa_product.jpeg" alt="sofa"></a>
									<div class="card-body">
									<h4 class="card-title"> Sofa </h4>
									</div>
								</div>
							</div>	

							<div class="col-md-4 py-4">
								<div class="card">
									<a href="#" data-toggle="modal" data-target="#modalChair" ><img class="card-img-top" src="images/options/chair_product.jpeg" alt="chair"></a>
									<div class="card-body">
									<h4 class="card-title"> Chair </h4>
									</div>
								</div>
							</div>
								
						</div>

					</div>
					<!-- END CARDS -->
             	</div>	
				
                <!--END OPTIONS SECTION-->
			


				<!-- START MODAL CODE -->

				<!--TABLE OPTION-->
				<div class="modal fade" id="modalTable">
					
					<div class="modal-dialog bg-success">
						
						<div class="modal-content" style="transform: scaleX(1.4);">
							
							<div class="modal-header pb-2">
								<h1 id="modalTitle">STEPS</h1>
							</div>

							<div class="modal-body">
								<div class="row mt-2 p-3">
									<img src="images/options/table_product.jpeg" alt="table"><br><br>
									<p><b id="b1-diff">1.</b> Select the Paint Color you wanted</p>
									<p><b id="b1-diff">2.</b> Select the Furniture legs </p>
									<p><b id="b1-diff">3.</b> Enter Your Furniture Measurements</p>
								</div>
							</div>

							<div class="modal-footer">
								<a href="Services_options.php"><button type="button" class="btn1">Back to Product Option</button></a>
								<a href="paint_product.php"><button type="button" class="btn2">OK</button></a>
							</div>

						</div>

					</div>

				</div>

				<!--SOFA OPTION-->
				<div class="modal fade" id="modalSofa">
					
					<div class="modal-dialog bg-success">
						
						<div class="modal-content" style="transform: scaleX(1.4);">
							
							<div class="modal-header pb-2">
								<h1 id="modalTitle">STEPS</h1>
							</div>

							<div class="modal-body">
								<div class="row mt-2 p-3">
									<img src="images/options/sofa_product.jpeg" alt="sofa"><br><br>
									<p><b id="b1-diff">1.</b> Select the Fabric you wanted</p>
									<p><b id="b1-diff">2.</b> Select the Furniture legs </p>
									<p><b id="b1-diff">3.</b> Enter Your Furniture Measurements</p>
								</div>
							</div>

							<div class="modal-footer">
								<a href="Services_options.php"><button type="button" class="btn1">Back to Product Option</button></a>
								<a href="fabric_product.php"><button type="button" class="btn2">OK</button></a>
							</div>

						</div>

					</div>

				</div>

				<!--CHAIR OPTION-->
				<div class="modal fade" id="modalChair">
					
					<div class="modal-dialog bg-success">
						
						<div class="modal-content" style="transform: scaleX(1.4);">
							
							<div class="modal-header pb-2">
								<h1 id="modalTitle">STEPS</h1>
							</div>

							<div class="modal-body">
								<div class="row mt-2 p-3">
									<p><b id="b1-diff">1.</b> Select ( Fabric or Paint )</p>
									<p><b id="b1-diff">2.</b> Select the Furniture legs </p>
									<p><b id="b1-diff">3.</b> Enter Your Furniture Measurements</p>
								</div>
							</div>

						</div>

					</div>

					<div class="modal-dialog bg-success">
						
						<div class="modal-content" style="transform: scaleX(1.4);">
							
							<div class="modal-header pb-2">
								<h1 id="modalTitle">Fabric or Paint</h1>
							</div>

							<div class="modal-body2">

								<div class="row mt-2 p-3">
									<div class="col-6">
										<a href="fabric_product.php"><img src="images/inspiration/inspiration4.jpeg" alt="fabric" style="width:70%;"></a><br><br>
										<p><b id="b1-diff">Fabric</b></p>
									</div>
									
									<div class="col-6">
										<a href="paint_product.php"><img src="images/paint/paint2.jpeg" alt="paint" style="width:70%;"></a><br><br>
										<p><b id="b1-diff">Paint</b></p>
									</div>
									
								</div>

							</div>

							<div class="modal-footer">
								<a href="Services_options.php"><button type="button" class="btn1">Back to Product Option</button></a>
							</div>

						</div>

					</div>

				</div>

				<!-- END MODAL CODE -->
								


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