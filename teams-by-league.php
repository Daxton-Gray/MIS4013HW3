<?php
require_once("util-db.php");
require_once("model-teams-by-league.php");

$pageTitle = "Teams by League";
include "view-header.php";
$teams = selectTeamsByLeague($_POST['lid']);
include "view-teams-by-league.php";
include "view-footer.php";
?>
