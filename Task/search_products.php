<?php
include 'db_config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Products</title>
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
        input[type="text"] {
            padding: 5px;
            margin-right: 10px;
        }
        button {
            padding: 6px 15px;
            background-color: #f0f0f0;
            border: 1px solid #999;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
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
        <legend>SEARCH</legend>
        <input type="text" id="searchInput" placeholder="Search...">
        <button onclick="searchProducts()">Search By Name</button>
        
        <div id="results"></div>
    </fieldset>

    <script>
        function searchProducts() {
            var searchTerm = document.getElementById('searchInput').value;
            
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('results').innerHTML = this.responseText;
                }
            };
            xhr.open("GET", "search_ajax.php?search=" + searchTerm, true);
            xhr.send();
        }
    </script>
</body>
</html>
