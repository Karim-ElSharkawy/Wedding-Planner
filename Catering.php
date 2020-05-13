<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Wedding Recipe ~ Catering</title>
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
                <a href="home.php" >Home</a>
                <a href="Flowers.php">Flowers</a>
                <a href="budget.php">Budget</a>
                <a href="hair&dress.php">Hair &amp; Dress</a>
                <a href="guests.php">Guests</a>
                <a href="photography.php">Photography</a>
                <a href="venues.php">Venues</a>
                <a href="Catering.php" class="active">Catering</a>
                <div id="SearchContainer">
                    <input type="text"  placeholder="Search..">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
                <a href="javascript:void(0);" class="icon" onclick="NavigationResponse()"><i class="fa fa-bars"></i></a>
            </div>
        </header>
        <!-- Header Ends here -->
        <div class="container3">
            <div class="blurryDiv">
                <img src="images/HairdressAndCartering/intro-bg.jpg" alt="Snow" style="width:100%;">
                <div class="centered">
                    <h1>Choose the best</h1>
                </div>
            </div>
        </div>
        <hr class="Seperator">
        <div class="features2 text-center2">
            <div class="the best">
                <h1 style="text-align:center"> <u> Our special </u></h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="column">
                        <div class="features-item1">
                            <h3>Orange cake</h3>
                            <div class="container6">
                                <img src="images/HairdressAndCartering/2.jpg" alt="Fancy Salad" style="width:100%; height:250px;" class="image1">
                                <div class="overlay02">
                                    <div class="text1">Orange cake 14$</div>
                                </div>
                            </div>
                            <p>you can choose for your guests a light dessert that contain a several fresh fruits this is our special in 
                                modren weddings and many brides choose it and its made by cehf<b> Paul Bocuse</b>
                            </p>
                        </div>
                        <button class="buttn PurchaseButtn" onclick="ModalCatering()">Check it out now!</button>
                    </div>
                    <div class="column">
                        <div class="features-item1">
                            <h3>Banana tart delight</h3>
                            <div class="container6">
                                <img src="images/HairdressAndCartering/3.jpg" alt="banana tart" style="width:100%; height:250px;">
                                <div class="overlay02">
                                    <div class="text1">Banana tart delight 18$</div>
                                </div>
                            </div>
                            <p>you can choose for your guests a different kind of dessert that contain chocolates and the main ingredient is banana this is our special in modren weddings by chef
                                <b> Emeril Lagasse</b>
                            </p>
                        </div>
                        <button class="buttn PurchaseButtn" onclick="ModalCatering()">Check it out now!</button>
                    </div>
                    <div class="column">
                        <div class="features-item1">
                            <h3>ravioli pasta</h3>
                            <div class="container6">
                                <img src="images/HairdressAndCartering/04.jpg" alt="Ravioli" style="width:100%; height:250px;">
                                <div class="overlay02">
                                    <div class="text1">ravioli pasta 20$</div>
                                </div>
                            </div>
                            <p>When it comes to pasta the best kind of pasta and has the special taste is ravioli and it has many kinds of cheeses and its made by the famous chef 
                                <b>Marco Pierre White</b>
                            </p>
                        </div>
                        <button class="buttn PurchaseButtn" onclick="ModalCatering()">Check it out now!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="cover2">
            <img src="images/HairdressAndCartering/food.jpg" alt="Food" style="width:100%; height:250px;">
        </div>
        <!-----------------------------------------------menu--------------------------------------------->
        <h1 style="text-align:center"> <u> MENU </u></h1>
        <div class="row">
            <div class="column1">
                <div class="features-item8">
                    <h2>Beverage</h2>
                    <h3>1-Iced tea and sweet tea</h3>
                    <p> the price is 4$ for cup</p>
                    <h3>2-Fruit infused water </h3>
                    <p> some fresh fruits soaked in water its for 3$per cup</p>
                    <h3>3-Sodas </h3>
                    <p> some sodas like pepsi and cocacola its for 2$</p>
                    <h3>4-Punch</h3>
                    <p>  generally containing fruit or fruit juice 6$</p>
                    <h3>5-Apple Cider</h3>
                    <p> an unfiltered, unsweetened, non-alcoholic beverage made from apples for 9$ </p>
                </div>
            </div>
            <div class="column2">
                <div class="features-item9">
                    <h2>Starters</h2>
                    <h3>1-Farmhouse Vegetable Broth</h3>
                    <p> its a soup made from vegetables 7$ </p>
                    <h3>2-Seafood Chowder </h3>
                    <p> soup made from some kinds of sea food for 20$ </p>
                    <h3>3-Roast scallops </h3>
                    <p> its a roasted chicken for 9$</p>
                    <h3>4-goat's cheese </h3>
                    <p> its very delicious for 6$ </p>
                    <h3>5-Smoked duck breast</h3>
                    <p> its a breast with some dips for 7$ only </p>
                </div>
            </div>
        </div>
        <div class="row1">
            <div class="column1">
                <div class="features-item8">
                    <h2>Main Dish</h2>
                    <h3>1-Sourdough-crusted Blade of beef </h3>
                    <p>  served with Tomato & White Wine Sauce for 18$ </p>
                    <h3>2-Breast of Chicken wrapped in Parma Ham </h3>
                    <p> stuffing croquette, beef dripping potato for 30$</p>
                    <h3>3-Braised beef mini pot </h3>
                    <p>boulangere potatoes, stout mustard, savoy, port and pearl onion jus for40$</p>
                    <h3>4-Lamb cutlets </h3>
                    <p>  roasted red onion mash, red wine and thyme just for 23$</p>
                    <h3>5-Roast sirloin of beef </h3>
                    <p> horseradish boxty potato cake, seared baby leeks, onion gravy for 55$</p>
                </div>
            </div>
            <div class="column2">
                <div class="features-item9">
                    <h2>Dessert</h2>
                    <h3>1-Fresh Local Strawberries & Clotted Cream </h3>
                    <p> its with creamcheese for 35$</p>
                    <h3>2-Summer Baked Peaches </h3>
                    <p> with Honeyed Greek Yoghurt for 60$</p>
                    <h3>3-Classic Summer Pudding  </h3>
                    <p> with Local Berries & Devon Clotted Cream for 65</p>
                    <h3>4-Vanilla Pannacotta</h3>
                    <p> with Chilled Rhubarb Soup & Brandy Snap Tuille 35$</p>
                    <h3>5-Blueberry & Mascarpone Tart 70$</h3>
                    <p> with Red Wine Syrup for 40$</p>
                </div>
                <button class="buttn PurchaseButtn" onclick="ModalCatering()">Check the menu</button>
            </div>
        </div>
        <div id="CateringModalID" class="modal">
            <span class="close" title="Close Modal">&times;</span>
            <form class="modal-content" method="post" action="">
                <div class="Modalcontainer">
                    <h2>You are one step away from your booking. </h2>
                    <h4>Fill all the fields with <span class = "require"> * </span> </h4>
                    <div>
                        <label class="FormLabel" for="StarterList">Starters</label>
                        <SELECT class="FormInput" name="StarterName">
						<?php
							$conn = OpenCon();
							$sqlS = "SELECT * FROM catering WHERE Type='Appetizer'";
							$Result = mysqli_query($conn, $sqlS);
							while($row = mysqli_fetch_row($Result)){
								foreach($row as $key => $value){
									if($key == 'Type'){
										echo "<OPTION Value=\"$value\">$value</OPTION>";
									}
								}
							}
							
						?>

						</SELECT>
                    </div>
                    <div>
                        <label class="FormLabel" for="maindish">Main Dish</label>
                        <SELECT class="FormInput" name="MainDishName">

						<?php
							$conn = OpenCon();
							$sqlS = "SELECT * FROM catering WHERE Type='Main Dish'";
							$Result = mysqli_query($conn, $sqlS);
							while($row = mysqli_fetch_row($Result)){
								foreach($row as $key => $value){
									if($key == 'Type'){
										echo "<OPTION Value=\"$value\">$value</OPTION>";
									}
								}
							}
							
						?>

						</SELECT>
                    </div>
                    <div>
                        <label class="FormLabel" for="dessert">dessert</label>
                        <SELECT class="FormInput" name="dessert">

						<OPTION Value="Creamberry">Creamberry</OPTION>
					
						</SELECT>
                    </div>
                    <div>
                        <label class="FormLabel" for="beverage">Beverage</label>
                        <SELECT class="FormInput" name="Beverage">

						<?php
							$conn = OpenCon();
							$sqlS = "SELECT * FROM catering WHERE Type='Beverage'";
							$Result = mysqli_query($conn, $sqlS);
							while($row = mysqli_fetch_row($Result)){
								foreach($row as $key => $value){
									if($key == 'Type'){
										echo "<OPTION Value=\"$value\">$value</OPTION>";
									}
								}
							}
							
						?>

						</SELECT>
                    </div>
                    <div>
                        <label class="FormLabel" for="quantity">Quantity</label>
                        <input class="FormInput" type="number" id="quantity">
                    </div>
                    <div>
						<input type="submit" class="buttn" name="ConfirmFood" value="Add to Budget">
                        <button class="buttn">Cancel </button>
                    </div>
                </div>
            </form>
        </div>
		
		
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
			
        if ( isset($_POST["ConfirmFood"])){
			
			$App = $_POST['StarterName'];
			$Main = $_POST['MainDishName'];
			$Des = $_POST['dessert'];
			$Beverage = $_POST['Beverage'];
			
			$conn = OpenCon();
			$SqlQ = "UPDATE budget SET Appetizer = '$App', MainDish = '$Main', Dessert = '$Des', Beverage = '$Beverage' WHERE ID = '100'";
			mysqli_query($conn, $SqlQ);
			echo "<script>alert('Food has been added to the budget!');</script>";
		}
		?>
    </body>
</html>