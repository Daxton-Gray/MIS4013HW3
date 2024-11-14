<?php
require_once("util-db.php");
require_once("model-mvps.php");

$pageTitle = "MVPs";
include "view-header.php";
$mvps = selectMVPs();
include "view-mvps.php";
include "view-footer.php";
?>
