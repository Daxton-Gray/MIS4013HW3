<?php

function selectTeams() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Select team_id, location_id, league_id, team_name From team");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

>
