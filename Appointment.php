<!DOCTYPE html>
<html>

  <head>
    <title> Najd | Appointment </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <!-- BOOTSTRAP CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- EXTERNAL STYLE SHEET -->
    <link rel="stylesheet" href="CSS/contact.css">
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
				
				
				
				

<br><br>

				<!-- START BOOKING -->
				<center>
				
						<section class="contactSec">
							<form method="POST" action="#" onsubmit="return registration()" class="conForm">
							   <table class="contactForm" >
									<tr><th class="formTitle" colspan="2">  Looking Forward To See You ! </th></tr>
									<tr>
										<td class="col1" rowspan="2">
											<input id="inputCont" type="text" name="uname" id="uname" size="40" placeholder="Name " class="input-form"><br><br>
											<input id="inputCont" type="mail" name="email" id="email" size="40" placeholder="Email" class="input-form"><br><br>
											<input id="inputCont" type="tel" name="num" id="num" size="40" pattern="\(\d{3\)+\d{3}-\d{4}" placeholder="Contact phone" class="input-form" required><br><br>
											
											 <label style="color:white; font-size:15px;"> Choose a date <input type="date" name="Appointment request" required></label>
											 
											 <label style="color:white; font-size:15px;"> <input type="radio" name="Time slot" value="Morning" checked> Morning </label>
											 <label style="color:white ;font-size:15px;;"> <input type="radio" name="Time slot" value="Afternoon"> Afternoon </label><br><br>
											 
											 <p style="color:white; font-size:15px;">Confirmation requested by :</p>
											 
											 <div class="inline">
											 <label style="color:white;"> <input type="radio" name="Confirmation requested by" value="email" checked> Email </label>
											 <label style="color:white;"> <input type="radio" name="Confirmation requested by" value="phone"> Phone call </label>
											 </div><br>
											
											<button type="submit" value="contact" class="btn1">Request an Appointment</button>
											
										</td>
										
										<td rowspan="2" >
											<div class="image">
											 <img  class="con-image" onmouseover="this.src='images/contact/image1pink.png'" onmouseout="this.src='images/contact/image1-01.png'" id="con-image" src="images/contact/image1-01.png" alt="image"> <!--need to change image ask amjad for it -->
											</div>
										</td>
										
									</tr>
									
								</table>
							</form>
							
						</section>
						
				</center>
    <br><br>
				<script>
					function registration(conForm){
						fail = uname(conForm.uname.value);
						fail += email(conForm.email.value);
						fail += num(conForm.num.value);
						if ( fail == "") return true
						else {
							alert(fail); 
							return false
						}
						
					}
					function uname(input){
						if (input == ""){
							return "No name was entered\n";
						}
					}
					function email(input){
						if (input == "")
							return "No Email was enterd\n"
						else if ("@" == -1 ){
							return "invalid email\n"
							}
					}
					function num(input){
						if (input == "")
							return "No contact phone was enterd\n"
						else if (input.length<10){
							return "phone number must be at least 10 digit\n"
							}
						else if (!/^\(?([0-9]{3})\)[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/.test(input)){
							return "invalid phone number\n"
						} 
					}
				</script>
					<!-- END BOOKING -->





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