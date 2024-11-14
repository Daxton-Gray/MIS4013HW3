<?php
  function selectMVPs() 
  {
    try
      {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select mvp_id, team_name, f_name, l_name, position, seasons_with_team, mvp_seasons from mvp M JOIN team T ON M.team_id=T.team_id");
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
