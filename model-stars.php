<?php
  function selectStars() 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select allstar_id, team_name, f_name, l_name, position, season_with_team, allstar_seasons from allstar A JOIN team T ON A.team_id=T.team_id");
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
