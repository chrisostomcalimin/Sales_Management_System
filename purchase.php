
```php

<?php
include 'db.php';

$item = $_POST['item_name'];

$quantity = $_POST['quantity'];

$cost = $_POST['cost'];

$total = $quantity * $cost;


$sql = "INSERT INTO purchases(item_name, quantity, cost, total)
VALUES('$item', '$quantity', '$cost', '$total')";


mysqli_query($conn, $sql);


header("Location: index.xhtml");

?>
```
