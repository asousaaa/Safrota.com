<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<link type="text/css" rel="stylesheet" href="../../CSS/search.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Goods.com | profile </title>
<meta name="author" content="hosam azzam" />
<!-- Date: 2014-11-16 -->
</head>

<body bgcolor="#ffffff" id="body">
<center>
  <div id="header" >
    <div class="logo" > <font face="fantasy" color="#BCC820" size="7">
      <center>
        Safrota.com
      </center>
      </font> </div>
    <div class="heder-content" align="left" > <font face="fantasy" color="#33817f" size="5" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp; <a href="../../home.html">&nbsp;&nbsp;home </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      <a href="checkout.php" >Checkout</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="">&nbsp;&nbsp;&nbsp;&nbsp;Inbox </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="search.php">&nbsp;&nbsp;&nbsp;&nbsp;Search </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <a href="order.php" >Order Tracking</a> &nbsp;&nbsp;&nbsp;
        <a href="profile.php">&nbsp;&nbsp;&nbsp;&nbsp;Profile </a>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a onClick=" window.close()" href="../../../welcome.php" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;		Log out </a> </font> </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div id="content" align="left"> <br>
    <!-- onchange="location = this.options[this.selectedIndex].value;"-->
    
   
    <?php
		error_reporting(0);	
		
		 require_once("../../Controler.php");
		 $obj = new Controler;
		$result= $obj->updateInfo();
		 
		 $row = mysqli_fetch_array($result);

echo " <form id=\"chanfe\" name=\"chanfe\" method=\"post\" action=\"profile.php\"><center><table border='1'  bgcolor=\"#BCC820\" width='900px'>
<tr>
<td align=\"center\" >First name</td>
<td  bgcolor=\"#7DB818\" align=\"center\" >";
echo $row["FirstName"];
echo "</td>
<td  bgcolor=\"#7DB818\" align=\"center\"  >
<input type=\"submit\" name=\"changefname\" value=\"Change\" style=\"background:none;  border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td  align=\"center\">Second name</td>
<td  bgcolor=\"#7DB818\" align=\"center\" >";
echo $row["LastName"];
echo "</td>
<td  bgcolor=\"#7DB818\" align=\"center\" >
<input type=\"submit\" name=\"changesname\" value=\"Change\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td  align=\"center\" >Password</td>
<td  bgcolor=\"#7DB818\" align=\"center\" >";
echo $row["Password"];
echo "</td>
<td  bgcolor=\"#7DB818\" align=\"center\" >
<input type=\"submit\" name=\"changepassword\" value=\"Change\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td  align=\"center\">Phone</td>
<td  bgcolor=\"#7DB818\" align=\"center\" >";
echo $row["Phone"];
echo "</td>
<td  bgcolor=\"#7DB818\" align=\"center\" >
<input type=\"submit\" name=\"changemobile\" value=\"Change\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td  align=\"center\">Billing Address</td>
<td  bgcolor=\"#7DB818\" align=\"center\" >";
echo $row["BillingAddress"];
echo "</td>
<td  bgcolor=\"#7DB818\" align=\"center\" >

<input type=\"submit\" name=\"changeBillingAddress\" value=\"Change\" style=\"background:none; border:hidden; color:#ffffff; \" />

</td>
</tr>
<tr>
<td  align=\"center\">Billing City</td>
<td  bgcolor=\"#7DB818\" align=\"center\" >";
echo $row["BillingCity"];
echo "</td>
<td  bgcolor=\"#7DB818\" align=\"center\" >

<input type=\"submit\" name=\"changeBillingCity\" value=\"Change\" style=\"background:none; border:hidden; color:#ffffff; \" />

</td>
</tr>

<tr>
<td  align=\"center\">Billing State</td>
<td  bgcolor=\"#7DB818\" align=\"center\" >";
echo $row["BillingState"];
echo "</td>
<td  bgcolor=\"#7DB818\" align=\"center\" >
<input type=\"submit\" name=\"changeBillingState\" value=\"Change\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td  align=\"center\">Billing Zip</td>
<td  bgcolor=\"#7DB818\" align=\"center\" >";
echo $row["BillingZip"];
echo "</td>
<td  bgcolor=\"#7DB818\" align=\"center\" >

<input type=\"submit\" name=\"changeBillingZip\" value=\"Change\" style=\"background:none; border:hidden; color:#ffffff; \" />

</td>
</tr>

<tr>
<td  align=\"center\">Shipping Address</td>
<td  bgcolor=\"#7DB818\" align=\"center\" >";
echo $row["ShippingAddress"];
echo "</td>
<td  bgcolor=\"#7DB818\" align=\"center\" >

<input type=\"submit\" name=\"changeShippingAddress\" value=\"Change\" style=\"background:none; border:hidden; color:#ffffff; \" />

</td>
</tr>

<tr>
<td  align=\"center\">Shipping City</td>
<td  bgcolor=\"#7DB818\" align=\"center\" >";
echo $row["ShippingCity"];
echo "</td>
<td  bgcolor=\"#7DB818\" align=\"center\" >

