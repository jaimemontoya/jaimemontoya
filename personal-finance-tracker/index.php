<!DOCTYPE html>
<html>
	<head>
		<title>Personal Finance Tracker</title>
	</head>
	<body>		
		<?php
		$servername = "localhost";
		$username = "jmontoya";
		$password = "SuperEasy@1";
		$dbname = "finance";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		echo "<h1>Sales</h1>";
		$sql = "SELECT Description, DateKey Date, CityName City, PaymentMethodName 'Payment method', BuyerName Buyer, GROUP_CONCAT(CategoryName SEPARATOR ', ') Category, TotalSales Total FROM (SELECT Description, dd.DateKey, dc.CityName, dpm.PaymentMethodName, db.BuyerName, dca.CategoryName, TotalSales FROM FactSales fs INNER JOIN DimCity dc ON fs.CityID=dc.CityID INNER JOIN DimPaymentMethod dpm ON fs.PaymentMethodID=dpm.PaymentMethodID INNER JOIN DimBuyer db ON fs.BuyerID=db.BuyerID INNER JOIN FactSalesXDimCategory fsxdc ON fs.CityID=fsxdc.CityID AND fs.DayID=fsxdc.DayID AND fs.PaymentMethodID=fsxdc.PaymentMethodID AND fs.BuyerID=fsxdc.BuyerID INNER JOIN DimCategory dca ON fsxdc.CategoryID=dca.CategoryID INNER JOIN DimDay dd ON fs.DayID=dd.DayID) sales GROUP BY Description, DateKey, CityName, PaymentMethodName, BuyerName, TotalSales ORDER BY DateKey DESC;";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			echo "<table><tr><th>Description</th><th>Date</th><th>City</th><th>Payment method</th><th>Buyer</th><th>Category</th><th>Total</th></tr>";			
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["Description"]. "</td><td>" . $row["Date"]. "</td><td>" . $row["City"]. "</td><td>" . $row["Payment method"]. "</td><td>" . $row["Buyer"]. "</td><td>" . $row["Category"]. "</td><td>" . $row["Total"]. "</td></tr>";
			}
			echo "</table>";
		} else {
			echo "0 results";
		}
		echo "<h1>Purchases</h1>";
		$sql = "SELECT Description, DateKey Date, CityName City, PaymentMethodName 'Payment method', SellerName Seller, GROUP_CONCAT(CategoryName SEPARATOR ', ') Category, TotalPurchases Total FROM (SELECT TotalPurchases, Description, dd.DateKey, dc.CityName, dpm.PaymentMethodName, ds.SellerName, dca.CategoryName FROM FactPurchases fp INNER JOIN DimCity dc ON fp.CityID=dc.CityID INNER JOIN DimPaymentMethod dpm ON fp.PaymentMethodID=dpm.PaymentMethodID INNER JOIN DimSeller ds ON fp.SellerID=ds.SellerID INNER JOIN FactPurchasesXDimCategory fpxdc ON fp.CityID=fpxdc.CityID AND fp.DayID=fpxdc.DayID AND fp.PaymentMethodID=fpxdc.PaymentMethodID AND fp.SellerID=fpxdc.SellerID INNER JOIN DimCategory dca ON fpxdc.CategoryID=dca.CategoryID INNER JOIN DimDay dd ON fp.DayID=dd.DayID) purchases GROUP BY TotalPurchases, Description, DateKey, CityName, PaymentMethodName, SellerName ORDER BY DateKey DESC;";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			echo "<table><tr><th>Description</th><th>Date</th><th>City</th><th>Payment method</th><th>Seller</th><th>Category</th><th>Total</th></tr>";			
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["Description"]. "</td><td>" . $row["Date"]. "</td><td>" . $row["City"]. "</td><td>" . $row["Payment method"]. "</td><td>" . $row["Seller"]. "</td><td>" . $row["Category"]. "</td><td>" . $row["Total"]. "</td></tr>";
			}
			echo "</table>";
		} else {
			echo "0 results";
		}
		$conn->close();
		?>
	</body>
</html>