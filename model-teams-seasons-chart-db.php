<?php
function selectTeams() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_name, ROUND(AVG(seasons_with_team),2) AS avg_seasons FROM mvp M JOIN team T ON T.team_id=M.team_id GROUP BY team_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
