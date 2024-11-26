<?php
  function selectTeams() 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_id, city, team_name, year_established, league_abbreviation FROM team T JOIN location L ON T.location_id=L.location_id JOIN league LG ON LG.league_id=T.league_id");
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

function selectMVPsByTeam($tid) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT mvp_id, f_name, l_name, league_abbreviation, city, team_name, position, seasons_with_team, mvp_seasons, M.team_id FROM mvp M JOIN team T ON M.team_id=T.team_id JOIN league LG ON LG.league_id=T.league_id JOIN location LC ON LC.location_id=T.location_id WHERE M.team_id=?");
        $stmt->bind_param("i", $tid);
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

function selectTeamsForInput() 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT M.team_id, team_name, city, mvp_id FROM team T JOIN location L ON T.location_id=L.location_id JOIN mvp M ON T.team_id=M.team_id ORDER BY team_name");
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

function insertMVP($team_id, $f_name, $l_name, $position, $seasons_with_team, $mvp_seasons) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `hw3_schema`.`mvp` (`mvp_id`, `team_id`, `f_name`, `l_name`, `position`, `seasons_with_team`, `mvp_seasons`) VALUES (NULL, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssii", $team_id, $f_name, $l_name, $position, $seasons_with_team, $mvp_seasons);
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

function updateMVP($team_id, $f_name, $l_name, $position, $seasons_with_team, $mvp_seasons, $mvpid) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `hw3_schema`.`mvp` SET `team_id` = ?, `f_name` = ?, `l_name` = ?, `position` = ?, `seasons_with_team` = ?, `mvp_seasons` = ? WHERE `mvp_id` = ?");
        $stmt->bind_param("isssiii", $team_id, $f_name, $l_name, $position, $seasons_with_team, $mvp_seasons, $mvpid);
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

function deleteMVP($mvpid) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `hw3_schema`.`mvp` WHERE mvp_id = ?");
        $stmt->bind_param("i", $mvpid);
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
