<?php
include 'config.php';

// Connect to MySQL
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Read JSON file from NTFS
$jsonFile = '/mnt/ntfs-share/data.json';
$jsonData = json_decode(file_get_contents($jsonFile), true);

// Display JSON data
echo '<pre>' . print_r($jsonData, true) . '</pre>';

// Close MySQL connection
$mysqli->close();
?>