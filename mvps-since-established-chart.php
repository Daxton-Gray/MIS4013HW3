<?php
require_once("util-db.php");
require_once("model-mvps-since-established-chart-db.php");

$pageTitle = "MVPS Since Established Chart";
include "view-header.php";

$teams = selectTeams();
include "view-mvps-since-established-chart.php";
include "view-footer.php";
?>
