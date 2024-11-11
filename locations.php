<?php
require_once("util-db.php");
require_once("model-locations.php");

$pageTitle = "Locations";
include "view-header.php";
$locations = selectLocations();
include "view-locations.php";
include "view-footer.php";
?>
