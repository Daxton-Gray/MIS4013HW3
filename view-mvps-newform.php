<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newMVPModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newMVPModal" tabindex="-1" aria-labelledby="newMVPModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newMVPModalLabel">New MVP</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="team_id" class="form-label">Team</label>
<?php
$teamList = selectTeamsForInput();
$selectedTeam = 0;
include "view-team-input-list.php";
?>
          </div>
          <div class="mb-3">
            <label for="f_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="f_name" name="f_name">
          </div>
          <div class="mb-3">
            <label for="l_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="l_name" name="l_name">
          </div>
          <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control" id="position" name="position">
          </div>
          <div class="mb-3">
            <label for="seasons_with_team" class="form-label">Seasons With Team</label>
            <input type="number" class="form-control" id="seasons_with_team" name="seasons_with_team">
          </div>
          <div class="mb-3">
            <label for="mvp_seasons" class="form-label">MVP Seasons</label>
            <input type="number" class="form-control" id="mvp_seasons" name="mvp_seasons">
          </div>
            <input type="hidden" name="actionType" value="Add">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
