<?php
include 'db_config.php';

$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "DELETE FROM products WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: display_products.php");
        exit();
    }
}

$sql = "SELECT * FROM products WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        fieldset {
            max-width: 400px;
            border: 2px solid #333;
            padding: 20px;
        }
        legend {
            font-weight: bold;
            font-size: 16px;
        }
        p {
            margin: 10px 0;
        }
        button {
            padding: 8px 20px;
            background-color: #f0f0f0;
            border: 1px solid #999;
            cursor: pointer;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>DELETE PRODUCT</legend>
        <p>Name: <?php echo $row['name']; ?></p>
        <p>Buying Price: <?php echo $row['buying_price']; ?></p>
        <p>Selling Price: <?php echo $row['selling_price']; ?></p>
        <p>Displayable: <?php echo $row['displayable']; ?></p>
        
        <form method="POST" action="">
            <button type="submit">Delete</button>
        </form>
    </fieldset>
</body>
</html>
