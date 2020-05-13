<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wedding Recipe</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="WeddingPlanner_Admin_CSS.css">
	<?php
		require '../db_connection.php';
	?>
</head>

<body>
	<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="home.php">Dashboard</a>
	  <a href="venuesadmin.php">Edit Venues</a>
	  <a href="#">Clients</a>
	  <a href = "../home.php">User Mode</a>
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

		

		<div class="main">
			<div class="row">
			<h1 class="SectionHeader">Statistics:</h1>
			</div>
			<div class="row">
				<div class="column">
					<h1>Traffic:</h1>
					<h4>Clients: 4205 (This Week)</h4>
					<h4>Clients: 18521 (This Month)</h4>
					<h4>Orders: 12,000 </h4>
				</div>
				<div class="column">
					<h1>Chart: <span class="SectionDesc">(Percentage is progress to set goal)</span></h1>
					<h4>|||||||||||||||||||     | 80% </h4>
					<h4>||||||||||||||||||||||	| 90% </h4>
					<h4>|||||||||||||||||||||   | 86%</h4>
				</div>
			</div>
			<hr class="Seperator"/>
			<div class="row">
				<div class="column">
					<h1>Revenue:</h1>
					<h4>Ad Revenue: $ 12,000 </h4>
					<h4>Tax Deduction: (-) $ 5,000 </h4>
					<h4>Sale Revenue: $ 20,000 </h4>
					<h4>Yearly Discounts: (-) $ 4,000 </h4>
				</div>
				<div class="column">
					<h1>Chart: <span class="SectionDesc">(Percentage is progress to set goal)</span></h1>
					<h4>||||||||||||||||||||||| | 95% </h4>
					<h4>|||||||||||||||||||     | 80% </h4>
					<h4>||||||||||||||||||||||  | 91.5% </h4>
					<h4>||||||||||||||||||||    | 82.5% </h4>
				</div>
			</div>
			<hr class = "Seperator"/>
			<div class="row">
				<div class="column">
					<h1>Summary:</h1>
					<h4>1. weekly bookings made 60% lower than last month</h4>
					<h4>2. Most chosen Venue this month, Cupid Yacht </h4>
					<h4>3. most selected flowers, hugs and kisses </h4>
					<h4>4. most selected photographer ahmed Rajeep</h4>
				</div>
			</div>
			<hr class="Seperator"/>
			<form id="AdminID" class="modal-content" action="" method="post">
				<div class="Modalcontainer">
				  <h1>Admin Adder</h1>
				  <hr>
				  <label for="SectionTitle"><b>Username</b></label>
				  <input type="text" placeholder="Enter a unique Admin Name" id="SectionTitle" name="AdminUserName" required>
				
					
				  <label for="AdminPassword"><b>Password</b></label>
				  <input type="text" id="Password" name="AdminPassword" required>
				  
				  <label for="AdminRank"><b>Rank</b></label>
				  <input type="text" id="Rank" name="AdminRank" required>
				  
				  <label for="Description"><b>Comments</b></label>
				  <textarea rows="4" cols="50" name="Description"></textarea>
				  
				  <p class="Error"></p>
				  <div class="clearfix">
					<input type="submit" class="buttn signupbtn" name="newAdminSubmit" value="Add Admin">
				  </div>
			</div>
		</form>
		
		<hr class="Seperator"/>
			<form id="BanUser" class="modal-content" action="" method="post">
				<div class="Modalcontainer">
				  <h1>Ban User</h1>
				  <hr>
				  <label for="SectionTitle"><b>Username</b></label>
				  <input type="text" id="SectionTitle" name="BanUsername" required>
				  
				  <label for="Description"><b>Reason</b></label>
				  <textarea rows="4" cols="50" name="Description"></textarea>
				  
				  <p class="Error"></p>
				  <div class="clearfix">
					<input type="submit" class="buttn signupbtn" name="BanSubmit" value="Ban">
				  </div>
			</div>
		</form>

		</div>

		<!--Footer starts here -->
		<footer>
			<hr/>
			<p class="ft1">Wedding Recipe: </p>
					<ul class="ft3">
						<li class="ft2"><a href = "home.php">Dashboard |</a></li>
						<li class="ft2"><a href = "venuesadmin.php">Edit Venues |</a></li>
						<li class="ft2"><a href = "#">Clients |</a></li>
						<li class="ft2"><a href = "../home.php">User Mode |</a></li>
					</ul>
			
		</footer>
	</div>
    <!-- Footer -->
		<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<script src="WeddingRecipe_Admin_JS.js"></script>
	<?php
	
		if(isset($_POST["newAdminSubmit"])){
			$conn = OpenCon();
			$name = $_POST["AdminUserName"];
			$Pass = $_POST["AdminPassword"];
			$Rank = $_POST["AdminRank"];
			$sqlInsert = "INSERT INTO admin (Username, Password, Rank) VALUES ('$name','$Pass', '$Rank')"; 
			mysqli_query($conn, $sqlInsert);
			CloseCon($conn);
		}
		
		if(isset($_POST["BanSubmit"])){
			$conn = OpenCon();
			$BanName = $_POST["BanUsername"];
			$sqlDelete = "DELETE FROM user WHERE Username = '$BanName'";
			mysqli_query($conn, $sqlDelete);
			CloseCon($conn);
		}
	?>
</body>
</html>