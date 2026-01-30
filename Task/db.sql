CREATE DATABASE product_db;
USE product_db;

CREATE TABLE products (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    buying_price DECIMAL(10,2) NOT NULL,
    selling_price DECIMAL(10,2) NOT NULL,
    displayable VARCHAR(3) DEFAULT 'No'
);
