<?php
$connenction_link=mysql_connect("127.0.0.1","root","","ecommerce_db");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}
mysql_select_db("ecommerce_db");

$select_query= "SELECT *FROM `Product` WHERE Category ='$selectoption' ";
$result=mysqli_query($connenction_link,$select_query)or die($select_query."<br/><br/>".mysql_error());
$flage = false;

 echo "<center>"." <table border='1'  bgcolor=\"#7DB818\" width='900px'>
<tr>
<th  bgcolor=\"#BCC820\" >Name</th>
<th  bgcolor=\"#BCC820\" >Price</th>
<th  bgcolor=\"#BCC820\" >Category</th>
<th  bgcolor=\"#BCC820\" >Action</th>
<th  bgcolor=\"#BCC820\" >Shopping Cart</th>
</tr>
";
while($row = mysqli_fetch_array($result))
{
$flage =true;
	
	
echo "
<tr>
<td  align=\"center\"> ";
echo $row["ItemName"];
echo "
</td>
<td  align=\"center\" >";
echo $row["Price"];
echo "
</td>
<td  align=\"center\">";
echo $row["Category"];
echo "
</td>";
$s = $row["ProductID"];
echo"
<td  align=\"center\" >
<form name=\"$s\" action=\"listproduct.php\" method=\"get\" >
<input type=\"hidden\" name=\"ProductID\" value=\"$s\" />
<input type=\"submit\" name=\"view\" value=\"View Details\" style=\"background:none; border:hidden; color:#ffffff; \" />
</form>
</td>";

echo"
<td  align=\"center\" >
<form name=\"$s\" action=\"shoppingcart.php\" method=\"get\" >
<input type=\"hidden\" name=\"ProductID\" value=\"$s\" />
<input type=\"submit\" name=\"view\" value=\"Add to shopping Cart\" style=\"background:none; border:hidden; color:#ffffff; \" />
</form>
</td>

</tr>";
}
echo "</table> </center><br>";

mysqli_close($connenction_link);
return $flage;


