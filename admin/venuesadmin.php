<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
    <title>Wedding Recipe</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="WeddingPlanner_Admin_CSS.css">

</head>

	<body>
	<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="home.php">Dashboard</a>
	  <a href="venuesadmin.php">Edit Venues</a>
	  <a href="#">Clients</a>
	  <a href="#">Contact</a>
	</div>

	<!-- Use any element to open the sidenav -->
	<span class="buttn" onclick="openNav()">Admin Menu</span>

	<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
	<div id="main">

		<header>
			<div id="topbar">
				<img id="logo-main" src="../images/WRLogo.jpg" width="200" alt="Logo Thing main logo">
				<div id="RegistrationButtons">
					<div id="User">Admin<i class="down"></i></div>
					<img src="../images/home/admin_avatar.png" id="Avatar" alt="Avatar">
				</div>
			</div>

		</header>
		<!-- Header Ends here -->
		<!-- ---------------------------Header Ends here----------------------------------------- -->
		<?php 
			require '../db_connection.php';
			
			
				$conn = OpenCon();
				$RecommendQuery = "SELECT * FROM venuerecommendation";
				$RecommendArray = mysqli_query($conn, $RecommendQuery);
				print("<table style=\"width:70%;border: 2px solid #F47373;\">");
				print("<caption class=\"headings\" style=\"padding:2%; font-weight: bold;\"> Venues recommneded by users in the past week. </caption>");
				print("<tr>");
					print("<td>Recommened by</td>");
					print("<td>Recommneded Venue</td>");
					print("</tr>");
					$counter = 0;
				while($row = mysqli_fetch_array($RecommendArray)){
					$User_email="";
					$Venue_Desc="";
					foreach($row as $key => $value){
						if($key == "contactemail"){
							$User_email = $value;
						}
						elseif($key == "description"){
							$Venue_Desc= $value;
							$counter++;
						}
					}
					print("<tr>");
					print("<td style=\"border-top: 1px solid #000;\">$User_email</td>");
					print("<td style=\"border-top: 1px solid #000;\">$Venue_Desc</td>");
					print("</tr>");	
				}
					print("</table>");
			print("<p> $counter venues were recommened by our users this week! </p>");
			function DeleteVenue(){
				$conn = OpenCon();
				$DeleteTitle = $_POST["TitleD"];
				$del =  "DELETE FROM venue  where Name = '$DeleteTitle'"; 
				$Adminresult = mysqli_query($conn, $del);
				echo("<script> alert('$DeleteTitle has been removed succesfully.');</script>");
				CloseCon($conn);
			}
			function InsertVenue(){
				$conn = OpenCon();
				$InsertTitle = $_POST["TitleA"];
				$InsertDes = $_POST["Des"];
				$InsertImage = $_POST["imageA"];
				$InsertRange = $_POST["Range"];
				$InsertPrice = $_POST["PriceR"];
				$InsertLocation =  $_POST["LocationA"];
				$in = "INSERT INTO venue (Name, Description, Photo, GuestRange, Location, PriceRange) VALUES ('$InsertTitle', '$InsertDes', '$InsertImage', '$InsertRange','$LocationA', '$InsertPrice')";
				$InsertVenue = mysqli_query($conn, $in);
				var_dump($InsertVenue);
				echo("<script> alert('$InsertTitle has been added succesfully.');</script>");
				CloseCon($conn);
			}
			
			function UpdateVenue(){
				$conn = OpenCon();
				$UpdateTitle = $_POST["TitleU"];
				$UpdateDes = $_POST["DesU"];
				$UpdateImage = $_POST["ImageU"];
				$UpdateRange = $_POST["RangeU"];
				$UpdatePrice = $_POST["PriceU"];
				$UpdateLocation =  $_POST["LocationU"];
				$update = "UPDATE venue SET Description='$UpdateDes', Photo ='$UpdateImage', GuestRange='$UpdateRange', Location='$UpdateLocation',PriceRange='$UpdatePrice' WHERE Name='$UpdateTitle'";
				$UpdateVenue = mysqli_query($conn, $update);
				
				echo("<script> alert('$UpdateTitle has been updated succesfully.');</script>");
				CloseCon($conn);
			}
			if(isset($_POST["DeleteVenueSubmit"])){
				DeleteVenue();	
			}
			if(isset($_POST["InsertVenueSubmit"])){
				InsertVenue();	
			}	
			if(isset($_POST["UpdateVenueSubmit"])){
				UpdateVenue();
			}
		?>
		
		<iframe name="votar" style="display:none;"></iframe> <!-- a iframe used to by-pass the re-direction of the form action attr by targeting it -->
		<div class="main">	
			<div class="row" claas="AddForm"> 
			
				<form actoin="" method="post" target="votar">
					<h2 class="headings">Add a new Venue</h2>
					<div>
						<label for="TitleA" Type="text" class="FormLabel"> Venue Title:</label>
						<input id="TitleA" name="TitleA" class="FormInput" required></input>
					</div>
					<div>
						<label for="Des" Type="text" class="FormLabel">  Description:</label>
						<input id="Des" name="Des" class="FormInput" required></input>
					</div>
					<div>
						<label for="imageA" Type="text" class="FormLabel"> Enter image URL:</label>
						<input id="imageA" name="imageA" class="FormInput" required></input>
					</div>
					<div>
						<label for="Range" Type="text" class="FormLabel"> Guests Range:</label>
						<input id="Range" name="Range"  class="FormInput" required></input>
					</div>
					<div>
						<label for="LocationA" Type="text" class="FormLabel"> Location:</label>
						<input id="LocationA" name="LocationA" type="text" class="FormInput" required></input>
					</div>
					<div>
						<label for="PriceR" Type="text" class="FormLabel"> Price Range:</label>
						<input id="PriceR" name="PriceR"  class="FormInput" required></input>
					</div>
					<button class="buttn" type = "submit" name="InsertVenueSubmit">Add</button>
				</form>
			</div>
			<form action="" method="post" target="votar">
					<h2 class="headings">Delete a Venue</h2>
					<div>
						<label for="TitleD" Type="text" class="FormLabel"> Venue Title:</label>
						<input id="TitleD" name="TitleD" class="FormInput" required></input>
					</div>
					<button type="submit" name="DeleteVenueSubmit" class="buttn">Delete</button>
			</form>
			<form action="" method="post">
					<h2 class="headings">Update a Venue</h2>
					<div>
						<label for="TitleU" Type="text" class="FormLabel"> Venue Title:</label>
						<input id="TitleU" name="TitleU" class="FormInput" required />
					</div>
					<div>
						<label for="DesU" Type="text" class="FormLabel">  Description:</label>
						<input id="DesU"  name="DesU" class="FormInput" required />
					</div>
					<div>
						<label for="ImageU" Type="text" class="FormLabel"> Enter image URL:</label>
						<input id="ImageU" name="ImageU" class="FormInput" required />
					</div>
					<div>
						<label for="RangeU" Type="text" class="FormLabel"> Guests Range:</label>
						<input id="RangeU" name="RangeU" class="FormInput" required />
					</div>
					<div>
						<label for="LocationU" Type="text" class="FormLabel"> Location:</label>
						<input id="LocationU" name="LocationU" type="text" class="FormInput" required />
					</div>
					<div>
						<label for="PriceU" Type="text" class="FormLabel"> Price Range:</label>
						<input id="PriceU" name="PriceU" class="FormInput">
					</div>
					<button  type="submit" name="UpdateVenueSubmit" class="buttn">Update</button>
				</form>
			<h1>User View:</h1>
			<hr class="Seperator"/>
			<div id="ViewDetailsModalID" class="modal">
			<span class="close" title="Close Modal">&times;</span>
			<form class="modal-content" method="post" action="#">
			<div class="Modalcontainer">
				<h2>You are one step away from your booking. </h2>
				<h4>Fill all the fields with <span class = "require"> * </span> </h4>
				<div>
					<label class="FormLabel" for="firstname">First Name <span class = "require"> * </span></label>
					<input class="FormInput" type="text" id="firstname">
				</div>
				<div>
					<label class="FormLabel" for="lastname">Last Name <span class = "require"> * </span></label>
					<input class="FormInput" type="text" id="lastname">
				</div>
				<div>
					<label class="FormLabel" for="phonenumber">Phone No. <span class = "require"> * </span></label>
					<input class="FormInput" type="tel" id="phonenumber" maxlength="12">
				</div>
				<div>
					<label class="FormLabel" for="date">Event Date <span class = "require"> * </span></label>
					<input class="FormInput" type="date" id="date">
				</div>
				<div>
					<label class="FormLabel" for="guests">Guests Number<span class = "require"> * </span></label>
					<input class="FormInput" type="number" id="guests">
				</div>
				<div>
					<label class="FormLabel" for="price">Total Price </label>
					<input class="FormInput" type="number" id="price">
				</div>
				<div>
				<button class="buttn">Confirm Booking! </button>
				<button class="buttn">Cancel </button>
				</div>
			</div>
		    </form>
			</div>
			
			<div class="row">
				<div class="column Venues">
					<h1>Kempinski Hotel</h1> 
					<p>
					Since every venue and package is unique, keep this info in mind when you start your venue search.
					A venue’s quoted cost is specific to your guest count, the hours you need it, and any specifics included. 
					Not sure? Ask for more details!
					</p>
					<button class = "viewdetails">View more Details </button>
					<div class = "VDetails">
						<i class="fa fa-user"></i> <h4 class="ft"> Guests: Range (250-750)</h4><br>
						<i class="fa fa-map-marker"></i> <h4 class="ft">Located in First Settlement</h4><br>
						<i class="fa fa-money"></i> <h4 class="ft">Price Range (5,000LE - 20,000LE)</h4>
					</div>
					<button class = "buttn PurchaseButtn" onclick="this.parentNode.parentNode.remove(this.parentNode); "> Remove Venue </button>			
				</div>
				<div class="column Venues"><img src="../images/venues/Venue_1.jpg"></div>
			</div>
			
			<div class="row">
				<div class="column Venues">
					<h1>Cupid Yacht</h1> 
					<p>
					Since every venue and package is unique, keep this info in mind when you start your venue search.
					A venue’s quoted cost is specific to your guest count, the hours you need it, and any specifics included. 
					Not sure? Ask for more details!
					</p>
					<button class = "viewdetails">View more Details </button>
					<div class = "VDetails">
						<i class="fa fa-user"></i> <h4 class="ft"> Guests: Range (250-750)</h4><br>
						<i class="fa fa-map-marker"></i> <h4 class="ft">Located in First Settlement</h4><br>
						<i class="fa fa-money"></i> <h4 class="ft">Price Range (5,000LE - 20,000LE)</h4>
					</div>
					<button class = "buttn PurchaseButtn" onclick="this.parentNode.parentNode.remove(this.parentNode); "> Remove Venue </button>			
			</div>
			<div class="column Venues"><img src="../images/venues/Venue_2.jpg"></div>
			</div>			
			
			<div class="row">
				<div class="column Venues">
					<h1>Swiss Inn Pyramids Golf Resort</h1> 
					<p>
					Located on the Wahat Desert Road after Dreamland, you’ll find the extraordinary venue of Swiss Inn Pyramids. 
					</p>
					<button class = "viewdetails">View more Details </button>
					<div class = "VDetails">
						<i class="fa fa-user"></i> <h4 class="ft"> Guests: Range (250-750)</h4><br>
						<i class="fa fa-map-marker"></i> <h4 class="ft">Located in First Settlement</h4><br>
						<i class="fa fa-money"></i> <h4 class="ft">Price Range (5,000LE - 20,000LE)</h4>
					</div>
					<button class = "buttn PurchaseButtn" onclick="this.parentNode.parentNode.remove(this.parentNode); "> Remove Venue </button>			
				</div>
			<div class="column Venues"><img src="../images/venues/Venue_3.jpg"></div>
			</div>
			
			<div class="row">
				<div class="column Venues">
					<h1>Villa Belle Epoque</h1> 
					<p>
					Located on the Wahat Desert Road after Dreamland, you’ll find the extraordinary venue of Swiss Inn Pyramids. 
					</p>
					<button class = "viewdetails">View more Details </button>
					<div class = "VDetails">
						<i class="fa fa-user"></i> <h4 class="ft"> Guests: Range (250-750)</h4><br>
						<i class="fa fa-map-marker"></i> <h4 class="ft">Located in First Settlement</h4><br>
						<i class="fa fa-money"></i> <h4 class="ft">Price Range (5,000LE - 20,000LE)</h4>
					</div>
					<button class = "buttn PurchaseButtn" onclick="this.parentNode.parentNode.remove(this.parentNode); "> Remove Venue</button>			
				</div>
			<div class="column Venues"><img src="../images/venues/Venue_4.jpg"></div>
			</div>			
			
		</div>
		<!-- Pop-ups(Modals) Start Here -->

	<!-- The Modal (contains the Sign Up form) -->
	<div id="SignUpModalID" class="modal">
	  <span class="close" title="Close Modal">&times;</span>
	  <form class="modal-content" action="/AccountAction.php">
		<div class="Modalcontainer">
		  <h1>Sign Up</h1>
		  <p>Please fill in this form to create an account.</p>
		  <hr>
		  <label for="email"><b>Email</b></label>
		  <input type="text" placeholder="Enter Email" name="email" required>

		  <label for="psw"><b>Password</b></label>
		  <input type="password" placeholder="Enter Password" name="psw" required>

		  <label for="psw-repeat"><b>Repeat Password</b></label>
		  <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

		  <label>
			<input type="checkbox" checked="checked" name="remember"> Remember me
		  </label>

		  <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

		  <div class="clearfix">
			<button type="button" class="buttn cancelbtn">Cancel</button>
			<button type="submit" id="signup" class="buttn signupbtn">Sign Up</button>
		  </div>
		</div>
	  </form>
	</div>
	
	<div id="LoginModalID" class="modal">
	  <span class="close" title="Close Modal">&times;</span>
	  <form class="modal-content" action="/AccountAction.php">
		<div class="Modalcontainer">
		  <h1>Login</h1>
		  <p>Please Login.</p>
		  <hr>
		  <label for="email"><b>Email</b></label>
		  <input type="text" placeholder="Enter Email" name="email" required>

		  <label for="psw"><b>Password</b></label>
		  <input type="password" placeholder="Enter Password" name="psw" required>

		  <label>
			<input type="checkbox" checked="checked" name="remember"> Remember me
		  </label>

		  <div class="clearfix">
			<button type="button" class="buttn cancelbtn">Cancel</button>
			<button type="submit" id="login" class="buttn signupbtn">Login</button>
		  </div>
		</div>
	  </form>
	</div>
		
