<?php
  function selectTeams() 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_id, city, team_name, year_established FROM team T JOIN location L ON T.location_id=L.location_id");
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

  function insertTeam($location_id, $league_id, $tName, $yearEst) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `hw3_schema`.`team` (`team_id`, `location_id`, `league_id`, `team_name`, `year_established`) VALUES (NULL, ?, ?, ?, ?)");
        $stmt->bind_param("iisi", $location_id, $league_id, $tName, $yearEst);
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

  function updateTeam($location_id, $league_id, $tName, $yearEst, $team_id) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `hw3_schema`.`team` SET `location_id` = ?, `league_id` = ?, `team_name` = ?, `year_established` = ? WHERE `team_id` = ?");
        $stmt->bind_param("iisii", $location_id, $league_id, $tName, $yearEst, $team_id);
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

  function deleteTeam($team_id) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `hw3_schema`.`team` WHERE 'team_id' = ?");
        $stmt->bind_param("i", $team_id);
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
