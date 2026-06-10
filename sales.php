
```php

<?php

include 'db.php';

$item = $_POST['item_name'];

$quantity = $_POST['quantity'];

$price = $_POST['price'];

$sale_date = $_POST['sale_date'];

$total = $quantity * $price;


// Validate date format
if (!strtotime($sale_date)) {
    die("Invalid date format. Please use YYYY-MM-DD format.");
}

$sql = "INSERT INTO sales(item_name, quantity, price, total, sale_date)
VALUES('$item', '$quantity', '$price', '$total', '$sale_date')";


mysqli_query($conn, $sql);


header("Location: index.xhtml");

?>
```
