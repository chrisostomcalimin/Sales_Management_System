
```php

<?php

include 'db.php';

$description = $_POST['description'];

$amount = $_POST['amount'];

$expense_date = $_POST['expense_date'];


// Validate date format
if (!strtotime($expense_date)) {
    die("Invalid date format. Please use YYYY-MM-DD format.");
}

$sql = "INSERT INTO expenses(description, amount, expense_date)
VALUES('$description', '$amount', '$expense_date')";


mysqli_query($conn, $sql);


header("Location: index.xhtml");

?>
```
