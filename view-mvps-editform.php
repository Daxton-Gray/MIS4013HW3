<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editMVPModal<? echo $mvp['mvp_id']; ?>">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
  </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editMVPModal<? echo $mvp['mvp_id']; ?>" tabindex="-1" aria-labelledby="editMVPModalLabel<? echo $mvp['mvp_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editMVPModalLabel<? echo $mvp['mvp_id']; ?>">Edit MVP</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="team_id<? echo $mvp['mvp_id']; ?>" class="form-label">Team</label>
<?php
$teamList = selectTeamsForInput();
include "view-team-input-list.php";
?>
          </div>
          <div class="mb-3">
            <label for="f_name<? echo $mvp['mvp_id']; ?>" class="form-label">First Name</label>
            <input type="text" class="form-control" id="f_name<? echo $mvp['mvp_id']; ?>" name="f_name" value="<? echo $mvp['f_name']; ?>">
          </div>
          <div class="mb-3">
            <label for="l_name<? echo $mvp['mvp_id']; ?>" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="l_name<? echo $mvp['mvp_id']; ?>" name="l_name" value="<? echo $mvp['l_name']; ?>">
          </div>
          <div class="mb-3">
            <label for="position<? echo $mvp['mvp_id']; ?>" class="form-label">Position</label>
            <input type="text" class="form-control" id="position<? echo $mvp['mvp_id']; ?>" name="position" value="<? echo $mvp['position']; ?>">
          </div>
          <div class="mb-3">
            <label for="seasons_with_team<? echo $mvp['mvp_id']; ?>" class="form-label">Seasons With Team</label>
            <input type="number" class="form-control" id="seasons_with_team<? echo $mvp['mvp_id']; ?>" name="seasons_with_team" value="<? echo $mvp['seasons_with_team']; ?>">
          </div>
          <div class="mb-3">
            <label for="mvp_seasons<? echo $mvp['mvp_id']; ?>" class="form-label">MVP Seasons</label>
            <input type="number" class="form-control" id="mvp_seasons<? echo $mvp['mvp_id']; ?>" name="mvp_seasons" value="<? echo $mvp['mvp_seasons']; ?>">
          </div>
            <input type="hidden" name="mvpid" value="<? echo $mvp['mvp_id']; ?>">
            <input type="hidden" name="actionType" value="Edit">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
