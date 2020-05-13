<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Wedding Recipe ~ Guests</title>
        <meta name="description" content="The easiest way to find local wedding venues, cakes, dresses, photographers & more. Wedding Recipe is stress free, hassle free, and just plain free."/>
        <meta name="keywords" content="Wedding, Wedding Recipe, Venues, Cakes, dresses, photographers, budgeter, wedding tools"/>
        <meta name="author" content="Karim159773, Ayah153509, Habiba163502, Anas154084">
		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="includes/styles.css">
        <link rel="icon" href="images/dress_favicon.png">
		<script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
        <script src="includes/script.js"></script>
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
                <a href="guests.php" class="active">Guests</a>
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
        <img src="images/guests/guests_1.jpg" alt="Guests image" id = "guest_heading">
        <div id="guest_title">Guests List Manager</div>
        <h3 id= "guest_desc">Seamlessly create your Guest List and manage details for all of your wedding events.</h3>
        <button id = "StartGuestbttn" name= "FillGuest">Fill your Guest List</button>
        <div>
            <table id ="Guests-List">
				<tr>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Relationship</th>
                    <th>Table Number</th>
					<th>Delete Button</th>
                </tr>
            </table>
        </div>
        <!-- Pop-ups(Modals) Start Here -->
        <div id="GuestModal" class="modal">
            <span class="close" title="Close Modal">&times;</span>
            <form id = "GuestModalID" class="modal-content" method="post">
                <div class="Modalcontainer">
                    <h2>Add your guests to the interactive guest list.</h2>
                    <h4>Fill all the fields with <span class = "require"> * </span> </h4>
                    <div>
                        <label class="FormLabel" for="Name">Name <span class = "require"> * </span></label>
                        <input class="FormInput" type="text" id="Name" name = "name">
                    </div>
                    <div>
                        <label class="FormLabel" for="PhoneNum">Phone No. <span class = "require"> * </span></label>
                        <input class="FormInput" type="tel" id="PhoneNum" name = "phone" maxlength="12">
                    </div>
                    <div>
                        <label class="FormLabel" for="relationship">Relationship<span class = "require"> * </span></label>
                        <input class="FormInput" type="text" id="relationship" name = "relation">
                    </div>
					<div>
                        <label class="FormLabel" for="email">E-mail<span class = "require"> * </span></label>
                        <input class="FormInput" type="text" id="email" name = "email">
                    </div>
                    <div>
                        <label class="FormLabel" for="table-num">Table number</label>
                        <input class="FormInput" type="number" id="table-num" name = "table">
                    </div>
                    <div>
                        <button type="button" class="buttn cancelbtn">Cancel</button>
                        <button class="buttn AddGuestBttn" type = "submit" name = "AddGuestSubmit">Add Guest</button>
                    </div>
                </div>
            </form>
        </div>
		<div id= "ConfirmModalID" class = "modal">
		<form method = "post" class = "modal-content">
		<h1 style= "text-align: center;">Are you sure you want to remove this guest?</h1>
		<button class="buttn cancelbtn">Cancel</button>
		<button type="submit" class ="buttn AddGuestBttn"  id = "confirmDelete" name = "delete">Confirm</button>
		</form>
		</div>
		<?php
	
			$conn = OpenCon();
			if (isset($_SESSION["UserID"])){
			$ID = $_SESSION["UserID"];
			$GuestsQuery = "SELECT * FROM guest WHERE ID = '$ID'";
			$GuestsArray = mysqli_query($conn, $GuestsQuery);
		
			while($row = mysqli_fetch_array($GuestsArray)){
				$Name = "";
				$Phone = "";
				$Relation = "";
				$Email = "";
				$TableNumber = "";
				foreach($row as $key => $value){
					if($key == "Name"){
						$Name = $value;
					}
					else if($key == "Phone"){
						$Phone = $value;
					}
					else if($key == "Relation"){
						$Relation = $value;
					}
					else if($key == "Email"){
						$Email = $value;
					}
					else if($key == "TableNumber"){
						$TableNumber = $value;
					}
					
				}
				echo "<script>
						$(document).ready(function(){
						var row = '<tr><td>' + '$Name' + '</td><td>' + '$Phone' + '</td><td>' + '$Relation' + '</td><td>' + '$Email' + '</td><td>' + '$TableNumber' + '</td>';
						var delbtn = '<td>' + '<button' + ' id = ' + 'delbtn' + ' value=' + '$Name' + ' onclick ='+'confirmModal(this.value)' + '>Delete' + '</button>' + '</td></tr>';
				
						$('#Guests-List').append(row + delbtn);
						$('#Guests-List').css('display', 'block');
						
						});
						</script>";
			}
			}
			function AddGuest(){
				$conn = OpenCon();
				if (isset($_SESSION["UserID"])){
				$ID = $_SESSION["UserID"];
				$guestName = $_POST['name'];
				$guestPhone = $_POST['phone'];
				$guestRelation = $_POST['relation'];
				$guestEmail = $_POST['email'];
				$guestTable = $_POST['table'];
				$applicationQuery = "INSERT INTO guest(ID, Name, Phone, Relation, Email, TableNumber) VALUES ('$ID','$guestName','$guestPhone','$guestRelation', '$guestEmail', '$guestTable')";
				if (mysqli_query($conn, $applicationQuery)) {
					echo "<script>
						
						var row = '<tr><td>' + '$guestName' + '</td><td>' + '$guestPhone' + '</td><td>' + '$guestRelation' + '</td><td>' + '$guestEmail' + '</td><td>' + '$guestTable' + '</td>';
						$('#Guests-List tbody').append(row);
						$('#Guests-List').css('display', 'block');
						alert('Guest added successfully');
						</script>";
				}
				else echo "ERROR";
				
				}else{ //Not signed in
				echo "<script>alert('Please sign in first in order to fill your guest list and access the rest of the features.');</script>";
				}
			}
			function deleteGuest(){
				$Name = $_POST['delete'];
				$conn = OpenCon();
				$deleteQuery = "DELETE FROM guest WHERE Name = '$Name'";
				if (mysqli_query($conn, $deleteQuery)){
						echo "<script>
						
						$('#GuestsList tr').filter(function() {
						return $(this).find('$Name').length > 0;
						}).remove();
						alert('Guest deleted successfully');
						</script>";
						
						echo '<script type="text/javascript">location.reload(true);</script>';
					}	
					else echo "ERROR". $conn->connect_error;
			}
			if(isset($_POST['AddGuestSubmit'])){
				AddGuest();
				echo "<script> window.onload = function(){
					if(!window.location.hash){
						window.location = window.location + '#loaded';
						window.location.reload(true);
					}
				}";
			}
			if(isset($_POST['delete'])){
			deleteGuest();
			}
		?>
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