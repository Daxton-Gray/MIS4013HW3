<?php
require_once("util-db.php");
require_once("model-locations-chart-db.php");

$pageTitle = "Locations Chart";
include "view-header.php";

$locations = selectLocations();
include "view-locations-chart.php";
include "view-footer.php";
?>
