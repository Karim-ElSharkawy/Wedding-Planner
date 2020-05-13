<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Wedding Recipe ~ Home</title>
        <meta name="description" content="The easiest way to find local wedding venues, cakes, dresses, photographers & more. Wedding Recipe is stress free, hassle free, and just plain free."/>
        <meta name="keywords" content="Wedding, Wedding Recipe, Venues, Cakes, dresses, photographers, budgeter, wedding tools"/>
        <meta name="author" content="Karim159773, Ayah153509, Habiba163502, Anas154084">
		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="includes/styles.css">
        <link rel="icon" href="images/dress_favicon.png">
		
		<?php
			require 'db_connection.php';
			
			session_start();
		?>
    </head>
    <body>
        <header>
            <div id="topbar">
                <img id="logo-main" src="images/WRLogo.jpg" alt="main logo of Wedding Recipe">
                <div id="RegistrationButtons">
                    <button id="Login" class="buttn"><img src="images/wedding.png" alt="small icon beside login of two wedding rings.">Login</button>
                    <button id="SignUp" class="buttn"><img src="images/flower-bouquet.png" alt="small icon beside signup of a bouqet of flowers.">Sign-Up</button>
                </div>
            </div>
            <div class="topnav" id="myTopnav">
                <a href="home.php" class="active">Home</a>
                <a href="Flowers.php">Flowers</a>
                <a href="budget.php">Budget</a>
                <a href="hair&dress.php">Hair &amp; Dress</a>
                <a href="guests.php">Guests</a>
                <a href="photography.php">Photography</a>
                <a href="venues.php">Venues</a>
                <a href="Catering.php">Catering</a>
                <div id="SearchContainer">
                    <input type="text"  placeholder="Search..">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
                <a href="javascript:void(0);" class="icon" onclick="NavigationResponse()"><i class="fa fa-bars"></i></a>
            </div>
        </header>
        <!-- Header Ends here -->
        <div class="main">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="images/home/home_bg_1.jpg" style="width:100%" alt="a couple dancing in the woods.">
                    <div class="text">For your special occasion</div>
                </div>
                <div class="mySlides fade">
                    <img src="images/home/home_bg_2.jpg" style="width:100%" alt="a couple standing head to head with a bouqet of flower in hand.">
                    <div class="text">For your sweet moments</div>
                </div>
                <div class="mySlides fade">
                    <img src="images/home/home_bg_3.jpg" style="width:100%" alt="a couple dancing together with the bride smiling.">
                    <div class="text">Wedding Recipe</div>
                </div>
                <hr class="Seperator">
            </div>
            <div class="row Signify">
                <h1 class="SectionHeader">Our Mission</h1>
            </div>
            <div class="row Signify">
                <img class="quote" src="images/home/doubleQuotes.png" alt="double Quotes Sign">
                <div class="column Venues">
                    <p>We have been serving our community since 2005. We take pride in our work,
                        therefore, with our years of experience, qualified staff, excellent coordination and planning skills,
                        we guarantee you 100% satisfaction when you allow us to take charge of every detail.
                        Weddings by Design is committed to provide our bridal couples with the stress free wedding of their dreams.
                        To accomplish our mission is to provide our couples with the best products and services from the best wedding vendors and to work within their wedding budget. 
                    </p>
                </div>
            </div>
            <div class="row Signify">
                <h1 class="SectionHeader">Our Aim</h1>
            </div>
            <div class="row Signify">
                <img class="quote" src="images/home/doubleQuotes.png" alt="double Quotes Sign">
                <div class="column Venues">
                    <p>We aim to ensure a safe and enriching community for our users. We always encourage our members to be welcoming to all members, offer honest and supportive advice,
                        and share ideas to improve
                        to improve the Wedding Planning process.
                        Members of the Community conduct themselves with a high degree of integrity, decency, and respect in order to ensure that all Community voices can be heard and everyone can find the support
                        and information they need. It is expected that everyone who chooses to participate in the Wedding Recipe Community will hold themselves and each other to these Guidelines and ideals in order to foster a helpful, fun, and supportive Community for all.
                    </p>
                </div>
            </div>
            <hr class="Seperator">
            <h1 class="SectionHeader"><img src="images/home/checklist.png" alt="a small checklist icon beside text.">Plan your perfect day with us</h1>
            <h2 class="SectionDesc">You are only one click away</h2>
            <div class="gallerySection">
                <div class="galleryResponsive">
                    <div class="gallery">
                        <a href="Flowers.php">
                        <img src="images/home/gallery_img_5.jpg" alt="Groom and bride embracing with flowers in hand" width="600" height="400">
                        </a>
                        <div class="desc">Delightful Flower Bouquets</div>
                    </div>
                </div>
                <div class="galleryResponsive">
                    <div class="gallery">
                        <a href="Catering.php">
                        <img src="images/home/gallery_img_2.jpg" alt="Delicious Cake" width="600" height="400">
                        </a>
                        <div class="desc">Delicious Cartering</div>
                    </div>
                </div>
                <div class="galleryResponsive">
                    <div class="gallery">
                        <a href="guests.php">
                        <img src="images/home/gallery_img_3.jpg" alt="Northern Lights" width="600" height="400">
                        </a>
                        <div class="desc">Interactive Guests List</div>
                    </div>
                </div>
                <div class="galleryResponsive">
                    <div class="gallery">
                        <a href="venues.php">
                        <img src="images/home/gallery_img_4.jpg" alt="Mountains" width="600" height="400">
                        </a>
                        <div class="desc">Wonderful Venues</div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <h1 class="SectionHeader"><img src="images/home/budget.png" alt="Checklist Image">Use our Elegent Budgeter</h1>
            <h2 class="SectionDesc">Let us do your calculations</h2>
            <div class="row">
                <div class="column Venues">
                    <h1>Budgeter</h1>
                    <p>
                        We know you don't have any time to waste, so plan while on the go with the Budget feature. 
                        We'll distribute amounts based on your total wedding budget, but you can customize numbers too.
                        Setting the wedding budget can take some time, but once you nail it down, everything will fall into place.
                    </p>
                    <a class="buttn PurchaseButtn" href="budget.php">Check it out now!</a>
                </div>
                <div class="column Venues"><img src="images/home/home_showcase_1.jpg" class="float-rgt" alt="image of bouqet of flowers wrapped in dollars to signify budget."></div>
            </div>
            <hr class="Seperator">
            <div class="row">
                <div class="column Venues"><img src="images/home/home_showcase_2.jpg" alt="guests of a wedding sitting in a beautiful green landscape."></div>
                <div class="column Venues float-rgt">
                    <h1>Guest List</h1>
                    <p>
                        Create a list of your wedding guests, add their contact details and important info with a simple click. 
                        The Guest List has a suite of guest planning tools to help organise your guests and coordinate all of your wedding guests.
                        Guest List works with any number of guests.
                    </p>
                    <a class="buttn PurchaseButtn" href="guests.php">Check it out now!</a>
                </div>
            </div>
            <hr class="Seperator">
			<iframe name="votar" style="display:none;"></iframe> <!-- a iframe used to by-pass the re-direction of the form action attr by targeting it -->
			<!-- Newsletter only appears when user hasnt signed up to it -->
			<span id="BottomFordPlacement"></span>
			<?php
			if((isset($_SESSION["UserLogin"]))){
				$conn = OpenCon();
				$name = $_SESSION["UserLogin"];
				$sqlSubb = "SELECT Newsletter FROM user WHERE Username = '$name'";
				$result = mysqli_query($conn, $sqlSubb);
				if($result){
					while($row = mysqli_fetch_row($result)){
						foreach($row as $key => $value){
							if($value == 1)
								$_SESSION["Subscribed"] = "subbed";
						}
					}
				}
				CloseCon($conn);
				
				$html = '
				<form id = "BottomFormID" action="FormsPHP.php" method="post">
					<div class="BottomFormContainer">
						<h2>Subscribe to our Newsletter</h2>
						<p>Its totally free!</p>
					</div>
					<div class="BottomFormContainer" style="background-color:white">
						<input type="text" oninvalid="this.setCustomValidity(\'Please Enter valid Name\')" oninput="setCustomValidity(\'\')" class = "buttn" placeholder="Name" id="NewsName" name="NewsletterName" style="background-color: #F1F1F1;" value="'.$name.'" readonly>
						<input type="email" oninvalid="this.setCustomValidity(\'Please Enter valid email\')" oninput="setCustomValidity(\'\')" class = "buttn" placeholder="Email address" id="NewsEmail" name="NewsletterMail" required>
						<label>
						<input type="checkbox" checked="checked" name="NewsletterDaily"> Daily Newsletter
						</label>
					</div>
					<div class="BottomFormContainer">
						<input type="submit" class="buttn" name="NewsletterSubmit" value="Subscribe">
					</div>
				</form>';
				
				
				if((isset($_SESSION["Subscribed"]))){
					$html = "";
				}
			echo $html;
			}
			?>
			
            
        </div>
		
        <!-- Pop-ups(Modals) Start Here -->
        <!-- The Modal (contains the Sign Up form) -->
		<!--
        <div id="UserAdminAccessID" class="modal">
            <span class="close" title="Close Modal">&times;</span>
            <div class="Modalcontainer modal-content">
                <h1>Choose who you are!</h1>
                <hr>
                <div class = "row">
                    <div class="column">
                        <img src= "images/home/UserImage.png" alt = "User Minimalistic Image">
                        <button id="ContinueAsUser" class="buttn signupbtn">Continue as User</button>
                    </div>
                    <div class="column">
                        <img src="images/home/admin_avatar.png" alt = "Admin Avatar">
                        <button type="submit" onclick="window.open('admin/home.php','_self');" class="buttn signupbtn">Continue as Admin</button>
                    </div>
                </div>
            </div>
        </div>
		-->
		<iframe name="votar" style="display:none;"></iframe> <!-- a iframe used to by-pass the re-direction of the form action attr by targeting it -->
        <div id="SignUpModalID" class="modal">
            <span class="close" title="Close Modal">&times;</span>
            <form id="SignUpFormID" class="modal-content" action="FormsPHP.php" method="post">
                <div class="Modalcontainer">
                    <h1>Sign Up</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" id="SignUpUsername" name="SignUpName" required>
                    <label><b>Password</b></label>
                    <input type="password" oninvalid="this.setCustomValidity('Please Enter a Password with atleast 3 characters.')" oninput="this.setCustomValidity('')" pattern=".{3,}" placeholder="Enter Password" id="SignUpPsw" name="SignUppsw" required>
                    <label><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" id="SignUpRepPsw" name="psw-repeat" required>
                    <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                    <p class="Error"></p>
                    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                    <div class="clearfix">
                        <button type="button" class="buttn cancelbtn">Cancel</button>
                        <input type="submit" id="signup" class="buttn signupbtn" name="SignUpSubmit" value="Sign Up">
                    </div>
                </div>
            </form>
        </div>
        <div id="LoginModalID" class="modal">
            <span class="close" title="Close Modal">&times;</span>
            <form id="LoginFormID" class="modal-content" action="FormsPHP.php" method="post">
                <div class="Modalcontainer">
                    <h1>Login</h1>
                    <p>Please Enter the following details.</p>
                    <hr>
                    <label ><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" id="LoginUsername" name="LoginName" required>
                    <label ><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" id="LoginPsw" name="Loginpsw" required>
                    <label>
                    <input type="checkbox" checked="checked" name="Loginremember"> Remember me
                    </label>
                    <p class="Error"></p>
                    <div class="clearfix">
                        <button type="button" class="buttn cancelbtn">Cancel</button>
                        <input type="submit" class="buttn signupbtn" name="LoginSubmit" value="Login">
                    </div>
                </div>
            </form>
        </div>
        <!--Footer starts here -->
        <footer>
            <hr/>
            <div>
            </div>
            <div class="row">
                <div class="column">
                    <p class = "ft1"> Contact Us: </p>
                    <i class="fa fa-envelope"></i>
                    <h4 class = "ft"> E-mail Address: <a href="#" class = "links" >WeddingRecipe@hotmail.com</a></h4>
                    <br>
                    <i class="fa fa-phone"></i>
                    <h4 class = "ft"> Mobile Number: 01058963514 - 01059730159</h4>
                    <br>
                    <i class="fa fa-facebook"> </i> 
                    <h4 class = "ft">Facebook Page:<a href="#" class ="links"> WeddingRecipe </a></h4>
                    <br>
                    <i class="fa fa-map-marker"></i>
                    <h4 class = "ft">Address: Madinaty, Cairo </h4>
                    <br>
                </div>
                <div class="column ft2">
                    <p class="ft1">Wedding Recipe: </p>
                    <ul class="ft3">
                        <li class="ft2"><a href = "home.php">Home </a>|</li>
                        <li class="ft2"><a href = "Flowers.php">Flowers </a>|</li>
                        <li class="ft2"><a href = "budget.php">Budget </a>|</li>
                        <li class="ft2"><a href = "hair&dress.php">Hair & Dress </a>|</li>
                        <li class="ft2"><a href = "guests.php">Guests </a>|</li>
                        <li class="ft2"><a href = "photography.php">Photography </a>|</li>
                        <li class="ft2"><a href = "venues.php">Venues </a>|</li>
                        <li class="ft2"><a href = "Catering.php">Catering </a>|</li>
                    </ul>
					<p class="ft1">What is Wedding Recipe? </p>
                    <p class="links">The easiest way to find local wedding venues, cakes, dresses, photographers & more. Wedding Recipe is stress free, hassle free,
					and just plain free.</p>
                </div>
            </div>
        </footer>
        <!-- Footer -->
        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
        <script src="includes/script.js"></script>
		
		<?php
			LoadAllData();
			if((isset($_SESSION["UserLogin"]))){
				$Username = $_SESSION["UserLogin"];
				echo "<script> $('#RegistrationButtons').html('<form id=\"LogoutForm\" action=\"FormsPHP.php\" method=\"post\"><input type=\"submit\" id=\"LogoutIcon\" name=\"LogoutSubmit\" value=\"f\"> </form><div id=".'"User"'.">'.concat('$Username', '<i class=".'"down">'."</i>"." </div> <img src=".'"images/home/UserImage.png"'." id=".'"Avatar"'.">')); </script>";
			
			}

			if((isset($_SESSION["UserID"]))){
				$result = $_SESSION["UserID"];

			}
		?>
    </body>
</html>