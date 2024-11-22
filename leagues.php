<?php
require_once("util-db.php");
require_once("model-leagues.php");

$pageTitle = "Leagues";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertLeague($_POST['league_name'], $_POST['league_abbreviation'], $_POST['sport'])) {
        echo '<div class="alert alert-success" role="alert">League Added</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateLocation($_POST['league_name'], $_POST['league_abbreviation'], $_POST['sport'], $_POST['lgid'])) {
        echo '<div class="alert alert-success" role="alert">League Edited</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteLocation($_POST['lgid'])) {
        echo '<div class="alert alert-success" role="alert">League Deleted</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}

$leagues = selectLeagues();
include "view-leagues.php";
include "view-footer.php";
?>
