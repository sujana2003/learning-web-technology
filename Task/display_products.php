<?php
include 'db_config.php';

$sql = "SELECT id, name, buying_price, selling_price FROM products WHERE displayable = 'Yes'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        fieldset {
            max-width: 500px;
            border: 2px solid #333;
            padding: 20px;
        }
        legend {
            font-weight: bold;
            font-size: 16px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #000;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
        }
        a {
            color: blue;
            margin-right: 10px;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>DISPLAY</legend>
        <table>
            <tr>
                <th>NAME</th>
                <th>PROFIT</th>
                <th></th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $profit = $row['selling_price'] - $row['buying_price'];
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $profit . "</td>";
                    echo "<td><a href='edit_product.php?id=" . $row['id'] . "'>edit</a> ";
                    echo "<a href='delete_product.php?id=" . $row['id'] . "'>delete</a></td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </fieldset>
</body>
</html>
<?php
include 'db_config.php';

$sql = "SELECT id, name, buying_price, selling_price FROM products WHERE displayable = 'Yes'";
$result = $conn->query($sql);
?>