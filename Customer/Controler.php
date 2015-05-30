<?php

error_reporting(0);


if (0 > version_compare(PHP_VERSION, '4')) {
    die('This file was generated for PHP 4');
}



 
class Controler
{
    

  
   
    
     
    function search($send)
    {
        		
$connenction_link=mysqli_connect("127.0.0.1","root","","it");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

mysqli_select_db($connenction_link,"it");

$result=mysqli_query($connenction_link,$send)or die($select_query."<br/><br/>".mysql_error());

$flage = false;
while($row = mysqli_fetch_array($result))
{
$flage =true;
if($row["Category"] == "Book"){	
echo "<center>"." <table border='1'  bgcolor=\"#7DB818\" width='900px'>
<tr>
<th  bgcolor=\"#BCC820\" >Item Name</th>
<th  bgcolor=\"#BCC820\" >Category</th>
<th  bgcolor=\"#BCC820\" >Type</th>
<th  bgcolor=\"#BCC820\" >Description</th>
<th  bgcolor=\"#BCC820\" >Title</th>
<th  bgcolor=\"#BCC820\" >Author</th>
<th  bgcolor=\"#BCC820\" >Publisher</th>
<th  bgcolor=\"#BCC820\" >Price</th>
<th  bgcolor=\"#BCC820\" >Quantity In Stock</th>
</tr>
";
echo "
<tr>
<td  align=\"center\"> ";
echo $row["ItemName"];
echo "
</td>
<td  align=\"center\" >";
echo $row["Category"];
echo "
</td>
<td  align=\"center\">";
echo $row["Type"];
echo "
</td>";
echo "
<td  align=\"center\"> ";
echo $row["ItemDescription"];
echo "
</td>
<td  align=\"center\" >";
echo $row["Title"];
echo "
</td>
<td  align=\"center\">";
echo $row["Author"];
echo "
</td>";
echo "
<td  align=\"center\"> ";
echo $row["Publisher"];
echo "
</td>
<td  align=\"center\" >";
echo $row["Price"];
echo "
</td>
<td  align=\"center\">";
echo $row["QuantityInStock"];
echo "
</td>
</tr>";
echo "</table> </center><br>";
}



if($row["Category"] == "Camera"){

	 echo "<center>"." <table border='1'  bgcolor=\"#7DB818\" width='900px'>
<tr>
<th  bgcolor=\"#BCC820\" >Item Name</th>
<th  bgcolor=\"#BCC820\" >Category</th>
<th  bgcolor=\"#BCC820\" >Type</th>
<th  bgcolor=\"#BCC820\" >Description</th>
<th  bgcolor=\"#BCC820\" >Pixels</th>
<th  bgcolor=\"#BCC820\" >Zoom</th>
<th  bgcolor=\"#BCC820\" >Battary</th>
<th  bgcolor=\"#BCC820\" >Price</th>
<th  bgcolor=\"#BCC820\" >Quantity In Stock</th>
</tr>
";
echo "
<tr>
<td  align=\"center\"> ";
echo $row["ItemName"];
echo "
</td>
<td  align=\"center\" >";
echo $row["Category"];
echo "
</td>
<td  align=\"center\">";
echo $row["Type"];
echo "
</td>";
echo "
<td  align=\"center\"> ";
echo $row["ItemDescription"];
echo "
</td>
<td  align=\"center\" >";
echo $row["Pixels"];
echo "
</td>
<td  align=\"center\">";
echo $row["Zoom"];
echo "
</td>";
echo "
<td  align=\"center\"> ";
echo $row["Battary"];
echo "
</td>
<td  align=\"center\" >";
echo $row["Price"];
echo "
</td>
<td  align=\"center\">";
echo $row["QuantityInStock"];
echo "
</td>
</tr>";
echo "</table> </center><br>";
}




if($row["Category"] == "Labtop"){

	
	 echo "<center>"." <table border='1'  bgcolor=\"#7DB818\" width='900px'>
<tr>
<th  bgcolor=\"#BCC820\" >Item Name</th>
<th  bgcolor=\"#BCC820\" >Category</th>
<th  bgcolor=\"#BCC820\" >Manfactor</th>
<th  bgcolor=\"#BCC820\" >Description</th>
<th  bgcolor=\"#BCC820\" >Cpu</th>
<th  bgcolor=\"#BCC820\" >Ram</th>
<th  bgcolor=\"#BCC820\" >Hdd</th>
<th  bgcolor=\"#BCC820\" >Price</th>
<th  bgcolor=\"#BCC820\" >Quantity In Stock</th>
</tr>
";
echo "
<tr>
<td  align=\"center\"> ";
echo $row["ItemName"];
echo "
</td>
<td  align=\"center\" >";
echo $row["Category"];
echo "
</td>
<td  align=\"center\">";
echo $row["Manfactor"];
echo "
</td>";
echo "
<td  align=\"center\"> ";
echo $row["ItemDescription"];
echo "
</td>
<td  align=\"center\" >";
echo $row["Cpu"];
echo "
</td>
<td  align=\"center\">";
echo $row["Ram"];
echo "
</td>";
echo "
<td  align=\"center\"> ";
echo $row["Hdd"];
echo "
</td>
<td  align=\"center\" >";
echo $row["Price"];
echo "
</td>
<td  align=\"center\" >";
echo $row["QuantityInStock"];
echo "
</td>";
echo "</table> </center><br>";
}

if($row["Category"] == "Mobile"){

	
	 echo "<center>"." <table border='1'  bgcolor=\"#7DB818\" width='900px'>
<tr>
<th  bgcolor=\"#BCC820\" >Item Name</th>
<th  bgcolor=\"#BCC820\" >Category</th>
<th  bgcolor=\"#BCC820\" >Manfactor</th>
<th  bgcolor=\"#BCC820\" >Description</th>
<th  bgcolor=\"#BCC820\" >Cpu</th>
<th  bgcolor=\"#BCC820\" >Ram</th>
<th  bgcolor=\"#BCC820\" >Screen</th>
<th  bgcolor=\"#BCC820\" >Price</th>
<th  bgcolor=\"#BCC820\" >Quantity In Stock</th>
</tr>
";
echo "
<tr>
<td  align=\"center\"> ";
echo $row["ItemName"];
echo "
</td>
<td  align=\"center\" >";
echo $row["Category"];
echo "
</td>
<td  align=\"center\">";
echo $row["Manfactor"];
echo "
</td>";
echo "
<td  align=\"center\"> ";
echo $row["ItemDescription"];
echo "
</td>
<td  align=\"center\" >";
echo $row["Cpu"];
echo "
</td>
<td  align=\"center\">";
echo $row["Ram"];
echo "
</td>";
echo "
<td  align=\"center\"> ";
echo $row["Screen"];
echo "
</td>
<td  align=\"center\" >";
echo $row["Price"];
echo "
</td>
<td  align=\"center\" >";
echo $row["QuantityInStock"];
echo "
</td>";
echo "</table> </center><br>";
}



}


mysqli_close($connenction_link);
return $flage;
		
		
		
    }

        






    
    function updateInfo ()
    {
        
		$connenction_link=mysqli_connect("127.0.0.1","root","","it");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

// Select Database
mysqli_select_db($connenction_link,"it");


$myfile = fopen("../../user.txt", "r") or die("Unable to open file!");
$userid=fgets($myfile);
fclose($myfile);

$select_query= " SELECT * FROM `customer` WHERE CustomerID = '$userid'  ";
		
	$result=mysqli_query($connenction_link,$select_query)or die($select_query."<br/><br/>".mysql_error());

// view result
return $result;



    }

    
    function viewmyads()
    {
     
	 $connenction_link=mysqli_connect("127.0.0.1","root","","it");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

// Select Database
mysqli_select_db($connenction_link,"it");



$myfile = fopen("../../user.txt", "r") or die("Unable to open file!");
$userid=fgets($myfile);
fclose($myfile);

$select_query="SELECT  * FROM `product`,`orderprocessing` WHERE  orderprocessing.ProductID =Product.ProductID and orderprocessing.CustomerID ='$userid'  ";
// catch resulting records
$result=mysqli_query($connenction_link,$select_query)or die($select_query."<br/><br/>".mysql_error());

	 mysqli_close($connenction_link);
	    return $result;
    }

  
     function viewordertrack($transid)
    {
     
	 $connenction_link=mysqli_connect("127.0.0.1","root","","it");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}

// Select Database
mysqli_select_db($connenction_link,"it");

$select_query="SELECT  * FROM `product`,`orderprocessing` WHERE orderprocessing.ProductID =Product.ProductID and  orderprocessing.TransactionID ='$transid'  ";
// catch resulting records
$result=mysqli_query($connenction_link,$select_query)or die($select_query."<br/><br/>".mysql_error());

	 mysqli_close($connenction_link);
	    return $result;
    }

  
  
	
	
	

} 

?>