


    <?php	
	
	error_reporting(0);
	
$id =$_GET["custid"];  
$change= $_GET["change"];
	
	if($change == "Delete this ads"){
	 echo "<script > 
	var rr = confirm(\"Are you sure ? \");	
	if(rr==true ){
		window.location.href =\"updatecustomer.php?\"+\"custid=\"+$id+\"&change=\"+\"$change\"; 
	}
	if(rr== false){
		window.location.href = \"accounts.php\";   
	}
	
	</script>";
	
	
	}
	else {
	  echo "<script > 
	  var ff = prompt(\"Please enter new value\", \"\");
	  if(ff==null){
		window.location.href = \"list.php\";   
	  }
	 else{
 window.location.href =\"updatecustomer.php?\"+\"custid=\"+$id+\"&value=\"+ff+\"&change=\"+\"$change\"; 
	 }
	  </script>";
	}
?>
 