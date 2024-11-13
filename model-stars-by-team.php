<?php
  function selectStarsByTeam($tid) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT allstar_id, f_name, l_name, league_abbreviation, team_name, position, season_with_team, allstar_seasons FROM allstar A JOIN team T ON A.team_id=T.team_id JOIN league LG ON LG.league_id=T.league_id JOIN location LC ON LC.location_id=T.location_id WHERE A.team_id=?");
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
?>
