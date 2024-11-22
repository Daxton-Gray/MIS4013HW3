<?php
  function selectLocations() 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM location");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
      } 
    catch (Exception $e) 
      {
        $conn->close();
        throw $e;
      }
  }

function insertLocation($city, $state, $country) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `hw3_schema`.`location` (`location_id`, `city`, `state`, `country`) VALUES (NULL, ?, ?, ?)");
        $stmt->bind_param("sss", $city, $state, $country);
        $success = $stmt->execute();
        $conn->close();
        return $success;
      } 
    catch (Exception $e) 
      {
        $conn->close();
        throw $e;
      }
  }

function updateLocation($city, $state, $country, $locid) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `hw3_schema`.`location` SET city = ?, state = ?, country = ? WHERE location_id = ?");
        $stmt->bind_param("sssi", $city, $state, $country, $locid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
      } 
    catch (Exception $e) 
      {
        $conn->close();
        throw $e;
      }
  }

function deleteLocation($locid) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `hw3_schema`.`location` WHERE location_id = ?");
        $stmt->bind_param("i", $locid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
      } 
    catch (Exception $e) 
      {
        $conn->close();
        throw $e;
      }
  }

?>
