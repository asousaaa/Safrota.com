<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<link type="text/css" rel="stylesheet" href="../../CSS/search.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Safrota.com | profile </title>
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
      <select onchange="location = this.options[this.selectedIndex].value;"  style="background-color:#2AAFCB; border:hidden; font-size:24px; font-family:fantasy; color:#33817f; ">
        <option value="">Create ads</option>
        <option value="labtopads.php">labtop</option>
    <option value="camads.php">camera</option>
    <option value="bookads.php">book</option>
     <option value="mobileads.php">mobile</option>
      </select>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="spinning.php">&nbsp;&nbsp;&nbsp;&nbsp;Shipping</a> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           
           <a href="list.php" >View Accounts</a>
            &nbsp;&nbsp;&nbsp;
            <a href="accounts.php">&nbsp;&nbsp;&nbsp;&nbsp;Customer </a> 
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
	require_once("../../Controler.php");
	 $obj = new Controler;
	 $result = $obj->viewcustomer();
	 
	 
	 

$flage = false;
while($row = mysqli_fetch_array($result))
{
$flage =true;
$id =  $row["CustomerID"];

	
	 echo "<form id=\"chanfe\" name=\"chanfe\" method=\"get\" action=\"preupdatecustomer.php\"> <center>"." <table border='1'  bgcolor=\"#7DB818\" width='900px'>

<input type=\"hidden\" name=\"custid\" value=\"$id\" />
";
echo "
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >First Name</td>
<td  align=\"center\"> ";
echo $row["FirstName"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change First Name\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Last Name</td>
<td  align=\"center\" >";
echo $row["LastName"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change Last Name\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Billing Address</td>
<td  align=\"center\">";
echo $row["BillingAddress"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change Billing Address\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>";
echo "
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Billing City</td>
<td  align=\"center\"> ";
echo $row["BillingCity"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change Billing City\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Billing State</td>
<td  align=\"center\" >";
echo $row["BillingState"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change Billing State\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Billing Zip</td>
<td  align=\"center\">";
echo $row["BillingZip"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change Billing Zip\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>";
echo "
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Shipping Address</td>
<td  align=\"center\"> ";
echo $row["ShippingAddress"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change Shipping Address\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Shipping City</td>
<td  align=\"center\" >";
echo $row["ShippingCity"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change Shipping City\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Shipping State</td>
<td  align=\"center\">";
echo $row["ShippingState"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change Shipping State\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>";
echo "
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Shipping Zip</td>
<td  align=\"center\" >";
echo $row["ShippingZip"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change Shipping Zip\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Phone</td>
<td  align=\"center\">";
echo $row["Phone"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change Phone\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>";
echo "
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Password</td>
<td  align=\"center\" >";
echo $row["Password"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change Password\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>";
echo "
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Email</td>
<td  align=\"center\" >";
echo $row["Email"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Delete this ads\" style=\"background-color:#ffffff; border:hidden;  color:#DC042B; \" />
</td>
</tr>";
echo "</table> </center> </form> <br>";


}

	
	 
	 
	 if($result==false){
	  echo "no customer found.";
	  }
	
	
?>
  </div>
</center>
</body>
</html>
