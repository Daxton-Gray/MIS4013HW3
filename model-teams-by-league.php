<?php
  function selectTeamsByLeague($lid) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_id, league_abbreviation, city, team_name, year_established FROM team T JOIN location LC ON T.location_id=LC.location_id JOIN league LG ON T.league_id=LG.league_id WHERE T.league_id=?");
        $stmt->bind_param("i", $lid);
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
