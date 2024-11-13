<?php
require_once("util-db.php");
require_once("model-teams-by-state.php");

$pageTitle = "Teams by State";
include "view-header.php";
$teams = selectTeamsByState($_POST['id']);
include "view-teams-by-state.php";
include "view-footer.php";
?>
