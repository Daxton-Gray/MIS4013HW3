<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('dgwebdesignserver.mysql.database.azure.com', 'DGray', 'Dynodax@11', 'dgdbconnection');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
