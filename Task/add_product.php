<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $buying_price = $_POST['buying_price'];
    $selling_price = $_POST['selling_price'];
    $display = isset($_POST['display']) ? 'Yes' : 'No';
    
    $sql = "INSERT INTO products (name, buying_price, selling_price, displayable) 
            VALUES ('$name', '$buying_price', '$selling_price', '$display')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: display_products.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
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
        input[type="text"] {
            width: 100%;
            padding: 5px;
            margin: 5px 0 15px 0;
            box-sizing: border-box;
        }
        label {
            display: block;
            margin-top: 10px;
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
        <legend>ADD PRODUCT</legend>
        <form method="POST" action="">
            <label>Name</label>
            <input type="text" name="name" required>
            
            <label>Buying Price</label>
            <input type="text" name="buying_price" required>
            
            <label>Selling Price</label>
            <input type="text" name="selling_price" required>
            
            <label>
                <input type="checkbox" name="display"> Display
            </label>
            
            <button type="submit">SAVE</button>
        </form>
    </fieldset>
</body>
</html>
