<?php
include 'db_config.php';

$search = isset($_GET['search']) ? $_GET['search'] : '';

$sql = "SELECT id, name, buying_price, selling_price FROM products 
        WHERE name LIKE '%$search%' AND displayable = 'Yes'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>NAME</th><th>PROFIT</th><th></th></tr>";
    
    while($row = $result->fetch_assoc()) {
        $profit = $row['selling_price'] - $row['buying_price'];
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $profit . "</td>";
        echo "<td><a href='edit_product.php?id=" . $row['id'] . "'>edit</a> ";
        echo "<a href='delete_product.php?id=" . $row['id'] . "'>delete</a></td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "<p>No results found</p>";
}

$conn->close();
?>
