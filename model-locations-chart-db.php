<?php
function selectLocations() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT state, COUNT(team_id) AS num_teams FROM location L JOIN team T ON L.location_id=T.location_id GROUP BY state");
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
