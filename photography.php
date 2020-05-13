<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Wedding Recipe ~ Photography</title>
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
                <a href="home.php" >Home</a>
                <a href="Flowers.php">Flowers</a>
                <a href="budget.php">Budget</a>
                <a href="hair&dress.php">Hair &amp; Dress</a>
                <a href="guests.php">Guests</a>
                <a href="photography.php" class="active">Photography</a>
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
                    <img src="images/photography/photography_1.jpg" alt="" style="width:100%">
                    <div class="text">Wedding Photography</div>
                </div>
                <div class="mySlides fade">
                    <img src="images/photography/photography_2.jpg" alt="" style="width:100%">
                    <div class="text" style="height:70%">Capture unforgettable moments</div>
                </div>
                <div class="mySlides fade">
                    <img src="images/photography/photography_3.jpg" alt="" style="width:100%">
                    <div class="text">Memories in a snap</div>
                </div>
                <div class="mySlides fade">
                    <img src="images/photography/photography_4.jpg" alt="" style="width:100%">
                    <div class="text">In the heart of the image.</div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="column" >
                        <p class="SectionHeader"><img src="images/photography/photo-camera.png" alt=""> Find your Photographer</p>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <p class="SectionHeader"><img src="images/photography/mirror.png" alt=""> Frame your wedding</p>
                    </div>
                    <div class="column">
                        <p class="SectionHeader"><img src="images/photography/budget.png" alt="">  Consider your budget</p>
                    </div>
                </div>
                <div class="row">
                    <div class="column photography" style = "margin:3%; margin-right:15%; margin-top: 0;">
                        <p > Choose the right photographer by observing his past events and pictures taken to get a better idea
                            of the quality and skill of the photographer. Your wedding pictures' quality matters as they will probably be framed to be viewed 
                            for the rest of your life!
                        </p>
                    </div>
                    <div class="column photography">
                        <p > Your budget matters when choosing your photographer. Probable fares is 
                            listed for each photographer, but you should contact the photographer directly for accurate prices. You can use our budget tool to
                            plan your wedding better.
                        </p>
                    </div>
                </div>
            </div>
			<div id= "ConfirmBookingID" class = "modal">
			<form method = "post" class = "modal-content">
			<h1 style= "text-align: center;">Are you sure you want to book this photographer?</h1>
			<button class="buttn cancelbtn">Cancel</button>
			<button type="submit" class ="buttn"  id = "confirmBooking" name = "book" style="width:50%;padding: 14px 20px;">Confirm</button>
			</form>
			</div>
            <hr class="Seperator"/>
            <div class="row" style="margin: 2%">
                <div class="column photography">
                    <div class="photographer-container">
                        <div class="AhmedPics fade">
                            <img src="images/photography/Ahmed_1.jpg" style="width:100%;" alt="">
                        </div>
                        <div class="AhmedPics fade">
                            <img src="images/photography/Ahmed_2.jpg" style="width:100%" alt="">
                        </div>
                        <div class="AhmedPics fade">
                            <img src="images/photography/Ahmed_3.jpg" style="width:100%" alt="">
                        </div>
                        <div class="AhmedPics fade">
                            <img src="images/photography/Ahmed_4.jpg" style="width:100%" alt="">
                        </div>
                        <div class="AhmedPics fade">
                            <img src="images/photography/Ahmed_5.jpg" style="width:100%" alt="">
                        </div>
                        <a class="prev" onclick="plusPics(-1,0)">&#10094;</a>
                        <a class="next" onclick="plusPics(1,0)">&#10095;</a>
                    </div>
                </div>
                <?php
				$conn = OpenCon();
				$Name = 'Ahmed Rajeep';
				$PhotographerQuery = "SELECT * FROM photographer WHERE Name = '$Name'";
				$PhotographerArray = mysqli_query($conn, $PhotographerQuery);
				$row = mysqli_fetch_array($PhotographerArray);
					$Price = "";
					$Desc = "";
					$Phone = "";
					$Email = "";
					$FB = "";
					foreach($row as $key => $value){
						if($key == "Description"){
							$Desc = $value;
						}
						else if($key == "Phone"){
							$Phone = $value;
						}
						else if($key == "Price"){
							$Price = $value;
						}
						else if($key == "Email"){
							$Email = $value;
						}
						else if($key == "Facebook"){
							$FB = $value;
						}
				}
				echo "<div class=\"column photography\">
				<h1>$Name</h1>
				<p>$Desc</p>
				<p class = \"ft1\"> Contact Information: </p>
				<i class=\"fa fa-envelope\"></i>
				<h4 class = \"ft\"> E-mail Address: <a href=\"mailto:$Email\" class = \"links\" >$Email</a></h4>
				<br>
				<i class=\"fa fa-phone\"></i>
				<h4 class = \"ft\"> Mobile Number: $Phone</h4><br>
				<i class=\"fa fa-facebook\"> </i>
				<h4 class = \"ft\">Facebook Page:<a href=\"$FB\" class =\"links\"> $Name</a></h4>
				<br>
				<i class=\"fa fa-money\"></i>
				<h4 class =\"ft\">Probable Price: $Price</h4><br>
				<button class =\"buttn PurchaseButtn\" onclick = \"confirmBookingModal('$Name')\">Book this Photographer!</button></div>
                </div>
				</div>";
				
			?>

            <div class="row" style="margin: 2%">
                <div class="column photography">
                    <div class="photographer-container">
                        <div class="KarimPics fade">
                            <img src="images/photography/Karim_1.jpg" style="width:100%;" alt="">
                        </div>
                        <div class="KarimPics fade">
                            <img src="images/photography/Karim_2.jpg" style="width:100%" alt="">
                        </div>
                        <div class="KarimPics fade">
                            <img src="images/photography/Karim_3.jpg" style="width:100%" alt="">
                        </div>
                        <div class="KarimPics fade">
                            <img src="images/photography/Karim_4.jpg" style="width:100%" alt="">
                        </div>
                        <div class="KarimPics fade">
                            <img src="images/photography/Karim_5.jpg" style="width:100%" alt="">
                        </div>
                        <a class="prev" onclick="plusPics(-1,1)">&#10094;</a>
                        <a class="next" onclick="plusPics(1,1)">&#10095;</a>
                    </div>
                </div>
                <?php
				$conn = OpenCon();
				$Name = 'Karim Elshrief';
				$PhotographerQuery = "SELECT * FROM photographer WHERE Name = '$Name'";
				$PhotographerArray = mysqli_query($conn, $PhotographerQuery);
				$row = mysqli_fetch_array($PhotographerArray);
					$Price = "";
					$Desc = "";
					$Phone = "";
					$Email = "";
					$FB = "";
					foreach($row as $key => $value){
						if($key == "Description"){
							$Desc = $value;
						}
						else if($key == "Phone"){
							$Phone = $value;
						}
						else if($key == "Price"){
							$Price = $value;
						}
						else if($key == "Email"){
							$Email = $value;
						}
						else if($key == "Facebook"){
							$FB = $value;
						}
				}
				echo "<div class=\"column photography\">
				<h1> $Name </h1>
				<p> $Desc</p>
				<p class = \"ft1\"> Contact Information: </p>
				<i class=\"fa fa-envelope\"></i>
				<h4 class = \"ft\"> E-mail Address: <a href=\"mailto:$Email\" class = \"links\" >$Email</a></h4>
				<br>
				<i class=\"fa fa-phone\"></i>
				<h4 class = \"ft\"> Mobile Number: $Phone</h4><br>
				<i class=\"fa fa-facebook\"> </i>
				<h4 class = \"ft\">Facebook Page:<a href=\"$FB\" class =\"links\"> $Name</a></h4>
				<br>
				<i class=\"fa fa-money\"></i>
				<h4 class =\"ft\">Probable Price: $Price</h4><br>
				<button class =\"buttn PurchaseButtn\" type = \"submit\" onclick= \"confirmBookingModal('$Name')\">Book this Photographer!</button></div>
                </div>
				</div>";
					

			?>

            <div class="row" style="margin: 2%">
                <div class="column photography">
                    <div class="photographer-container">
                        <div class="ShiblPics fade">
                            <img src="images/photography/Shibl_1.jpg" style="width:100%;" alt="">
                        </div>
                        <div class="ShiblPics fade">
                            <img src="images/photography/Shibl_2.jpg" style="width:100%" alt="">
                        </div>
                        <div class="ShiblPics fade">
                            <img src="images/photography/Shibl_3.jpg" style="width:100%" alt="">
                        </div>
                        <div class="ShiblPics fade">
                            <img src="images/photography/Shibl_4.jpg" style="width:100%" alt="">
                        </div>
                        <div class="ShiblPics fade">
                            <img src="images/photography/Shibl_5.jpg" style="width:100%" alt=""> 
                        </div>
                        <a class="prev" onclick="plusPics(-1,2)">&#10094;</a>
                        <a class="next" onclick="plusPics(1,2)">&#10095;</a>
                    </div>
                </div>
               <?php
				$conn = OpenCon();
				$Name = 'Ahmed Shibl';
				$PhotographerQuery = "SELECT * FROM photographer WHERE Name = '$Name'";
				$PhotographerArray = mysqli_query($conn, $PhotographerQuery);
				while($row = mysqli_fetch_array($PhotographerArray)){
					$Price = "";
					$Desc = "";
					$Phone = "";
					$Email = "";
					$FB = "";
					foreach($row as $key => $value){
						if($key == "Description"){
							$Desc = $value;
						}
						else if($key == "Phone"){
							$Phone = $value;
						}
						else if($key == "Price"){
							$Price = $value;
						}
						else if($key == "Email"){
							$Email = $value;
						}
						else if($key == "Facebook"){
							$FB = $value;
						}
				}
				echo "<div class=\"column photography\">
				<h1> $Name </h1>
				<p> $Desc </p>
				<p class = \"ft1\"> Contact Information: </p>
				<i class=\"fa fa-envelope\"></i>
				<h4 class = \"ft\"> E-mail Address: <a href=\"mailto:$Email\" class = \"links\" >$Email</a></h4>
				<br>
				<i class=\"fa fa-phone\"></i>
				<h4 class = \"ft\"> Mobile Number: $Phone</h4><br>
				<i class=\"fa fa-facebook\"> </i>
				<h4 class = \"ft\">Facebook Page:<a href=\"$FB\" class =\"links\"> $Name</a></h4>
				<br>
				<i class=\"fa fa-money\"></i>
				<h4 class =\"ft\">Probable Price: $Price</h4><br>
				<button class =\"buttn PurchaseButtn\" onclick= \"confirmBookingModal('$Name')\">Book this Photographer!</button></div>
                </div>
				</div>";
				}

			?>

            <div class="row" style="margin: 2%">
                <div class="column photography">
                    <div class="photographer-container">
                        <div class="BullseyePics fade">
                            <img src="images/photography/Bullseye_1.jpg" style="width:100%;" alt="">
                        </div>
                        <div class="BullseyePics fade">
                            <img src="images/photography/Bullseye_2.jpg" style="width:100%" alt="">
                        </div>
                        <div class="BullseyePics fade">
                            <img src="images/photography/Bullseye_3.jpg" style="width:100%" alt="">
                        </div>
                        <div class="BullseyePics fade">
                            <img src="images/photography/Bullseye_4.jpg" style="width:100%" alt="">
                        </div>
                        <div class="BullseyePics fade">
                            <img src="images/photography/Bullseye_5.jpg" style="width:100%" alt="">
                        </div>
                        <a class="prev" onclick="plusPics(-1,3)">&#10094;</a>
                        <a class="next" onclick="plusPics(1,3)">&#10095;</a>
                    </div>
                </div>
				<?php
				$conn = OpenCon();
				$Name = 'Bullseye Photography';
				$PhotographerQuery = "SELECT * FROM photographer WHERE Name = '$Name'";
				$PhotographerArray = mysqli_query($conn, $PhotographerQuery);
				while($row = mysqli_fetch_array($PhotographerArray)){
					$Price = "";
					$Desc = "";
					$Phone = "";
					$Email = "";
					$FB = "";
					foreach($row as $key => $value){
						if($key == "Description"){
							$Desc = $value;
						}
						else if($key == "Phone"){
							$Phone = $value;
						}
						else if($key == "Price"){
							$Price = $value;
						}
						else if($key == "Email"){
							$Email = $value;
						}
						else if($key == "Facebook"){
							$FB = $value;
						}
				}
				echo "<div class=\"column photography\">
				<h1> $Name </h1>
				<p> $Desc </p>
				<p class = \"ft1\"> Contact Information: </p>
				<i class=\"fa fa-envelope\"></i>
				<h4 class = \"ft\"> E-mail Address: <a href=\"mailto:$Email\" class = \"links\" >$Email</a></h4>
				<br>
				<i class=\"fa fa-phone\"></i>
				<h4 class = \"ft\"> Mobile Number: $Phone</h4><br>
				<i class=\"fa fa-facebook\"> </i>
				<h4 class = \"ft\">Facebook Page:<a href=\"$FB\" class =\"links\"> $Name</a></h4>
				<br>
				<i class=\"fa fa-money\"></i>
				<h4 class =\"ft\">Probable Price: $Price</h4><br>
				<button class =\"buttn PurchaseButtn\" onclick = \"confirmBookingModal('$Name')\">Book this Photographer!</button></div>
                </div>
				</div>";
				}
				if(isset($_POST['book'])){
					if(isset($_SESSION['UserID'])){
					$ID = $_SESSION['UserID'];
					$Name = $_POST['book'];
					$BudgetPhotoQuery = "UPDATE  Budget SET Photographer = '$Name' WHERE ID = '$ID'";
					echo "<script>alert('Photographer booked successfully');</script>";
					$BudgetUpdate = mysqli_query($conn, $BudgetPhotoQuery);
					} else{ //Not signed in
					echo "<script>alert('You are not signed in to book a photographer');</script>";
					}
				}

			?>
            <form id = "BottomFormID" action="#">
                <div class="BottomFormContainer">
                    <h2>Photographer Application</h2>
                    <p>Show us your passion about photos. Apply now!</p>
                </div>
                <div class="BottomFormContainer" style="background-color:white">
                    <input type="text" oninvalid="this.setCustomValidity('Please Enter valid Name')" oninput="setCustomValidity('')" class = "buttn" placeholder="Name" id="PhotoName" name="name" required>
                    <input type="email" oninvalid="this.setCustomValidity('Please Enter valid email')" oninput="setCustomValidity('')" class = "buttn" placeholder="Email address" id="PhotoEmail" name="mail" required>
                    <input type="number" class = "buttn" placeholder="Years of Experience" id="PhotographerExperience" name="PhotographerExperience" required>
                    <label>
                    <input type="checkbox" name="subscribe"> Do you own a studio?
                    </label>
                </div>
                <div class="BottomFormContainer">
                    <input type="submit" class="buttn" value="Apply">
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
