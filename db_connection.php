<?php
	
	function OpenCon()
	 {
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$db = "weddingrecipedb";
		$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
		
		return $conn;
	 }
	 
	function CloseCon($conn)
	 {
		$conn -> close();
		
	 }
    function LoadAllData(){
		$current_file_name = basename($_SERVER['PHP_SELF']);
		if(!($current_file_name == "FormsPHP.php")){
			$conn = OpenCon();
			$sqlUserSelect = "SELECT * FROM user";
			$Userresult = mysqli_query($conn, $sqlUserSelect);
			
			$sqlAdminSelect = "SELECT * FROM admin";
			$Adminresult = mysqli_query($conn, $sqlAdminSelect);
			
			$Userdata = array();
			$Admindata = array();
			$LoadText = "";
			while($row = mysqli_fetch_row($Userresult))
			{
				$LoadText .= "loadData('".$row["1"]."','".$row["2"]."'); ";
			}
			while($row2 = mysqli_fetch_row($Adminresult))
			{
				$LoadText .= "loadAdmin('".$row2["1"]."','".$row2["2"]."'); ";
			}
			
			echo "<script> ".$LoadText."</script>";
		}
	}
?>