<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wedding Recipe ~ Flowers</title>
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
            <a href="Flowers.php" class="active">Flowers</a>
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
		<!-- Header Ends here-->
		
		
		
		
		<div class="main">
		<div class="slideshow-container">

			<div class="mySlides fade">
				<img src="images/Flowers/flowers_slideshow_1.jpg" alt="Couple enjoying the wedding with flowers all around" style="width:100%">
			  <div class="text">Every flower has a meaning..</div>
			</div>

			<div class="mySlides fade">
			  <img src="images/Flowers/flowers_slideshow_2.jpg" alt="Colorful Flowers on a table"  style="width:100%">
			  <div class="text">Flowers that represents you</div>
			</div>

			<div class="mySlides fade">
			  <img src="images/Flowers/flowers_slideshow_3.jpg" alt="Couple walking down the aisle while flowers are thrown all around them" style="width:100%">
			  <div class="text"> Pick the best ones for your day</div>
			</div>

	    </div>
		<div class="row">
			<div class="column">
				<h2 class="SectionHeader">Every flower is a soul blossoming in nature...</h2>
				<hr class="Seperator"/>
				<h3 class="SectionHeader">For table decoration</h3>
			</div>
		</div>
		<?php 

			$conn = OpenCon();
			$FlowerQuery = "SELECT * FROM flower";
			$FlowerArray = mysqli_query($conn, $FlowerQuery);
				function PrintFlower($Name, $Desc, $Photo, $Price){
					$OldPrice = $Price * 1.4;
					echo("<div class=\"column FlowersSection\">");
					echo("<img src=\"$Photo\" alt=\"White flowers on a white table\"  class=\"flowerPhotos\" onmouseover=\"big(this)\" onmouseout=\"normal(this)\">");
					echo("<h3 class=\"headings\">$Name</h3>");
					echo("<h4 class=\"FlowersDesc\">$Desc</h4>");
					echo("<p id=\"oldPrice\" style=\"text-decoration:line-through\"> Price: $OldPrice</p>");
					echo("<p style=\"font-weight:bold\"> SALE: $Price</p>");
					echo("<form action=' ' method='post'>");
					echo("<input type='text' style='display:none;' name='FlowerNameInput' value='$Name'>");
					echo("<input type='submit' class=\"buttn PurchaseButtn\" name='FlowerPurchase' value='Purchase' onclick=\"Purchase()\"></div></form>");
				}
				function PrintHTML(){
					echo("</div>");
					echo("<hr class=\"Seperator\">");
					echo("<div class=\"row\">");
				}
				
				if(isset($_POST["FlowerPurchase"])){
					if(isset($_SESSION["UserID"])){
					$ID = $_SESSION["UserID"];
					}
					else{
						echo "<script>alert('You have to be logged in!');</script>";
						exit();
					}
					$FlowerName = $_POST["FlowerNameInput"];
					$FlowerQuery = "UPDATE budget SET Flower = '$FlowerName' WHERE ID = '$ID'";
					mysqli_query($conn, $FlowerQuery);
					echo "<script>alert('$FlowerName has been added to your Budget Page!');</script>";
				}
				
				
				$Name = [];
				$Desc = [];
				$Photo = [];
				$Price = [];
				$Type = [];
			while($row = mysqli_fetch_array($FlowerArray)){
				
			
				foreach($row as $key => $value){
					if($key === "Name"){
						array_push($Name, $value);
					}
					else if($key === "Description"){
						array_push($Desc, $value);
					}
					else if($key === "Photo"){
						array_push($Photo, $value);
					}
					else if($key === "Price"){
						array_push($Price, $value);
					}
					else if($key ==="Type"){
						array_push($Type, $value);
					}
				}
			}	
				echo("<div class=\"row\">");
				$counter = 0;
				foreach($Type as $key => $value){
					if($value==="Table Decor"){
						PrintFlower($Name[$counter], $Desc[$counter], $Photo[$counter], $Price[$counter]);
					}
					$counter++;
				}
				echo"</div>";
				echo("<div class=\"row\">");
				echo("<div class=\"column\">");
				echo("<hr class=\"Seperator\"/>");
				echo("<h3 class=\"SectionHeader\">Bride's Bouqets</h3></div></div>");
				echo("<div class=\"row\">");
				$counter = 0;
				foreach($Type as $key => $value){
					if($value==="Bouqet"){
						PrintFlower($Name[$counter], $Desc[$counter], $Photo[$counter], $Price[$counter]);
					}
					$counter++;
				}
				echo"</div>";
				echo("<div class=\"row\">");
				echo("<div class=\"column\">");
				echo("<hr class=\"Seperator\"/>");
				echo("<h3 class=\"SectionHeader\">Most selected by customers</h3></div></div>");
				echo("<div class=\"row\">");
				$counter = 0;
				foreach($Type as $key => $value){
					if($value==="Most selected"){
						PrintFlower($Name[$counter], $Desc[$counter], $Photo[$counter], $Price[$counter]);
					}
					$counter++;
				}
				echo"</div>";
				

		?>
		<!--
		<div class="row">
			<div class="column FlowersSection">
				<img src="images/Flowers/table_1.jpg" alt="White flowers on a white table"  class="flowerPhotos" onmouseover="big(this)" onmouseout="normal(this)">
				<h3 class="headings">White Garden Rose</h3>
				<h4 class="FlowersDesc">This Garden Rose is a fluffy off white garden rose with hints of soft pink
				and has an amazingly sweet scent. Fluffy and full, this rose is perfect for a baby shower or classic wedding.</h4>
				<p style="text-decoration:line-through"> Price: 300 $</p>
				<p style="font-weight:bold"> SALE: 250 $  </p>
				<button class="buttn PurchaseButtn" onclick="Purchase()">Purchase</button>
			</div>
			<div class="column FlowersSection">
				<img src="images/Flowers/table_2.jpg" alt="Pink, Green and white flowers on table"  class="flowerPhotos" onmouseover="big(this)" onmouseout="normal(this)">
				<h3 class="headings">Candy ice</h3>
				<h4 class="FlowersDesc">Add a feminine touch to your event with Candy Ice.The petals are a classic, soft white, 
				with just a hint of blush near the center of the bloom with hot pink freckles. </h4>
				<p style="text-decoration:line-through;"> Price: 300 $</p>
				<p style="font-weight:bold"> SALE: 250 $  </p>
				<button class="buttn PurchaseButtn" onclick="Purchase()">Purchase</button>
			</div>
			<div class="column FlowersSection">
				<img src="images/Flowers/table_3.jpg" alt="Green, Pink and white Flowers on table" class="flowerPhotos" onmouseover="big(this)" onmouseout="normal(this)">
				<h3 class="headings">Blush Pink</h3>
				<h4 class="FlowersDesc" > Blush Pink Wholesale Garden Roses features lavish layers of soft hues that perfectly compliment any theme.</h4>
				<p style="text-decoration:line-through"> Price: 550 $</p>
				<p style="font-weight:bold"> SALE: 455 $  </p>
				<button class="buttn PurchaseButtn" onclick="Purchase()">Purchase</button>
			</div>
		</div>	
		<hr class="Seperator">
		<div class="row">
		<div class="column">
		
			<h3 class="SectionHeader">Bride's Bouqets</h3>
		</div>
		</div>
	    <div class="row">
			<div class="column FlowersSection">
				<img src="images/Flowers/bouqet_1.jpg" alt="a buoqeut of bright flowers"  class="flowerPhotos" onmouseover="big(this)" onmouseout="normal(this)">
				<h3 class="headings">Biedermeier</h3>
				<h4 class="FlowersDesc">Biedermeier bouquets are round and consist of a tight bunch of uniformly cut flowers wrapped by fabric or wire. 
				It's arrangements align the flowers in concentric circles around each other, creating a striped effect on your bouquet.</h4>
				<p  style="text-decoration:line-through"> Price: 300 $</p>
				<p  style="font-weight:bold"> SALE: 250 $  </p>
				<button class="buttn PurchaseButtn" onclick="Purchase()">Purchase</button>
			</div>
			<div class="column FlowersSection">
				<img src="images/Flowers/bouqet_2.jpg" alt="A buoqeut of flowers wrapped in silk" class="flowerPhotos" onmouseover="big(this)" onmouseout="normal(this)">
				<h3 class="headings">Nosegay</h3>
				<h4 class="FlowersDesc">Highly traditional and popular bouquets are round bouquets consisting of a tight bunch 
				of flowers cut to uniform in length and style. The flowers are packed and tied by an accenting fabric wrap or wire.</h4>
				<p  style="text-decoration:line-through"> Price: 300 $</p>
				<p  style="font-weight:bold"> SALE: 250 $  </p>
				<button class="buttn PurchaseButtn" onclick="Purchase()">Purchase</button>
			</div>
			<div class="column FlowersSection">
				<img src="images/Flowers/bouqet_4.jpg" alt="a Pomander wedding ball held by the bride's hands" class="flowerPhotos" onmouseover="big(this)" onmouseout="normal(this)">
				<h3 class="headings">Pomander</h3>
				<h4 class="FlowersDesc" >Pomander bouquets feature a round ball of flowers suspended from ribbon or twine, and worn by the wrist.
				Typically, a pomander bouquet will be enhanced with colorful jewels and gems. </h4>
				<p  style="text-decoration:line-through"> Price: 550 $</p>
				<p  style="font-weight:bold"> SALE: 455 $  </p>
				<button class="buttn PurchaseButtn" onclick="Purchase()">Purchase</button>
			</div>
		</div>			
		<div class="row">
		<div class="column">
		<hr class="Seperator">
			<h3 class="SectionHeader">Most selected by customers</h3>
		</div>
		</div>
	    <div class="row">
			<div class="column FlowersSection">
				<img src="images/Flowers/flower_1.jpg" alt="Purple flowers" class="flowerPhotos" onmouseover="big(this)" onmouseout="normal(this)">
				<h3 class="headings">Hugs and kisses</h3>
				<h4 class="FlowersDesc">A dizzying array of deep, robust color, the Hugs and Kisses bouquet 
				contains one dozen tulips and one dozen iris, fresh from the fields.</h4>
				<p  style="text-decoration:line-through"> Price: 300 $</p>
				<p  style="font-weight:bold"> SALE: 250 $  </p>
				<button class="buttn PurchaseButtn" onclick="Purchase()">Purchase</button>
			</div>
			<div class="column FlowersSection">
				<img src="images/Flowers/flower_2.jpg" alt="White FLowers in a vase" class="flowerPhotos" onmouseover="big(this)" onmouseout="normal(this)">
				<h3 class="headings">Peaceful White Gardens</h3>
				<h4 class="FlowersDesc">Express warmth to your loved ones with this peaceful garden.
				Planted full of kalanchoe and lush foliage plants, this garden also comes with one 10”-15” Peace Lily plant.
				As the Lily blooms your compassion will be conveyed in the most loving way.</h4>
				<p  style="text-decoration:line-through"> Price: 300 $</p>
				<p  style="font-weight:bold"> SALE: 250 $  </p>
				<button class="buttn PurchaseButtn" onclick="Purchase()">Purchase</button>
			</div>
			<div class="column FlowersSection">
				<img src="images/Flowers/flower_3.jpg" alt="Pink, Red and white Flowers in a vase" class="flowerPhotos" onmouseover="big(this)" onmouseout="normal(this)">
				<h3 class="headings">100 Blooms of Poms</h3>
				<h4 class="FlowersDesc" >Celebrate the hundreds of ways you love her with 100 Blooms of Poms. 
				This assorted color collection of spring daisy pom poms reminds her of the many reasons you love and appreciate her.</h4>
				<p  style="text-decoration:line-through"> Price: 550 $</p>
				<p  style="font-weight:bold"> SALE: 455 $  </p>
				<button class="buttn PurchaseButtn" onclick="Purchase()">Purchase</button>
			</div>
		</div>			
		-->
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
  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
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