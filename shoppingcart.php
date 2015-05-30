<?php
$connenction_link=mysql_connect("127.0.0.1","root","","ecommerce_db");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}
mysql_select_db("ecommerce_db");
$product_id=$_POST["ProductID"];
//$quantity=$_POST["Quantity"];
$customer_id=$_POST["ustomerID"];
$time=date('H:i:s');
$flag=0;


$Select_query= " SELECT QuantityInStock FROM 'Order processing' where ProductID='$product' ";
$Result=mysqli_query($Select_query)or die($Select_query."<br/><br/>".mysql_error());
echo "$Result";

//enter quantity in box
$quantity=$_POST["Quantity"];

$insert_query= " INSERT INTO `order processing`( `CustomerID`, `ProductID`, `Quantity`, `Time`, `Processed`, `Shipped`) VALUES ('$product_id','$quantity','$customer_id','$time','$flag','$flag')";
mysql_query($insert_query);

$select_query= " SELECT * FROM 'Order processing' ";
$result=mysqli_query($select_query)or die($select_query."<br/><br/>".mysql_error());
while($row=mysql_fetch_array($result)){	
$temp= "00:00:50" ;
$current_time=date('H:i:s');
$time=$row["Time"];
$processed=$row["Processed"];
if(( ($current_time-$time) > $temp) && ($processed==0) )
{
     $delete_query= " DELETE FROM 'Order processing' where Time='$time' ";
      mysql_query($delete_query);
}
}

$processed =$_GET["Processed"];
$value = $_GET["value"];	

if($_GET["change"] == "Change quantity" ){
	
	 	$select_query= "UPDATE `Ordering processing` SET `Quantity`='$value' WHERE Processed = '$processed' "; 
		
}
if($_GET["change"] == "Delete this product" ){
		 	$select_query= "DELETE FROM `Ordering processing` WHERE Processed = '$processed' "; 
		$result=mysqli_query($connenction_link,$select_query)or die($select_query."<br/><br/>".mysql_error());
		
		echo "<script>window.alert(\"Deleted Successfully\");
		window.location.href = \"../../home.php\";
		</script>";
	
	mysqli_close($connenction_link);
	
}
mysql_close($connenction_link);
?>