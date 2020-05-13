<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Wedding Recipe ~ Venues</title>
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
                <img id="logo-main" src="images/WRLogo.jpg" width="200" alt="Logo Thing main logo">
                <div id="RegistrationButtons">
                    <button id="Login" class="buttn"><img src="images/wedding.png" alt="small icon beside login of two wedding rings.">Login</button>
                    <button id="SignUp" class="buttn"><img src="images/flower-bouquet.png" alt="small icon beside signup of a bouqet of flowers.">Sign-Up</button>
                </div>
            </div>
            <div class="topnav" id="myTopnav">
                <a href="home.php">Home</a>
                <a href="Flowers.php">Flowers</a>
                <a href="budget.php">Budget</a>
                <a href="hair&dress.php">Hair &amp; Dress</a>
                <a href="guests.php">Guests</a>
                <a href="photography.php">Photography</a>
                <a href="venues.php" class="active">Venues</a>
                <a href="Catering.php">Catering</a>
                <div id="SearchContainer">
                    <input type="text"  placeholder="Search..">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
                <a href="javascript:void(0);" class="icon" onclick="NavigationResponse()"><i class="fa fa-bars"></i></a>
            </div>
        </header>
        <!-- ---------------------------Header Ends here----------------------------------------- -->
        <div class="main">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="images/venues/venue_slideshow_1.jpg" alt="Modern Venue with a sea view" style="width:100%">
                    <div class="text">Let it be a special day</div>
                </div>
                <div class="mySlides fade">
                    <img src="images/venues/venue_slideshow_2.jpg" alt="Colorful Indian style Venue" style="width:100%">
                    <div class="text">Easy, fast and safe booking</div>
                </div>
                <div class="mySlides fade">
                    <img src="images/venues/venue_slideshow_3.jpg" alt="Modern Fancy Tables Venue" style="width:100%">
                    <div class="text">Classy and romantic venues</div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="column" >
                        <p class="SectionHeader"> Finding a Wedding Venue</p>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <p class="SectionHeader"><img src="images/venues/artistic-brush.png" alt="Small Brush Minimalistic icon"> Start with the style</p>
                    </div>
                    <div class="column">
                        <p class="SectionHeader"><img src="images/venues/menu.png" alt="Circle with Bars to indicate a checklist">  Understand the Options</p>
                    </div>
                </div>
                <div class="row">
                    <div class="column headingDesc">
                        <p > Imagine your reception. Is it indoors or outdoors? Is it a big celebration, or could you visit small wedding venues?
                            Search for venues that fit your vision. And remember—decor can also help transform a venue into your style.
                        </p>
                    </div>
                    <div class="column headingDesc">
                        <p > Since every venue and package is unique, keep this info in mind when you start your venue search.
                            A venue’s quoted cost is specific to your guest count, the hours you need it, and any specifics included. 
                        </p>
                    </div>
                </div>
            </div>
            <hr class="Seperator"/>
			<iframe name="votar" style="display:none;"></iframe> <!-- a iframe used to by-pass the re-direction of the form action attr by targeting it -->
            <div id="ViewDetailsModalID" class="modal">
                <span class="close" title="Close Modal">&times;</span>
                <form class="modal-content" name="VenueForm"  action="" onsubmit="return FormValidation();" method="post">
                    <div class="Modalcontainer">
                        <h2>You are one step away from your booking. </h2>
                        <h4>Fill all the fields with <span class = "require"> * </span> </h4>
						<div>
                            <label class="FormLabel">Venue Name <span class = "require"> * </span></label>
                            <input class="FormInput" type="text" name="VenueName" id="VenName" readonly="readonly">
                        </div>
                        <div>
                            <label class="FormLabel">Wedding Date <span class = "require"> * </span></label>
                            <input class="FormInput" type="date" name="VenueDate" id="date" required>
                        </div>
                        <div>
                            <label class="FormLabel">Guests Number<span class = "require"> * </span></label>
                            <input class="FormInput" type="number" name="VenueGuests" required>
                        </div>
                        <div>
                            <label class="FormLabel">Timing<span class = "require"> * </span></label><br>
                            <input class="radiobutton" type="radio" name="VenueTiming" id="t1">Morning slot (12:00PM - 7:00) <br>
                            <input  class="radiobutton" type="radio" name="VenueTiming" id="t2">Evening slot (8:00PM  - 2:00AM) 
                        </div>
                        <div>
                            <label class="FormLabel">Total Price</label>
                            <input class="FormInput" type="number" name="VenuePrice" id="price" readonly="readonly">
                        </div>
                        <div class="FormButtnGroup">
                            <button type="button" class="buttn cancelbtn">Cancel</button>
                            <input class="buttn signupbtn" name ="VenueSubmit" type="submit" value="Confirm Booking!">
                        </div>
                    </div>
                </form>
            </div>
			<?php 
			
			$conn = OpenCon();
			$VenuesQuery = "SELECT * FROM Venue";
			$VenuesArray = mysqli_query($conn, $VenuesQuery);
			while($row = mysqli_fetch_array($VenuesArray)){
				$title = "";
				$Desc = "";
				$guestRange = "";
				$Image = "";
				$Location = "";
				$Price = "";
				foreach($row as $key => $value){
					if($key == "Name"){
						$title = $value;
					}
					else if($key == "Description"){
						$Desc = $value;
					}
					else if($key == "Photo"){
						$Image = $value;
					}
					else if($key == "GuestRange"){
						$guestRange = $value;
					}
					else if($key == "Location"){
						$Location = $value;
					}
					else if($key == "PriceRange"){
						$Price = $value;
						}
				}
							
			echo("<div class=\"row\">");
			echo("<div class=\"column Venues\">");
			echo("<h1> $title </h1>");
			echo("<p> $Desc </p>");
			echo("<button class = \"viewdetails\">View more Details </button>");
			echo("<div class = \"VDetails\">");
			echo("<i class=\"fa fa-user\"></i> ");
			echo("<h4 class=\"ft\"> Guests Range: $guestRange</h4><br>");
			echo(" <i class=\"fa fa-map-marker\"></i>");
			echo("<h4 class=\"ft\">Located in $Location</h4><br>");
			echo("<i class=\"fa fa-money\"></i> ");
			echo("<h4 class=\"ft\">Price Range ($Price)</h4>");
			echo("</div>");
			echo("<button class = \"buttn PurchaseButtn\" onclick=\"Modal(250,750,'$title')\">Book this Venue!</button></div>");
			echo("<div class=\"column Venues\"><img src=\"$Image\" alt=\"Wide Photo of Kempinski Hotel with swimming pool in middle\"></div>");
			echo("</div>");
			}
			
			
			function RecommendVenue(){
				//$conn = OpenCon();
				global $conn;
				$NewsName = $_POST["RecommendName"];
				$NewsEmail = $_POST["RecommendEmail"];
				$Desc = $_POST["RecommendDesc"];
				$applicationQuery = "INSERT INTO venuerecommendation(name, contactemail, description) VALUES ('$NewsName','$NewsEmail','$Desc')";
				$RecommendVenue = mysqli_query($conn, $applicationQuery);
				echo("<script> alert('Thank you for your recommendation.');</script>");
				//CloseCon($conn);
			}
			if(isset($_POST["Recommendation"])){
				RecommendVenue();
			}
			function ReserveVenue(){
				global $conn;
				$VenueName = $_POST["VenueName"];
				$VenueGuests = $_POST["VenueGuests"];
				$VenueDate = $_POST["VenueDate"];
				$VenuePrice = $_POST["VenuePrice"];
				if(isset($_SESSION["UserID"])){
					$ID = $_SESSION["UserID"];
				}
				else{
					echo "<script>alert('You have to be logged in!');</script>";
					exit();
				}
				$BudgetQuery = "UPDATE budget SET Venue = '$VenueName' WHERE ID = '$ID'";
				mysqli_query($conn, $BudgetQuery);
				$ReserveQuery = "INSERT INTO reservation(ID, VenueName, GuestNumber, TotalPrice, WeddingDate) VALUES ('$ID', '$VenueName', $VenueGuests, $VenuePrice,'$VenueDate')";
				$ReserveVenue = mysqli_query($conn, $ReserveQuery);
				echo "<script>alert('Your Reservation has been confirmed! Check your Budget Page');</script>";
			}
			if(isset($_POST["VenueSubmit"])){
				if(isset($_SESSION['UserID']))
				{	
					ReserveVenue();
				}
				else{
					echo "<script>alert('You have to be logged in!');</script>";
				}
			}
			?>
			
			
            <form id = "BottomFormID" action="" method="post">
                <div class="BottomFormContainer">
                    <h2>Venue Application</h2>
                    <p>Your Venue is not here? Apply now!</p>
                </div>
                <div class="BottomFormContainer" style="background-color:white">
                    <input type="text" oninvalid="this.setCustomValidity('Please Enter valid Venue Name')" oninput="setCustomValidity('')" class = "buttn" placeholder="Venue Name" id="NewsName" name="RecommendName" required>
                    <input type="email" oninvalid="this.setCustomValidity('Please Enter valid email')" oninput="setCustomValidity('')" class = "buttn" placeholder="Contact Email address" id="NewsEmail" name="RecommendEmail" required>
                    <input type="text" class = "buttn" placeholder="Desc" id="Desc" name="RecommendDesc" required>
                </div>
                <div class="BottomFormContainer">
                    <input type="submit" class="buttn" name="Recommendation" value="Apply">
                </div>
            </form>
			
			
        </div>
        <!-- Pop-ups(Modals) Start Here -->
        <!-- The Modal (contains the Sign Up form) -->
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