<!-- ---------------------------Footer starts here----------------------------------------- -->
	<footer>
		<hr/>
		<div>
		
		</div>
		
		<div class="row">
			<div class="column">
				<p class = "ft1"> Contact Us: </p>
				<i class="fa fa-envelope" class="ft"></i><h4 class = "ft"> E-mail Address: <a href="#" class = "links" >WeddingRecipe@hotmail.com</a></h4><br>
				<i class="fa fa-phone"></i><h4 class = "ft"> Mobile Number: 01058963514 - 01059730159</h4> <br>
				<i class="fa fa-facebook"> </i> <h4 class = "ft">Facebook Page:<a href="#" class ="links"> WeddingRecipe </a></h4><br>
				<i class="fa fa-map-marker"></i><h4 class = "ft">Address: Madinaty, Cairo </h4><br>
			</div>
			<div class="column ft2">
				<p class="ft1">Wedding Recipe: </p>
				<ul class="ft3">
					<li class="ft2"><a href = "#">Home |</a></li>
					<li class="ft2"><a href = "#">Flowers |</a></li>
					<li class="ft2"><a href = "#">Budget |</a></li>
					<li class="ft2"><a href = "#">Hair & Dress |</a></li>
					<li class="ft2"><a href = "#">Guests |</a></li>
					<li class="ft2"><a href = "#">Photography |</a></li>
					<li class="ft2"><a href = "#">Venues |</a></li>
					<li class="ft2"><a href = "#">Catering |</a></li>
				</ul>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3451.1760565618642!2d31.60378731507119!3d30.117775281855682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14581dea54fc683b%3A0xfb58c4d6f97e0173!2sThe+British+University+In+Egypt!5e0!3m2!1sen!2seg!4v1551893455719" width="600" height="150"  allowfullscreen></iframe>
			</div>
		</div>
	</footer>
	</div>
  <!-- Footer -->
	
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<script src="WeddingRecipe_Admin_JS.js"></script>
	<?php
		LoadAllData();
	?>
	</body>
</html>