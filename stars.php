<?php
require_once("util-db.php");
require_once("model-stars.php");

$pageTitle = "Stars";
include "view-header.php";
$stars = selectStars();
include "view-stars.php";
include "view-footer.php";
?>
