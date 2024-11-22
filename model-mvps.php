<?php
  function selectMVPs() 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select mvp_id, team_name, f_name, l_name, position, seasons_with_team, mvp_seasons, M.team_id from mvp M JOIN team T ON M.team_id=T.team_id");
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
