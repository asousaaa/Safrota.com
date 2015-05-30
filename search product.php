<?php
$connenction_link=mysqli_connect("127.0.0.1","root","","ecommerce_db");
if(!$connenction_link)
{
echo " Connection Failed".mysql_error();
}
mysqli_select_db($connenction_link,"ecommerce_db");

$select_query= "SELECT * FROM `Product` ";
$result=mysqli_query($connenction_link,$select_query)or die($select_query."<br/><br/>".mysql_error());
while($row = mysqli_fetch_array($result)){
	
	 echo "<center>"." <table border='1'  bgcolor=\"#7DB818\" width='700px'>
<tr>
<th  bgcolor=\"#BCC820\" >Name</th>
<th  bgcolor=\"#BCC820\" >Description</th>
<th  bgcolor=\"#BCC820\" >Quantity</th>
<th  bgcolor=\"#BCC820\" >Price</th>
<th  bgcolor=\"#BCC820\" >Category</th>
<th  bgcolor=\"#BCC820\" >Visibility</th>
<th  bgcolor=\"#BCC820\" >Picture</th>
</tr>
";
echo "
<tr>
<td  align=\"center\"> ";
echo $row["ItemName"];
echo "
</td>
<td  align=\"center\" >";
echo $row["ItemDescription"];
echo "
</td>
<td  align=\"center\">";
echo $row["QuantityInStock"];
echo "
</td>";
echo "
<td  align=\"center\"> ";
echo $row["Price"];
echo "
</td>
<td  align=\"center\" >";
echo $row["Category"];
echo "
</td>
<td  align=\"center\">";
echo $row["Visible"];
echo "
</td>";
echo "
<td  align=\"center\"> ";
echo $row["Picture"];
echo "
</td>
</tr>";
echo "</table> </center><br>";
}
mysqli_close($connenction_link);
?>
