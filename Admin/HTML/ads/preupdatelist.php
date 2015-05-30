


    <?php	
	
	error_reporting(0);
	
$id =$_GET["adsid"];  
$change= $_GET["change"];
	
	if($change == "Delete this ads"){
	 echo "<script > 
	var rr = confirm(\"Are you sure ? \");	
	if(rr==true ){
		window.location.href =\"updatelist.php?\"+\"adsid=\"+$id+\"&change=\"+\"$change\"; 
	}
	if(rr== false){
		window.location.href = \"list.php?adsid=\"+$id;   
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
 window.location.href =\"updatelist.php?\"+\"adsid=\"+$id+\"&value=\"+ff+\"&change=\"+\"$change\"; 
	 }
	  </script>";
	}
?>
 