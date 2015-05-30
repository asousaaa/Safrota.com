<?php
//opens connection to mysql server
session_start();
//$C_ID=$_SESSION["CustomerID"];
$C_ID=1;
//$transId;
$dbc = mysqli_connect("127.0.0.1","jess" ,"meemaa" , "it");
if (!$dbc){
   die("Not Connected: ". mysqli_error() );
   }
   
 
 $query = "SELECT * FROM orderprocessing where CustomerID=$C_ID AND Processed='0' AND Shipped='0'"; 
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
 <th> Purchasment </th>
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
  
  <td>";
  $transId=$row[0];
  echo "
  <form name=form action=transaction.php>
           <input type='button' value='Purchase' onClick='pass_Trans_ID($transId)'>
       </form>";
  echo"
 </td> 
  
 </tr>";
 }
}
else {
echo "You have no orders to purchase.";
}
 
 
 mysqli_close($dbc);
?>

<script type="text/javascript">
function pass_Trans_ID(transId){
window.location.href="transaction.php?transId="+transId+"";}
</script>