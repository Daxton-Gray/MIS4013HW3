<?php
require_once("util-db.php");
require_once("model-mvps.php");

$pageTitle = "MVPs";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertMVP($_POST['team_id'], $_POST['f_name'], $_POST['l_name'], $_POST['position'], $_POST['seasons_with_team'], $_POST['mvp_seasons'])) {
        echo '<div class="alert alert-success" role="alert">MVP Added</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateMVP($_POST['team_id'], $_POST['f_name'], $_POST['l_name'], $_POST['position'], $_POST['seasons_with_team'], $_POST['mvp_seasons'], $_POST['mvpid'])) {
        echo '<div class="alert alert-success" role="alert">MVP Edited</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteMVP($_POST['mvpid'])) {
        echo '<div class="alert alert-success" role="alert">MVP Deleted</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}

$mvps = selectMVPs();
include "view-mvps.php";
include "view-footer.php";
?>
