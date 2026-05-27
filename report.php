```php

<?php

include 'db.php';


$salesQuery = mysqli_query($conn, "SELECT SUM(total) AS totalSales FROM sales");

$salesData = mysqli_fetch_assoc($salesQuery);

$totalSales = $salesData['totalSales'];


$purchaseQuery = mysqli_query($conn, "SELECT SUM(total) AS totalPurchases FROM purchases");

$purchaseData = mysqli_fetch_assoc($purchaseQuery);

$totalPurchases = $purchaseData['totalPurchases'];


$expenseQuery = mysqli_query($conn, "SELECT SUM(amount) AS totalExpenses FROM expenses");

$expenseData = mysqli_fetch_assoc($expenseQuery);

$totalExpenses = $expenseData['totalExpenses'];


$profit = $totalSales - ($totalPurchases + $totalExpenses);


?>

<!DOCTYPE html>

<html>

<head>
    
<title>
Profit and Loss Report
</title>

</head>

<body>


<h1>Profit and Loss Report</h1>


<p>
Total Sales: 
<?php 
echo $totalSales; 
?>
</p>

<p>Total Purchases: 
<?php echo $totalPurchases; 
?>
</p>

<p>Total Expenses: 
<?php echo $totalExpenses; 
?>
</p>

<p>
Net Profit/Loss: 
<?php echo $profit; 
?>
</p>

<
/body>

</html>
```