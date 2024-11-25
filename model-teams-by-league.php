<?php
  function selectTeamsByLeague($lgid) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_id, league_abbreviation, city, team_name, year_established, T.location_id, T.league_id FROM team T JOIN location LC ON T.location_id=LC.location_id JOIN league LG ON T.league_id=LG.league_id WHERE T.league_id=?");
        $stmt->bind_param("i", $lgid);
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

function selectLocationsForInputByLeague() 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM location ORDER BY state");
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

  function selectLeaguesForInputByLeague() 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM league ORDER BY league_name");
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

  function insertTeamByLeague($locid, $lgid, $tName, $yearEst) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `hw3_schema`.`team` (`team_id`, `location_id`, `league_id`, `team_name`, `year_established`) VALUES (NULL, ?, ?, ?, ?)");
        $stmt->bind_param("iisi", $locid, $lgid, $tName, $yearEst);
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

  function updateTeamByLeague($locid, $lgid, $tName, $yearEst, $tid) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `hw3_schema`.`team` SET 'location_id' = ?, 'league_id' = ?, 'team_name' = ?, 'year_established' = ? WHERE 'team_id = ?");
        $stmt->bind_param("iisii", $locid, $lgid, $tName, $yearEst, $tid);
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

  function deleteTeamByLeague($tid) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `hw3_schema`.`team` WHERE team_id = ?");
        $stmt->bind_param("i", $tid);
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

?>
