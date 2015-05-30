


    <?php	
	
	error_reporting(0);
	$connenction_link=mysqli_connect("127.0.0.1","root","","it");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

// Select Database
mysqli_select_db($connenction_link,"it");


$id =$_GET["transid"];
if($_GET["change"] == "purchase" ){
	
	 	$select_query= "UPDATE `orderprocessing` SET `Processed`='1' WHERE TransactionID = '$id' "; 
		
}
	
	$result=mysqli_query($connenction_link,$select_query)or die($select_query."<br/><br/>".mysql_error());
		
		
		
		echo '<script>
		window.alert("Thank you for purchasing from our website \n Your Transaction ID : '. $id .'");
		</script>';
		
		echo "<script> 
		window.location.href = \"checkout.php\";
		</script>";
	
	mysqli_close($connenction_link);
	
?>
 