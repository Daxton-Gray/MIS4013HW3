<?php

//function selectTeams() {
    //try {
        //$conn = get_db_connection();
        //$stmt = $conn->prepare("Select team_id, location_id, league_id, team_name From team");
        //$stmt->execute();
        //$result = $stmt->get_result();
        //$conn->close();
        //return $result;
    //} catch (Exception $e) {
        //$conn->close();
        //throw $e;
    //}
//}

>


<?php

function selectTeams() {
    $conn = get_db_connection();
    if (!$conn) {
        throw new Exception("Database connection failed.");
    }

    try {
        $stmt = $conn->prepare("SELECT team_id, location_id, league_id, team_name FROM team");
        $stmt->execute();
        $result = $stmt->get_result();

        // Fetch all rows as an associative array
        $teams = $result->fetch_all(MYSQLI_ASSOC);

        $stmt->close();
        $conn->close();
        return $teams;
    } catch (Exception $e) {
        if ($conn) {
            $conn->close();
        }
        error_log("Error in selectTeams: " . $e->getMessage());
        throw $e;
    }
}
