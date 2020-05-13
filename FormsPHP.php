<?php
	require 'db_connection.php';
	$conn = OpenCon();
	session_start();
	function CreateUser($Name, $Pass){
		global $conn;
		$sqlInsert = "INSERT INTO user (Username, Password) VALUES ('$Name','$Pass')";
		mysqli_query($conn, $sqlInsert);
		echo "<script> alert('SQL done');</script>";
		
		$sqlSubb = "SELECT ID FROM user WHERE Username = '$Name'";
		$result = mysqli_query($conn, $sqlSubb);
		
		while($row = mysqli_fetch_row($result)){
			foreach($row as $key => $value){
				$ID = $value;
			}
		}
		$_SESSION["UserLogin"] = $Name;
		$_SESSION["UserID"] = $ID;
		
		$sqlInsert2 = "INSERT INTO budget (ID) VALUES ('$ID')";
		mysqli_query($conn, $sqlInsert2);
		echo "<script> alert('SQL Done2');</script>";
		
		header('Location: '.$_SERVER['HTTP_REFERER']);
	}
	
	if(isset($_POST["SignUpSubmit"])){
		CreateUser($_POST["SignUpName"], $_POST["SignUppsw"]);
	}
	
	
	if(isset($_POST["LoginSubmit"])){
		$name = $_POST["LoginName"];
		$Pass = $_POST["Loginpsw"];
		$sqlSubb = "SELECT ID FROM user WHERE Username = '$name' AND Password = '$Pass'";
		$result = mysqli_query($conn, $sqlSubb);
		if(mysqli_num_rows($result) != 0){
			while($row = mysqli_fetch_row($result)){
				foreach($row as $key => $value){
					$ID = $value;
				}
			}
			
			$_SESSION["UserLogin"] = $name;
			$_SESSION["UserID"] = $ID;
			header('Location: '.$_SERVER['HTTP_REFERER']);
		}
		else{
			$sqlAdmin = "SELECT ID FROM admin WHERE Username = '$name' AND Password = '$Pass'";
			$resultAdmin = mysqli_query($conn, $sqlAdmin);
			if($resultAdmin){
				header('Location: admin/home.php');
			}
			else{
				echo "<script> alert('Wrong Username/Password');</script>";
			}
		}
	}
	
	

	if(isset($_POST["LogoutSubmit"])){
		session_destroy();
		
		header('Location: '.$_SERVER['HTTP_REFERER']);
	}		
	
	if(isset($_POST["NewsletterSubmit"]) and isset($_SESSION["UserLogin"])){
		$name = $_SESSION["UserLogin"];
		$Mail = $_POST["NewsletterMail"];
		$sqlInsert = "UPDATE user SET Newsletter = true, Email = '$Mail' WHERE Username = '$name'";
		mysqli_query($conn, $sqlInsert);
		$_SESSION["Subscribed"] = "subbed";
		header('Location: '.$_SERVER['HTTP_REFERER']);
	}
	
?>