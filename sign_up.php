<!-- PHP CODE -->
<?php
    require_once 'config.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die ("Connection failed: ".$conn->connect_error);

    $fname = $lname = $username = $email = $confpass = "";
    $usernameErr = $emailErr = $passwordErr = $confpassErr = "";

	// Processing form data when form is submitted
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		// Validate username 
		if(empty(trim($_POST["username"]))){
			$usernameErr = "Please enter a username.";
		} else{
			// Prepare a select statement
			$sql = "SELECT username FROM users WHERE username = ?";
			
			if($stmt = $conn->prepare($sql)){
				// Bind variables to the prepared statement as parameters
				$stmt->bind_param("s", $param_username);
				
				// Set parameters
				$param_username = trim($_POST["username"]);
				
				// Attempt to execute the prepared statement
				if($stmt->execute()){
					// store result
					$stmt->store_result();
					
					if($stmt->num_rows == 1){
						$usernameErr = "This username is already taken.";
					} else{
						$username = trim($_POST["username"]);
					}
				} else{
					echo "Oops! Something went wrong. Please try again later.";
				}
			}	 
			// Close statement
			$stmt->close();
		}
        
        //validate email
        if(empty(trim($_POST["email"]))){
			$emailErr = "Please enter an email.";
		} else{
            // Prepare a select statement
			$sql = "SELECT email FROM users WHERE email = ?";
			
			if($stmt = $conn->prepare($sql)){
				// Bind variables to the prepared statement as parameters
				$stmt->bind_param("s", $param_email);
				
				// Set parameters
				$param_email = trim($_POST["email"]);
				
				// Attempt to execute the prepared statement
				if($stmt->execute()){
					// store result
					$stmt->store_result();
					
					if($stmt->num_rows == 1){
						$emailErr = "This email is already taken.";
					} else{
						$email = trim($_POST["email"]);
					}
				} else{
					echo "Oops! Something went wrong. Please try again later.";
				}
			}	 
			// Close statement
			$stmt->close();
		}
		
		// Validate password
		if(empty(trim($_POST["password"]))){
			$passwordErr = "Please enter a password.";     
		} elseif(strlen(trim($_POST["password"])) < 6){
			$passwordErr = "Password must have atleast 6 characters.";
		} else{
			$password = trim($_POST["password"]);
		}
		
		// Validate confirm password
		if(empty(trim($_POST["confpass"]))){
			$confpassErr = "Please enter confirm password.";     
		} else{
			$confpass = trim($_POST["confpass"]);
			if(empty($passwordErr) && ($password != $confpass)){
				$confpassErr = "Password did not match.";
			}
		}
		
		// Check input errors before inserting in database
		if(empty($username_err) && empty($passwordErr) && empty($confpassErr) && empty($emailErr))
		{
			
			// Prepare an insert statement
			$sql = "INSERT INTO users VALUES (DEFAULT, ?, ?, ?, ?, ?)";
			 echo "reached";
			if($stmt = $conn->prepare($sql)){
				// Bind variables to the prepared statement as parameters
				echo "reached2";
                $stmt->bind_param("sssss", $param_fname, $param_lname, $param_username, $param_email, $param_password);
				// Set parameters
                $param_fname= trim($_POST["fname"]);
                $param_lname= trim($_POST["lname"]);
				$param_username = $username;
                $param_email = $email;
				$param_password = password_hash($password, PASSWORD_DEFAULT); 
				// Creates a password hash
				
				// Attempt to execute the prepared statement
				if($stmt->execute()){
					// Redirect to login page
					header("location: login.php");
                    // Close statement
			         $stmt->close();
				} else{
					echo "Something went wrong. Please try again later.";
				}
			}
		}
    // Close connection
    $conn->close();
}

?>
<!-- END PHP CODE -->  

<!DOCTYPE html>

	<html lang="en">

			<head>
				<title> Najd | Sign Up </title>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
				<meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- might remove-->
				
				<!-- BOOTSTRAP CSS -->
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
				
				<!-- EXTERNAL STYLE SHEET -->
				<link rel="stylesheet" href="CSS/sign_up.css">

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


			<!--CREATE ACCOUNT FORM-->
			<div class="container-signup-form">
				<h1>Create Account</h1>
				<form class="signupform" name="signupForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<input type="text" name="fname" id="fname" size="80" placeholder="First Name" class="input-form" required><br><br>
					<input type="text" name="lname" id="lname" size="80" placeholder="Last Name" class="input-form" required><br><br>
					<input type="text" name="username" id="username" size="80" placeholder="username" class="input-form" required>
                    <?php echo "<p style='color:#43634a; margin-bottom: 2%;'>".$usernameErr."</p>"?>
					<input type="email" name="email" id="email" size="80" placeholder="Email" class="input-form" required>
                    <?php echo "<p style='color:#43634a; margin-bottom: 2%;'>".$emailErr."</p>"?>
					<input type="password" name="password" id="password" size="80" placeholder="Password" class="input-form" required>
                    <?php echo "<p style='color:#43634a; margin-bottom: 2%;'>".$passwordErr."</p>"?>
					<input type="password" name="confpass" id="confpass" size="80" placeholder="confirm password" class="input-form" required>
                    <?php echo "<p style='color:#43634a; margin-bottom: 2%;'>".$confpassErr."</p>"?>
                    <br><br>
					<button type="submit" name="submit" value="submit" class="btn1" >Create Account</button>
					<p>Already have an Account? <a href="login.php" class="Link1">login</a></p>
				</form>
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
								<h6> JOIN OUR BLOG  </h6>
								<br>
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                    <input type="email" placeholder="Enter your email address" id="user-email"  name="email">
                                    <button id="but1" type="submit" class="btn" onclick="popup()">Sign up</button>
                                </form>
							</div>
<script>
    function popup(){
		if (<?php echo $email?> != ''){
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
