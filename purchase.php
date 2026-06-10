
```php

<?php
include 'db.php';

$item = $_POST['item_name'];

$quantity = $_POST['quantity'];

$cost = $_POST['cost'];

$purchase_date = $_POST['purchase_date'];

$total = $quantity * $cost;


// Validate date format
if (!strtotime($purchase_date)) {
    die("Invalid date format. Please use YYYY-MM-DD format.");
}

$sql = "INSERT INTO purchases(item_name, quantity, cost, total, purchase_date)
VALUES('$item', '$quantity', '$cost', '$total', '$purchase_date')";


mysqli_query($conn, $sql);


header("Location: index.xhtml");

?>
```
