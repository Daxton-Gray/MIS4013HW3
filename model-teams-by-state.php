<?php
  function selectTeamsByState($sid) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_id, team_name, league_abbreviation, city, state, country FROM team T JOIN league LG ON LG.league_id=T.league_id JOIN location LC ON LC.location_id=T.location_id WHERE LC.state=?");
        $stmt->bind_param("s", $sid);
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
?>
