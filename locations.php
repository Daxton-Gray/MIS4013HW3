<?php
require_once("util-db.php");
require_once("model-locations.php");

$pageTitle = "Locations";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertLocation($_POST['city'], $_POST['state'], $_POST['country'])) {
        echo '<div class="alert alert-success" role="alert">Location Added</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateLocation($_POST['city'], $_POST['state'], $_POST['country'], $_POST['locid'])) {
        echo '<div class="alert alert-success" role="alert">Location Edited</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteLocation($_POST['locid'])) {
        echo '<div class="alert alert-success" role="alert">Location Deleted</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}

$locations = selectLocations();
include "view-locations.php";
include "view-footer.php";
?>
