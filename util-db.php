<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('dgwebdesignserver.mysql.database.azure.com', 'DGray', 'Connect@1234', 'hw3_schema');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
