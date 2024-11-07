<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('dgwebdesignserver.mysql.database.azure.com', 'DGray@dgwebdesignserver', 'Connect@1234', 'hw3_schema');
    
    // Check connection
    //if ($conn->connect_error) {
      //return false;
    //}
    //return $conn;

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
echo "Connected successfully";
}
?>