<input type=\"submit\" name=\"changeShippingCity\" value=\"Change\" style=\"background:none; border:hidden; color:#ffffff; \" />

</td>
</tr>

<tr>
<td  align=\"center\">ShippingState</td>
<td  bgcolor=\"#7DB818\" align=\"center\" >";
echo $row["ShippingState"];
echo "</td>
<td  bgcolor=\"#7DB818\" align=\"center\" >

<input type=\"submit\" name=\"changeShippingState\" value=\"Change\" style=\"background:none; border:hidden; color:#ffffff; \" />

</td>
</tr>

<tr>
<td  align=\"center\">Shipping Zip</td>
<td  bgcolor=\"#7DB818\" align=\"center\" >";
echo $row["ShippingZip"];
echo "</td>
<td  bgcolor=\"#7DB818\" align=\"center\" >

<input type=\"submit\" name=\"changeShippingZip\" value=\"Change\" style=\"background:none; border:hidden; color:#ffffff; \" />

</td>
</tr>
  </center>  </table> </form> <br><br>  ";

		
		if(isset($_POST["changefirstname"])){
	 echo "<script > 
	  var ff = prompt(\"Please enter your name\", \"\")
	  if(ff !=null ){
 window.location.href = \"updateprofile.php?name=\" +ff +\"&option=firstname\"; 
	  }
	  </script>";
}
	if(isset($_POST["changelastname"])){
	 echo "<script > 
	  var ff = prompt(\"Please enter your name\", \"\")
	  if(ff !=null ){
 window.location.href = \"updateprofile.php?name=\" +ff +\"&option=lastname\"; 
	  }
	  </script>";
}


if(isset($_POST["changepassword"])){
	 echo "<script > 
	  var ff = prompt(\"Please enter your password\", \"\")
	  if(ff !=null ){
 window.location.href = \"updateprofile.php?name=\" +ff +\"&option=password\"; 
	  }
	  </script>";
}

if(isset($_POST["changemobile"])){
	 echo "<script > 
	  var ff = prompt(\"Please enter your Phone\", \"\")
	  if(ff !=null ){
 window.location.href = \"updateprofile.php?name=\" +ff +\"&option=Phone\"; 
	  }
	  </script>";
}

if(isset($_POST["changeplace"])){
	 echo "<script > 
	  var ff = prompt(\"Please enter your place\", \"\")
	  if(ff !=null ){
 window.location.href = \"updateprofile.php?name=\" +ff +\"&option=place\"; 
	  }
	  </script>";
}

if(isset($_POST["changeBillingAddress"])){
	 echo "<script > 
	  var ff = prompt(\"Please enter your Billing Address\", \"\")
	  if(ff !=null ){
 window.location.href = \"updateprofile.php?name=\" +ff +\"&option=BillingAddress\"; 
	  }
	  </script>";
}

if(isset($_POST["changeBillingCity"])){
	 echo "<script > 
	  var ff = prompt(\"Please enter your Billing City\", \"\")
	  if(ff !=null ){
 window.location.href = \"updateprofile.php?name=\" +ff +\"&option=BillingCity\"; 
	  }
	  </script>";
}

if(isset($_POST["changeBillingState"])){
	 echo "<script > 
	  var ff = prompt(\"Please enter your Billing State\", \"\")
	  if(ff !=null ){
 window.location.href = \"updateprofile.php?name=\" +ff +\"&option=BillingState\"; 
	  }
	  </script>";
}

if(isset($_POST["changeBillingZip"])){
	 echo "<script > 
	  var ff = prompt(\"Please enter your Billing Zip\", \"\")
	  if(ff !=null ){
 window.location.href = \"updateprofile.php?name=\" +ff +\"&option=BillingZip\"; 
	  }
	  </script>";
}

if(isset($_POST["changeShippingAddress"])){
	 echo "<script > 
	  var ff = prompt(\"Please enter your Shipping Address\", \"\")
	  if(ff !=null ){
 window.location.href = \"updateprofile.php?name=\" +ff +\"&option=ShippingAddress\"; 
	  }
	  </script>";
}

if(isset($_POST["changeShippingCity"])){
	 echo "<script > 
	  var ff = prompt(\"Please enter your Shipping City\", \"\")
	  if(ff !=null ){
 window.location.href = \"updateprofile.php?name=\" +ff +\"&option=ShippingCity\"; 
	  }
	  </script>";
}

if(isset($_POST["changeShippingState"])){
	 echo "<script > 
	  var ff = prompt(\"Please enter your Shipping State\", \"\")
	  if(ff !=null ){
 window.location.href = \"updateprofile.php?name=\" +ff +\"&option=ShippingState\"; 
	  }
	  </script>";
}

if(isset($_POST["changeShippingZip"])){
	 echo "<script > 
	  var ff = prompt(\"Please enter your Shipping Zip\", \"\")
	  if(ff !=null ){
 window.location.href = \"updateprofile.php?name=\" +ff +\"&option=ShippingZip\"; 
	  }
	  </script>";
}
	
	
?>
  </div>
</center>
</body>
</html>
