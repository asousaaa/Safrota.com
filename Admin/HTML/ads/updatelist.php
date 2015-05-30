


    <?php	
	
	error_reporting(0);
	$connenction_link=mysqli_connect("127.0.0.1","root","","it");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

// Select Database
mysqli_select_db($connenction_link,"it");


$id =$_GET["adsid"];
	
$value = $_GET["value"];	  
if($_GET["change"] == "Change name" ){
	
	 	$select_query= "UPDATE `product` SET `ItemName`='$value' WHERE ProductID  = '$id' "; 
		
}
if($_GET["change"] == "Change type" ){
		 	$select_query= "UPDATE `product` SET `Type`='$value' WHERE ProductID  = '$id' "; 
}
if($_GET["change"] == "Delete this ads" ){
		 	$select_query= "DELETE FROM `product` WHERE ProductID  = '$id' "; 
		$result=mysqli_query($connenction_link,$select_query)or die($select_query."<br/><br/>".mysql_error());
		
		echo "<script>window.alert(\"Deleted Successfully\");
		window.location.href = \"../../home.php\";
		</script>";
	
	mysqli_close($connenction_link);
	
}
if($_GET["change"] == "Change description" ){
		 	$select_query= "UPDATE `product` SET `ItemDescription`='$value' WHERE ProductID  = '$id' "; 
}
if($_GET["change"] == "Change title" ){
		 	$select_query= "UPDATE `product` SET `Title`='$value' WHERE ProductID  = '$id' "; 
}
if($_GET["change"] == "Change author" ){
		 	$select_query= "UPDATE `product` SET `Author`='$value' WHERE ProductID  = '$id' "; 
}
if($_GET["change"] == "Change publisher" ){
		 	$select_query= "UPDATE `product` SET `Publisher`='$value' WHERE ProductID  = '$id' "; 
}
if($_GET["change"] == "Change price" ){
		 	$select_query= "UPDATE `product` SET `Price`='$value' WHERE ProductID  = '$id' "; 
}
if($_GET["change"] == "Change quantity" ){
		 	$select_query= "UPDATE `product` SET `QuantityInStock`='$value' WHERE ProductID  = '$id' "; 
}
if($_GET["change"] == "Change Manfactor" ){
		 	$select_query= "UPDATE `product` SET `Manfactor`='$value' WHERE ProductID  = '$id' "; 
}
if($_GET["change"] == "Change cpu" ){
		 	$select_query= "UPDATE `product` SET `Cpu`='$value' WHERE ProductID  = '$id' "; 
}
if($_GET["change"] == "Change ram" ){
		 	$select_query= "UPDATE `product` SET `Ram`='$value' WHERE ProductID  = '$id' "; 
}
if($_GET["change"] == "Change hdd" ){
		 	$select_query= "UPDATE `product` SET `Hdd`='$value' WHERE ProductID  = '$id' "; 
}
if($_GET["change"] == "Change pixels" ){
		 	$select_query= "UPDATE `product` SET `Pixels`='$value' WHERE ProductID  = '$id' "; 
}
if($_GET["change"] == "Change zoom" ){
		    $select_query= "UPDATE `product` SET `Zoom`='$value' WHERE ProductID  = '$id' "; 
}
if($_GET["change"] == "Change battary" ){
		 	$select_query= "UPDATE `product` SET `Battary`='$value' WHERE ProductID  = '$id' "; 
}
if($_GET["change"] == "Change screen" ){
		 	$select_query= "UPDATE `product` SET `Screen`='$value' WHERE ProductID  = '$id' "; 
}
	
	$result=mysqli_query($connenction_link,$select_query)or die($select_query."<br/><br/>".mysql_error());
		
		
		
		echo "<script>window.alert(\"Changed Successfully\");
		window.location.href = \"list.php\";
		</script>";
	
	mysqli_close($connenction_link);
	
?>
 