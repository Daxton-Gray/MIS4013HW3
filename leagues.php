<?php
require_once("util-db.php");
require_once("model-leagues.php");

$pageTitle = "Leagues";
include "view-header.php";
$leagues = selectLeagues();
include "view-leagues.php";
include "view-footer.php";
?>
