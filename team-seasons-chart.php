<?php
require_once("util-db.php");
require_once("model-teams-seasons-chart-db.php");

$pageTitle = "Teams Seasons Chart";
include "view-header.php";

$teams = selectTeams();
include "view-teams-seasons-chart.php";
include "view-footer.php";
?>
