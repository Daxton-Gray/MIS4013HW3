<?php
require_once("util-db.php");
require_once("model-mvps-by-team.php");

$pageTitle = "MVPs by Team";
include "view-header.php";
$mvps = selectMVPsByTeam($_GET['id']);
include "view-mvps-by-team.php";
include "view-footer.php";
?>
