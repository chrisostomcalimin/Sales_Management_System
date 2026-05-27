```php

<?php

include 'db.php';

$description = $_POST['description'];

$amount = $_POST['amount'];


$sql = "INSERT INTO expenses(description, amount)
VALUES('$description', '$amount')";


mysqli_query($conn, $sql);


header("Location: index.xhtml");

?>
```