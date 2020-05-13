<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Wedding Recipe ~ Budget</title>
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
			$conn = OpenCon();
			session_start();
			$UName = "Visitor";
			if(isset($_SESSION["UserID"])){
				$UName = $_SESSION['UserLogin'];
				$ID = $_SESSION["UserID"];
			}
			$Flower = "None";
			$Grapher = "None";
			$Hair = "None";
			$Dress = "None";
			$Appetizer = "None";
			$MainDish = "None";
			$Dessert = "None";
			$Venue = "None";
			$Bev = "None";
			$FlowerPrice = 0;
			$PhotoPrice = 0;
			$HairPrice = 0;
			$DressPrice = 0;
			$AppetizerPrice = 0;
			$MainDishPrice = 0;
			$DessertPrice = 0;
			$BeveragePrice = 0;
			$VenuePrice = 0;	
			$Total = 0;
			
			if(isset($_SESSION["UserID"])){
				$ID = $_SESSION["UserID"];
				$sqlSelect = "SELECT * FROM budget WHERE ID = '$ID'";
				$result = mysqli_query($conn, $sqlSelect);
				
				$resultArr = $result->fetch_assoc();
				
				if($resultArr["Flower"]){
					$Flower = $resultArr["Flower"];
					
					$PriceQuery = "SELECT Price FROM flower WHERE Name = '$Flower'";
					$resultFlower = mysqli_query($conn, $PriceQuery);
					$FlowerArr = $resultFlower->fetch_assoc();
					
					$FlowerPrice = $FlowerArr["Price"];
					$Total += $FlowerPrice;
				}
				
				if($resultArr["Photographer"]){
					$Grapher = $resultArr["Photographer"];
					
					$PriceQuery = "SELECT Price FROM photographer WHERE Name = '$Grapher'";
					$resultPhotographer = mysqli_query($conn, $PriceQuery);
					$PhotoArr = $resultPhotographer->fetch_assoc();
					
					$PhotoPrice = $PhotoArr["Price"];
					$Total += $PhotoPrice;
				}
				
				if($resultArr["Hair"]){
					$Hair = $resultArr["Hair"];
					
					$PriceQuery = "SELECT Price FROM hairanddress WHERE Name = '$Hair'";
					$resultHair = mysqli_query($conn, $PriceQuery);
					$HairArr = $resultHair->fetch_assoc();
					
					$HairPrice = $HairArr["Price"];
					$Total += $HairPrice;
				}
				
				if($resultArr["Dress"]){
					$Dress = $resultArr["Dress"];
					
					$PriceQuery = "SELECT Price FROM hairanddress WHERE Name = '$Dress'";
					$resultDress = mysqli_query($conn, $PriceQuery);
					$DressArr = $resultDress->fetch_assoc();
					
					$DressPrice = $DressArr["Price"];
					$Total += $DressPrice;
				}
				
				if($resultArr["Appetizer"]){
					$Appetizer = $resultArr["Appetizer"];
					
					$PriceQuery = "SELECT Price FROM catering WHERE Name = '$Appetizer'";
					$resultAppetizer = mysqli_query($conn, $PriceQuery);
					$AppArr = $resultAppetizer->fetch_assoc();
					
					$AppetizerPrice = $AppArr["Price"];
					$Total += $AppetizerPrice;
				}
				
				if($resultArr["MainDish"]){
					$MainDish = $resultArr["MainDish"];
					
					$PriceQuery = "SELECT Price FROM catering WHERE Name = '$MainDish'";
					$resultMainDish = mysqli_query($conn, $PriceQuery);
					$MainDishArr = $resultMainDish->fetch_assoc();
					
					$MainDishPrice = $MainDishArr["Price"];
					$Total += $MainDishPrice;
				}
				
				if($resultArr["Dessert"]){
					$Dessert = $resultArr["Dessert"];
					
					$PriceQuery = "SELECT Price FROM catering WHERE Name = '$Dessert'";
					$resultDessert = mysqli_query($conn, $PriceQuery);
					$DessertArr = $resultDessert->fetch_assoc();
					
					$DessertPrice = $DessertArr["Price"];
					$Total += $DessertPrice;
				}
				
				if($resultArr["Venue"]){
					$Venue = $resultArr["Venue"];
					
					$PriceQuery = "SELECT VenueName, TotalPrice FROM reservation WHERE ID = '$ID'";
					$resultVenue = mysqli_query($conn, $PriceQuery);
					$VenueArr = $resultVenue->fetch_assoc();
					
					$Venue = $VenueArr["VenueName"];
					$VenuePrice = $VenueArr["TotalPrice"];
					$Total += $VenuePrice;
				}
				
				if($resultArr["Beverage"]){
					$Bev = $resultArr["Beverage"];
					
					$PriceQuery = "SELECT Price FROM catering WHERE Name = '$Bev'";
					$resultBev = mysqli_query($conn, $PriceQuery);
					$BevArr = $resultBev->fetch_assoc();
					
					$BeveragePrice = $BevArr["Price"];
					$Total += $BeveragePrice;
				}

				
			}
		?>
    </head>
    <body>
        <header>
            <div id="topbar">
                <img id="logo-main" src="images/WRLogo.jpg" alt="Logo Thing main logo">
                <div id="RegistrationButtons">
                    <button id="Login" class="buttn"><img src="images/wedding.png" alt="small icon beside login of two wedding rings.">Login</button>
                    <button id="SignUp" class="buttn"><img src="images/flower-bouquet.png" alt="small icon beside signup of a bouqet of flowers.">Sign-Up</button>
                </div>
            </div>
            <div class="topnav" id="myTopnav">
                <a href="home.php">Home</a>
                <a href="Flowers.php">Flowers</a>
                <a href="budget.php" class="active">Budget</a>
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
            <div id="BudgetSection">
                <div class="row">
                    <div class="column">
                        <h1 class = "headings">Hello, <?php  echo "$UName"; ?></h1>
                        <hr class="Seperator"/>
                        <h2 class = "headings">Control your Budget</h2>
                        <span class="currency">$<input type="text" name="currencyIN" value="0"></span>
                        <h4>Set your desired budget.</h4>
                        <h1 class = "headings">Budget-o-meter (Percentage of Budget used)</h1>
                        <div id="Progressbar">
                            <div></div>
                        </div>
                        <h4>More does not always mean better.</h4>
                        
						
						<h2 class = "headings">Total:</h2>
                        <span class="currency">$<input type="text" name="TotalOut" value="0" readonly></span>
                        <h2 class = "headings">Remaining:</h2>
                        <span class="currency">$<input type="text" name="RemainingOut" value="0" name="CurrencyVoucher" readonly></span>
                    </div>
                    <div class="column">
                        <div class="CategorySection">
                            <div class="CategoryPanel">
                                <h4 class="CategoryName">Flowers: </h4>
								<h4 class="CategoryTag"><?php echo "$Flower"; ?></h4>
                                <h4 class="CategoryValue">$<i class = "Value"><?php echo "$FlowerPrice"; ?></i></h4>
                            </div>
                            <div class="CategoryPanel">
                                <h4 class="CategoryName">Venues: </h4>
								<h4 class="CategoryTag"><?php echo "$Venue"; ?></h4>
                                <h4 class="CategoryValue">$<i class = "Value"><?php echo "$VenuePrice"; ?></i></h4>
                            </div>
                            <div class="CategoryPanel">
                                <h4 class="CategoryName">Catering: </h4>
								<h4 class="CategoryTag"><?php echo "$Appetizer"." + "."$MainDish"." + "."$Dessert"." + "."$Bev"; ?></h4>
                                <h4 class="CategoryValue">$<i class = "Value"><?php $Catering = $AppetizerPrice + $MainDishPrice + $DessertPrice + $BeveragePrice; echo "$Catering"; ?></i></h4>
                            </div>
                            <div class="CategoryPanel">
                                <h4 class="CategoryName">Hair &amp; Makeup: </h4>
								<h4 class="CategoryTag"><?php echo "$Hair"." + "."$Dress"; ?></h4>
                                <h4 class="CategoryValue">$<i class = "Value"><?php $HairDress = $HairPrice + $DressPrice; echo "$HairDress"; ?></i></h4>
                            </div>
                            <div class="CategoryPanel">
                                <h4 class="CategoryName">Photography: </h4>
								<h4 class="CategoryTag"><?php echo "$Grapher"; ?></h4>
                                <h4 class="CategoryValue">$<i class = "Value"><?php echo "$PhotoPrice"; ?></i></h4>
                            </div>
							<div class="CategoryPanel">
                                <h4 class="CategoryName">Total: </h4>
								<h4 class="CategoryTag"></h4>
                                <h4 class="CategoryValue">$<i id="TotalV"><?php echo "$Total"; ?></i></h4>
                            </div>
                        </div>
                        <h2 class = "headings">Use your Voucher</h2>
                        <span class="currency">V<input type="text" name="VoucherIN" ></span>
                        <h4>Note: The wedding plan has to follow the voucher rules for it to apply.</h4>
						<button type="submit" id="signup" class="buttn signupbtn" name="SignUpSubmit" value="Sign Up">Complete Order</button>
						<button type="button" class="buttn cancelbtn">Clear</button>
						
                    </div>
                </div>
            </div>
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