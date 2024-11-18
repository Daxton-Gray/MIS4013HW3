<?php
require_once("util-db.php");
require_once("model-teams-with-mvps.php");

$pageTitle = "Teams with MVPs";
include "view-header.php";
$teams = selectTeams();
include "view-teams-with-mvps.php";
include "view-footer.php";
?>
