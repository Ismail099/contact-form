<?php

// DB credentials.
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '!MySQLRoot1978.');
define('DB_NAME', 'db_contact');
// Establish database connection.
try {
    $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
} catch (PDOException $e) {
    exit("Error: ".$e->getMessage());
}
