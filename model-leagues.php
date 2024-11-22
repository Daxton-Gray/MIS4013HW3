<?php
  function selectLeagues() 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM league");
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

function insertLeague($league_name, $league_abbreviation, $sport) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `hw3_schema`.`league` (`league_id`, `league_name`, `league_abbreviation`, `sport`) VALUES (NULL, ?, ?, ?)");
        $stmt->bind_param("sss", $league_name, $league_abbreviation, $sport);
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

function updateLeague($league_name, $league_abbreviation, $sport, $lgid) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `hw3_schema`.`league` SET league_name = ?, league_abbreviation = ?, sport = ? WHERE league_id = ?");
        $stmt->bind_param("sssi", $league_name, $league_abbreviation, $sport, $lgid);
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

function deleteLeague($lgid) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `hw3_schema`.`league` WHERE league_id = ?");
        $stmt->bind_param("i", $lgid);
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
