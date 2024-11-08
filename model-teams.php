<?php
  function selectTeams() 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_id, team_name, city, league_abbreviation FROM league LG JOIN team T ON LG.league_id=T.league_id JOIN location LC ON LC.location_id=T.location_id");
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
