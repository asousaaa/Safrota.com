


    <?php	
	error_reporting(0);
	$connenction_link=mysqli_connect("127.0.0.1","root","","my_db");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

// Select Database
mysqli_select_db($connenction_link,"my_db");


$myfile = fopen("../../user.txt", "r") or die("Unable to open file!");
$userid=fgets($myfile);
fclose($myfile);

$value =$_GET["name"];
	
if($_GET["option"] =="name"){
	$select_query= "UPDATE `users` SET `Name`='$value' WHERE ID = '$userid'  ";
}

if($_GET["option"] =="email"){
		$select_query= "UPDATE `users` SET `Email`='$value'WHERE ID = '$userid'  ";
}

if($_GET["option"] =="password"){
		$select_query= "UPDATE `users` SET `Password`='$value' WHERE ID = '$userid'  ";
		
}

if($_GET["option"] =="mobile"){
		$select_query= "UPDATE `users` SET `Mobile`='$value' WHERE ID = '$userid'  ";
}

if($_GET["option"] =="place"){
		$select_query= "UPDATE `users` SET `Place`='$value' WHERE ID = '$userid'  ";
}

if($_GET["option"] =="info"){
		$select_query= "UPDATE `users` SET `Information`='$value' WHERE ID = '$userid'  ";
}
		
		$result=mysqli_query($connenction_link,$select_query)or die($select_query."<br/><br/>".mysql_error());
		
		$count = mysqli_num_rows($result);
if ($count ==0) {
		echo '<script>window.alert("Changed Successfully");window.open("profile.php","_self")</script>';
}
if ($count >0)
	{
	echo '<script>window.alert("An error ocuer try again.");window.open("profile.php","_self")</script>';	
	}
	
	mysqli_close($connenction_link);
?>
 