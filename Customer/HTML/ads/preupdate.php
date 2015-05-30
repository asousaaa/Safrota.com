


    <?php	
	
	error_reporting(0);
	
$id =$_GET["transid"];  
$change= $_GET["change"];
	
	if($change == "purchase"){
	 echo "<script > 
	var rr = confirm(\"Are you sure ? \");	
	if(rr==true ){
		window.location.href =\"updatetrans.php?\"+\"transid=\"+$id+\"&change=\"+\"$change\"; 
	}
	if(rr== false){
		window.location.href = \"checkout.php?\";   
	}
	
	</script>";

	}
?>
 