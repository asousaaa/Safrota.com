<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<link type="text/css" rel="stylesheet" href="../../CSS/search.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Goods.com | profile</title>
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
    <form name="trans" method="post" >
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font face="fantasy" color="#33817f" size="5" > Transaction ID </font>   &nbsp;&nbsp;
      <input type="text" name="transid" style="background-color:#BCC820; border-color:#33817f; border:double; font-size:24px; color:#191A1A; width:650px; " />
      &nbsp;&nbsp;&nbsp;&nbsp;
      <input type="submit" name="gettrans" value="Find"  style="background-color:transparent; border:hidden; font-size:26px; font-family:fantasy; color:#33817f; " />
      <br>
      <br>
      <br>
    </form>
    <?php
	
	
	
	if(isset($_POST["gettrans"])){
	
	require_once("../../Controler.php");
	 $obj = new Controler;
	 $result = $obj->viewordertrack($_POST["transid"]); 

$flage = false;
while($row = mysqli_fetch_array($result))
{
	$flage=true;
	$s = $row["TransactionID"];
	 echo "<form id=\"chanfe\" name=\"chanfe\" method=\"get\" action=\"preupdateorder.php\"> <center>"." <table border='1'  bgcolor=\"#7DB818\" width='900px'>
<input type=\"hidden\" name=\"transid\" value=\"$s\" />
";
echo "
<tr>
<td width=\"300px\" align=\"center\" bgcolor=\"#BCC820\" >Product ID</td>
<td  align=\"center\"> ";
echo $row["ProductID"];
echo "
</td>
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >Item Name</td>
<td  align=\"center\" >";
echo $row["ItemName"];
echo "
</td>
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >Shipping company</td>
<td  align=\"center\">";
echo $row["orderprocessing.Shippingcompany"];
echo "
</td>";
echo "
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >Quantity</td>
<td  align=\"center\"> ";
echo $row["Quantity"];
echo "
</td>
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >Time</td>
<td  align=\"center\" >";
echo $row["Time"];
echo "
</td>
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >Processed</td>
<td  align=\"center\">";
echo $row["Processed"];
echo "
</td>";
echo "
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >Shipped</td>
<td  align=\"center\"> ";
echo $row["Shipped"];
echo "
</td>
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >Date Shipped</td>
<td  align=\"center\" >";
echo $row["DateShipped"];
echo "
</td>
</tr>
<tr>
<td align=\"center\" bgcolor=\"#BCC820\" >Tracking Number</td>
<td  align=\"center\">";
echo $row["TrackingNumber"];
echo "
</td>
</tr>";
echo "</table> </center> </form> <br>";
}
	
	 
	 
	 if($flage==false){
	  echo "no checked found.";
	  }
	
	}
?>
  </div>
</center>
</body>
</html>
