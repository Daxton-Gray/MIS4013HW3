<?php
function selectTeams() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_name, SUM(mvp_seasons) AS total_mvps, year_established FROM team T JOIN mvp M ON T.team_id=M.team_id GROUP BY team_name, year_established");
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
