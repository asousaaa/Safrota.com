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
      <a href="checkout.php" >Checkout</a>  
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="">&nbsp;&nbsp;&nbsp;&nbsp;Inbox </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="search.php">&nbsp;&nbsp;&nbsp;&nbsp;Search </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="order.php" >Order Tracking</a>  
      &nbsp;&nbsp;&nbsp; <a href="profile.php">&nbsp;&nbsp;&nbsp;&nbsp;Profile </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a onClick=" window.close()" href="../../../welcome.php" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;		Log out </a> </font> </div>
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
	 $result = $obj->viewmyads();
	 
	 
	 

$flage = false;
while($row = mysqli_fetch_array($result))
{

if($row["Processed"]!=1){

	$flage=true;
	$s = $row["TransactionID"];
	 echo "<form id=\"chanfe\" name=\"chanfe\" method=\"get\" action=\"preupdate.php\"> <center>"." <table border='1'  bgcolor=\"#7DB818\" width='900px'>
	 <tr>
	 <th width=\"100px\" align=\"center\" bgcolor=\"#BCC820\" >Product ID</th>
	 <th width=\"100px\" align=\"center\" bgcolor=\"#BCC820\" >Item Name</th>
	 <th width=\"200px\" align=\"center\" bgcolor=\"#BCC820\" >ItemDescription</th>
	 <th width=\"100px\" align=\"center\" bgcolor=\"#BCC820\" >Category</th>
	 <th width=\"70px\" align=\"center\" bgcolor=\"#BCC820\" >Price</th>
	 <th width=\"50px\" align=\"center\" bgcolor=\"#BCC820\" >Quantity</th>
	 <th width=\"70px\" align=\"center\" bgcolor=\"#BCC820\" >Action</th>
	
	 </tr>
<input type=\"hidden\" name=\"transid\" value=\"$s\" />
";
echo "
<tr>

<td  width=\"100px\" align=\"center\"> ";
echo $row["ProductID"];
echo "
</td>

<td width=\"100px\" align=\"center\" >";
echo $row["ItemName"];
echo "
</td>

<td width=\"200px\"  align=\"center\">";
echo $row["ItemDescription"];
echo "
</td>";
echo "

<td width=\"100px\"  align=\"center\"> ";
echo $row["Category"];
echo "
</td>

<td width=\"70px\" align=\"center\" >";
echo $row["Price"];
echo "
</td>

<td  width=\"50px\" align=\"center\">";
echo $row["Quantity"];
echo "
</td>";
echo " 
<td  width=\"70px\" align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"purchase\" style=\"background-color:#BCC820; border:hidden; font-size:16px; color:#DC042B; \" />
</td>
</tr>
";

echo "</table> </center> </form> <br>";
}
}
	 
	 
	 if($flage==false){
	  echo "no checkout found.";
	  }
	
	
?>
  </div>
</center>
</body>
</html>
