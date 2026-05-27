```php

<?php

include 'db.php';

$item = $_POST['item_name'];

$quantity = $_POST['quantity'];

$price = $_POST['price'];

$total = $quantity * $price;


$sql = "INSERT INTO sales(item_name, quantity, price, total)
VALUES('$item', '$quantity', '$price', '$total')";


mysqli_query($conn, $sql);


header("Location: index.xhtml");

?>
```