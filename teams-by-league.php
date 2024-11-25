<?php
require_once("util-db.php");
require_once("model-teams-by-league.php");

$pageTitle = "Teams by League";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertTeamByLeague($_POST['locid'], $_POST['lgid'], $_POST['tName'], $_POST['yearEst'])) {
        echo '<div class="alert alert-success" role="alert">Team Added</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateTeamByLeague($_POST['locid'], $_POST['lgid'], $_POST['tName'], $_POST['yearEst'], $_POST['tid'])) {
        echo '<div class="alert alert-success" role="alert">Team Edited</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteTeamByLeague($_POST['tid'])) {
        echo '<div class="alert alert-success" role="alert">Team Deleted</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}

$teams = selectTeamsByLeague($_POST['lgid']);
include "view-teams-by-league.php";
include "view-footer.php";
?>
