<?php
session_start();
$dbc = mysqli_connect("127.0.0.1","jess" ,"meemaa" , "it");
if (!$dbc){
   die("Not Connected: ". mysqli_error() );
   }
   
   if (isset($_GET['transId'])){
      $T_ID=$_GET['transId'];
   }
 $query = "UPDATE orderprocessing SET Processed = 1 WHERE TransactionID=$T_ID"; 
 $result= mysqli_query($dbc , $query);  
 echo "Your Transaction ID is " . $T_ID ." </br>";
  echo "Thank You." ." </br>". " </br>";
 
 echo "Do you want to purchase again?" . "</br>";
   echo "
  <button><a href='CheckoutPage.php'>YES</a></button>" ;
  
 
 
  mysqli_close($dbc);

?>