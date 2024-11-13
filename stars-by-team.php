<?php
require_once("util-db.php");
require_once("model-stars-by-team.php");

$pageTitle = "All-Stars by Team";
include "view-header.php";
$stars = selectStarsByTeam($_GET['id']);
include "view-stars-by-team.php";
include "view-footer.php";
?>
