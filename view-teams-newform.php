<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newTeamModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newTeamModal" tabindex="-1" aria-labelledby="newTeamModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newTeamModalLabel">New Team</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="league_id" class="form-label">League ID</label>
            <input type="number" class="form-control" id="league_id" name="league_id">
          </div>
          <div class="mb-3">
            <label for="location_id" class="form-label">Location ID</label>
            <input type="number" class="form-control" id="location_id" name="location_id">
          </div>
          <div class="mb-3">
            <label for="tName" class="form-label">Team Name</label>
            <input type="text" class="form-control" id="tName" name="tName">
          </div>
          <div class="mb-3">
            <label for="yearEst" class="form-label">Year Established</label>
            <input type="number" class="form-control" id="yearEst" name="yearEst">
          </div>
            <input type="hidden" name="actionType" value="Add">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
