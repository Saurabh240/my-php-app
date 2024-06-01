<?php
// Database connection details for Amazon RDS
$db_host = 'your-rds-endpoint.rds.amazonaws.com';
$db_user = 'your-rds-username';
$db_password = 'your-rds-password';
$db_name = 'your-database-name';

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



// For Encrypted connection

<!-- <?php
// Encrypted credentials
$encrypted_host = 'encrypted_host';
$encrypted_user = 'encrypted_user';
$encrypted_password = 'encrypted_password';
$encrypted_db_name = 'encrypted_db_name';

// Decrypt function
function decrypt($data) {
    // Add your decryption logic here
    return $data;
}

$db_host = decrypt($encrypted_host);
$db_user = decrypt($encrypted_user);
$db_password = decrypt($encrypted_password);
$db_name = decrypt($encrypted_db_name);
?> -->