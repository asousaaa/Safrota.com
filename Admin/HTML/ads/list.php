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
           
           <a href="list.php" >View Products</a>
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
	 $result = $obj->viewmyads();
	 
	 
	 

$flage = false;
while($row = mysqli_fetch_array($result))
{
$flage =true;
$id =  $row["ProductID"];
if($row["Category"] == "Book"){

echo "<form id=\"chanfe\" name=\"chanfe\" method=\"get\" action=\"preupdatelist.php\"> <center>"." <table border='1'  bgcolor=\"#7DB818\" width='900px'>

<input type=\"hidden\" name=\"adsid\" value=\"$id\" />
";
echo "
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Item Name</td>
<td  align=\"center\"> ";
echo $row["ItemName"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change name\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Type</td>
<td  align=\"center\" >";
echo $row["Type"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change type\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Category</td>
<td  align=\"center\">";
echo $row["Category"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Delete this ads\" style=\"background-color:#ffffff; border:hidden;  color:#DC042B; \" />
</td>";
echo "
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Description</td>
<td  align=\"center\"> ";
echo $row["ItemDescription"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change description\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Title</td>
<td  align=\"center\" >";
echo $row["Title"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change title\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Author</td>
<td  align=\"center\">";
echo $row["Author"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change author\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>";
echo "
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Publisher</td>
<td  align=\"center\"> ";
echo $row["Publisher"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change publisher\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Price</td>
<td  align=\"center\" >";
echo $row["Price"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change price\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Quantity In Stock</td>
<td  align=\"center\">";
echo $row["QuantityInStock"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change quantity\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>";
echo "</table> </center> </form> <br>";
}



if($row["Category"] == "Labtop"){

	
	 echo "<form id=\"chanfe\" name=\"chanfe\" method=\"get\" action=\"preupdatelist.php\"> <center>"." <table border='1'  bgcolor=\"#7DB818\" width='900px'>

<input type=\"hidden\" name=\"adsid\" value=\"$id\" />
";
echo "
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Item Name</td>
<td   align=\"center\"> ";
echo $row["ItemName"];
echo "
</td>
<td width=\"150px\" align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change name\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Manfactor</td>
<td  align=\"center\" >";
echo $row["Manfactor"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change Manfactor\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Category</td>
<td  align=\"center\">";
echo $row["Category"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Delete this ads\" style=\"background-color:#ffffff; border:hidden;  color:#DC042B; \" />
</td>";
echo "
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Description</td>
<td  align=\"center\"> ";
echo $row["ItemDescription"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change description\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >CPU</td>
<td  align=\"center\" >";
echo $row["Cpu"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change cpu\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Ram</td>
<td  align=\"center\">";
echo $row["Ram"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change ram\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>";
echo "
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >HDD</td>
<td  align=\"center\"> ";
echo $row["Hdd"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change hdd\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Price</td>
<td  align=\"center\" >";
echo $row["Price"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change price\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Quantity In Stock</td>
<td  align=\"center\">";
echo $row["QuantityInStock"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change quantity\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>";
echo "</table> </center> </form> <br>";
}


if($row["Category"] == "Camera"){

	 echo "<form id=\"chanfe\" name=\"chanfe\" method=\"get\" action=\"preupdatelist.php\"> <center>"." <table border='1'  bgcolor=\"#7DB818\" width='900px'>

<input type=\"hidden\" name=\"adsid\" value=\"$id\" />
";
echo "
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Item Name</td>
<td  align=\"center\"> ";
echo $row["ItemName"];
echo "
</td>
<td  width=\"150px\"  align=\"center\"  >
<input  type=\"submit\" name=\"change\" value=\"Change name\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Type</td>
<td  align=\"center\" >";
echo $row["Type"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change type\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Category</td>
<td  align=\"center\">";
echo $row["Category"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Delete this ads\" style=\"background-color:#ffffff; border:hidden;  color:#DC042B; \" />
</td>";
echo "
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Description</td>
<td  align=\"center\"> ";
echo $row["ItemDescription"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change description\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Pixels</td>
<td  align=\"center\" >";
echo $row["Pixels"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change pixels\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Zoom</td>
<td  align=\"center\">";
echo $row["Zoom"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change zoom\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>";
echo "
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Battary</td>
<td  align=\"center\"> ";
echo $row["Battary"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change battary\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Price</td>
<td  align=\"center\" >";
echo $row["Price"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change price\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Quantity In Stock</td>
<td  align=\"center\">";
echo $row["QuantityInStock"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change quantity\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>";
echo "</table> </center> </form> <br>";
}




if($row["Category"] == "Mobile"){

	 echo "<form id=\"chanfe\" name=\"chanfe\" method=\"get\" action=\"preupdatelist.php\"> <center>"." <table border='1'  bgcolor=\"#7DB818\" width='900px'>

<input type=\"hidden\" name=\"adsid\" value=\"$id\" />
";
echo "
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Item Name</td>
<td  align=\"center\"> ";
echo $row["ItemName"];
echo "
</td>
<td  width=\"150px\" align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change name\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Manfactor</td>
<td  align=\"center\" >";
echo $row["Manfactor"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change Manfactor\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Category</td>
<td  align=\"center\">";
echo $row["Category"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Delete this ads\" style=\"background-color:#ffffff; border:hidden;  color:#DC042B; \" />
</td>";
echo "
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Description</td>
<td  align=\"center\"> ";
echo $row["ItemDescription"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change description\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >CPU</td>
<td  align=\"center\" >";
echo $row["Cpu"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change cpu\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Ram</td>
<td  align=\"center\">";
echo $row["Ram"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change ram\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>";
echo "
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Screen</td>
<td  align=\"center\"> ";
echo $row["Screen"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change screen\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Price</td>
<td  align=\"center\" >";
echo $row["Price"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change price\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>
<tr>
<td width=\"150px\" align=\"center\" bgcolor=\"#BCC820\" >Quantity In Stock</td>
<td  align=\"center\">";
echo $row["QuantityInStock"];
echo "
</td>
<td  align=\"center\"  >
<input type=\"submit\" name=\"change\" value=\"Change quantity\" style=\"background:none; border:hidden; color:#ffffff; \" />
</td>
</tr>";
echo "</table> </center> </form> <br>";
}

}

	
	 
	 
	 if($result==false){
	  echo "no ads found.";
	  }
	
	
?>
  </div>
</center>
</body>
</html>
