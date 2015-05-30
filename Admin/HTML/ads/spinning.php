	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	$conn = new mysqli($servername, $username, $password,"it");

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully" . "<br>";

	$sql = "SELECT * FROM `orderprocessing` WHERE Shipped = 1 AND Processed = 1";
	$result = $conn->query($sql);
	echo " <table border='2' width='20%'>
	<tr>
	<th> Transaction ID </th>
	<th> Customer ID </th>
	<th> Product ID </th>
	<th> Number </th>
	<th> Quantity </th>
	<th> Time </th>
	<th> Processed </th>
	<th> Shipped </th>
	<th> Date Shipped </th>
	<th> Tracking Number </th>
	<th> Shipping company </th>
	</tr>
	";
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	        echo "
			<tr>
			<td>";
	        echo  $row["TransactionID"];
	        $t = $row["TransactionID"];
	        echo "
			</td>
			<td>";
			echo $row["CustomerID"];
			echo "
			</td>
			<td>";
			echo $row["ProductID"];
			$ID=$row["ProductID"];

	    	$sql4 = "UPDATE `it`.`orderprocessing` SET `Shippingcompany` = 'TNT' WHERE `orderprocessing`.`TransactionID` = $t";
			if ($conn->query($sql4) === TRUE) {
		    	echo "<br>"."Record updated successfully";
			} else {
		    	echo "Error updating record" . $conn->error;
			}
			 
			$sql5 = "UPDATE `it`.`orderprocessing` SET `TrackingNumber` = '12345' WHERE `orderprocessing`.`TransactionID` = $t";
			if ($conn->query($sql5) === TRUE) {
		    echo "Record updated successfully";
			} else {
		    echo "Error updating record: 2" . $conn->error;
			}
			echo "
			</td>
			<td>";   
			echo $row["Number"];
			echo "
			</td>
			<td>";
			echo $row["Quantity"];
			echo "
			</td>
			<td>";
			echo $row["Time"];
			echo "
			</td>
			<td>";
			echo $row["Processed"];
			echo "
			</td>
			<td>";
			echo $row["Shipped"];
			echo "
			</td>
			<td>";
			echo $row["DateShipped"];
			echo "
			</td>
			<td>";
			echo $row["TrackingNumber"];
			echo "
			</td>
			<td>";
			echo $row["Shippingcompany"];
	    }
	    echo "</table> ";
	    echo "<br>";
	} else {
	    echo "0 results" . "<br>";
	}

	$sql1 = "UPDATE `order processing` SET Shipped=1 WHERE Shipped=0";

	if ($conn->query($sql1) === TRUE) {
	    echo "Shipped Flag is set to TRUE" . "<br>";
	} else {
	    echo "Error updating record: " . $conn->error;
	}



	$conn->close();

	?>