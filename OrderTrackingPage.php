<?php
//opens connection to mysql server
session_start();
$C_ID=1;
$dbc = mysqli_connect("127.0.0.1","jess" ,"meemaa" , "it");
if (!$dbc){
   die("Not Connected: ". mysqli_error() );
   }

if(isset($_POST['submit'])) /* i.e. the PHP code is executed only when someone presses Submit button in the below given HTML Form */
{
$var = $_POST['TransactionID'];   // Here $var is the input taken from user.


 $query = "SELECT * FROM orderprocessing where TransactionID=$var AND CustomerID=$C_ID"; 
 $result= mysqli_query($dbc , $query); 
 if(mysqli_num_rows($result) == true){
 echo "<table border ='2' width='50'>
 <tr>
 <th> Product ID </th>
 <th> Quantity </th>
 <th> Time </th>
 <th> Date Shipped </th>
 <th> Tracking Number </th>
 <th> Shipping Company </th>
 <th> Product Name </th>
 </tr>
 ";
 while ($row = mysqli_fetch_array($result)){

 echo "
 <tr>
 <td>";
 echo $row[2];
 echo "
 </td>
 
  <td>";
 echo $row[3];
 echo "
 </td>
 
  <td>";
 echo $row[4]; 
 echo "
 </td>
 
 <td>";
 echo $row[7]; 
 echo "
 </td>
 
 <td>";
 echo $row[8];
 echo "
 </td>
 
 <td>";
 echo $row[9]; 
 echo "
 </td>
 
 <td>";	
    $ID=$row["ProductID"];
	$select="select ItemName from product where ProductID='$ID' ";
	$res=mysqli_query($dbc , $select);
	$itemname=mysqli_fetch_array($res);
	echo " <ul><li> " . $itemname["ItemName"] . " </li></ul>";
 echo "	
  </td>

  
 </tr>";
 }
}
else {
echo "You have entered a wrong Transaction ID , Re-Enter Please.";
}
 }  
   
 mysqli_close($dbc);
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
Transaction ID :<input type="text" name="TransactionID">
<input type="submit" name="submit">
</form>