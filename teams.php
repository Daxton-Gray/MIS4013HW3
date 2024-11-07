<?php

//require_once("util-db.php");
//require_once("model-teams.php");

//$pageTitle = "Teams";
//include "view-header.php";

//$teams = selectTeams();
//include "view-teams.php";

//include "view-footer.php";
?>


<?php

require_once("util-db.php");
require_once("model-teams.php");

$pageTitle = "Teams";
include "view-header.php";

try {
    // Attempt to fetch teams from the database
    $teams = selectTeams();
} catch (Exception $e) {
    // If an error occurs, set teams to null and prepare an error message
    $teams = null;
    $errorMessage = "Error loading teams: " . htmlspecialchars($e->getMessage());
}

include "view-teams.php";

include "view-footer.php";

