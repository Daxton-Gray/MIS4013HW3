<?php
function get_db_connection(){
    // Connection details
    $host = 'dgwebdesignserver.mysql.database.azure.com';
    $username = 'DGray';
    $password = 'Connect@1234';
    $database = 'hw3_schema';

    // Create connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>
