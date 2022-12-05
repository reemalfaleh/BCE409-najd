<?php
	// Initialize the session
	session_start();
    define( "FIVE_DAYS", 5 * 24 * 60 * 60);

	// Check if the user is already logged in, if yes then redirect him to welcome page
	if( isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
		header("location: UserPage.php");
		exit;
	}
 
	// Include config file
	require_once "config.php";
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die ("Connection failed: ".$conn->connect_error);
	 
	// Define variables and initialize with empty values
	$username = $password = "";
	$username_err = $password_err = "";
	 
	// Processing form data when form is submitted
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
	 
		// Check if username is empty
		if(empty(trim($_POST["username"]))){
			$username_err = "Please enter username.";
		} else{
			$username = trim($_POST["username"]);
		}
		
		// Check if password is empty
		if(empty(trim($_POST["password"]))){
			$password_err = "Please enter your password.";
		} else{
			$password = trim($_POST["password"]);
		}
		
		// Validate credentials
		if(empty($username_err) && empty($password_err)){
			// Prepare a select statement
			$sql = "SELECT id, username, password FROM users WHERE username = ?";
			
			if($stmt = $conn->prepare($sql)){
				// Bind variables to the prepared statement as parameters
				$stmt->bind_param("s", $param_username);
				
				// Set parameters
				$param_username = $username;
				
				// Attempt to execute the prepared statement
				if($stmt->execute()){
					// Store result
					$stmt->store_result();
					
					// Check if username exists, if yes then verify password
					if($stmt->num_rows == 1){                    
						// Bind result variables
						$stmt->bind_result($id, $username, $hashed_password);
						// $stmt->fetch() will fetch results from a prepared statement into
						// the bound variables
						if($stmt->fetch()){
							//  password_verify ( string $password , string $hash ) : bool
							//	password : The user's password.
							//  hash : A hash created by password_hash().
							if(password_verify($password, $hashed_password)){
								// Password is correct, so start a new session
								session_start();
								
								// Store data in session variables
								$_SESSION["loggedin"] = true;
								$_SESSION["id"] = $id;
								$_SESSION["username"] = $username;
                                setcookie( "id", $id, time() + FIVE_DAYS );
								setcookie( "username", $username, time() + FIVE_DAYS );
								// Redirect user to welcome page
								header("location: UserPage.php");
							} // end of if(password_verify($password, $hashed_password))
							else{
								// Display an error message if password is not valid
								$password_err = "The password you entered was not valid.";
							}
						} // end of $stmt->fetch()
					} // end of if($stmt->num_rows == 1)
					else{
						// Display an error message if username doesn't exist
						$username_err = "No account found with this username.";
					}
				}  // end of if($stmt->execute())
				else{
					echo "Oops! Something went wrong. Please try again later.";
				}
			} // End of if($stmt = $conn->prepare($sql))
			
			// Close statement
			$stmt->close();
		}		
		// Close connection
		$conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

				<title> Najd | Login </title>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
				<meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- might remove-->
				
				<!-- BOOTSTRAP CSS -->
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
				
				<!-- EXTERNAL STYLE SHEET -->
				<link rel="stylesheet" href="CSS/login.css">

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
            

<!--LOGIN FORM-->
<div class="container-login-form">

        <h1>Login To Your Account</h1><br>
        <form class="loginform" name="loginform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input type="text" name="username" id="uname" size="80" placeholder="Username" class="input-form">
                <?php echo "<p style='color:#43634a; margin-bottom: 2%;'>".$username_err."</p>"?>
                <input type="password" name="password" id="pass" size="80" placeholder="Password " class="input-form">
                <?php echo "<p style='color:#43634a; margin-bottom: 2%;'>".$password_err."</p>"?>
                <br>
                <button type="submit" value="login" class="btn1" >login</button>
                <p>new to this site? <a href="sign_up.php" class="Link1">Sign Up</a></p>
        </form>
</div>

    <script>
        function registration(loginform){
            fail += reguname(loginform.uname.value);
            fail += regpass(loginform.pass.value);
            if ( fail == "") return true
            else {
                alert(fail); return false
            }
        }
        function reguname(input){
            if (input == "")
                return "No username was entered\n";
            else if (input.length<8) {
                return "username must be at least 8 digit\n";
                }
        }
        function regemail(input){
            if (input == "")
                return "No Email was enterd\n"
            else if ("@" == -1 ){
                return "invalid email\n"
                }
        }
        function regpass(input){
            if (input == "")
                return "No password was enterd\n"
            else if (input.length<6){
                return "password must be at least 6 digit\n"
                }
            else if (!/[a-z]/.test(input) || !/[A-Z]/.test(input) || !/[0-9]/.test(input)){
                return "invalid password\n"
            }
        }
    </script>
    
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
                    header("Location: login.php", true, 301);
					exit();
              }

        ?>
    <!-- END PHP CODE -->
							
							<div class="col-md-3 py-3">
								<h6> JOIN OUR BLOG  </h6>
								<br>
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                    <input type="email" placeholder="Enter your email address" id="user-email"  name="email" class="input-join">
                                    <button id="but1" type="submit" class="btn2" onclick="popup()">Sign up</button>
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
