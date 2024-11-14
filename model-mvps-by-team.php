<?php
  function selectMVPsByTeam($tid) 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT mvp_id, f_name, l_name, league_abbreviation, city, team_name, position, seasons_with_team, mvp_seasons FROM mvp M JOIN team T ON M.team_id=T.team_id JOIN league LG ON LG.league_id=T.league_id JOIN location LC ON LC.location_id=T.location_id WHERE M.team_id=?");
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
