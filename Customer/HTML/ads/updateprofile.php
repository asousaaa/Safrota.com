


    <?php	
	error_reporting(0);
	$connenction_link=mysqli_connect("127.0.0.1","root","","it");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

// Select Database
mysqli_select_db($connenction_link,"it");


$myfile = fopen("../../user.txt", "r") or die("Unable to open file!");
$userid=fgets($myfile);
fclose($myfile);

$value =$_GET["name"];
	
if($_GET["option"] =="firstname"){
	$select_query= "UPDATE `customer` SET `FirstName`='$value' WHERE CustomerID = '$userid'  ";
}

if($_GET["option"] =="lastname"){
		$select_query= "UPDATE `customer` SET `LastName`='$value'WHERE CustomerID = '$userid'  ";
}

if($_GET["option"] =="BillingAddress"){
		$select_query= "UPDATE `customer` SET `BillingAddress`='$value' WHERE CustomerID = '$userid' ";
		
}

if($_GET["option"] =="BillingCity"){
		$select_query= "UPDATE `customer` SET `BillingCity`='$value' WHERE CustomerID = '$userid' ";
}

if($_GET["option"] =="BillingState"){
		$select_query= "UPDATE `customer` SET `BillingState`='$value' WHERE CustomerID = '$userid'  ";
}

if($_GET["option"] =="BillingZip"){
		$select_query= "UPDATE `customer` SET `BillingZip`='$value' WHERE CustomerID = '$userid'  ";
}

if($_GET["option"] =="ShippingAddress"){
	$select_query= "UPDATE `customer` SET `ShippingAddress`='$value' WHERE CustomerID = '$userid'  ";
}

if($_GET["option"] =="ShippingCity"){
		$select_query= "UPDATE `customer` SET `ShippingCity`='$value'WHERE CustomerID = '$userid'  ";
}

if($_GET["option"] =="ShippingState"){
		$select_query= "UPDATE `customer` SET `ShippingState`='$value' WHERE CustomerID = '$userid'  ";
		
}

if($_GET["option"] =="ShippingZip"){
		$select_query= "UPDATE `customer` SET `ShippingZip`='$value' WHERE CustomerID = '$userid'  ";
}

if($_GET["option"] =="Phone"){
		$select_query= "UPDATE `customer` SET `Phone`='$value' WHERE CustomerID = '$userid'  ";
}

if($_GET["option"] =="password"){
		$select_query= "UPDATE `customer` SET `Password`='$value' WHERE CustomerID = '$userid'  ";
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
 