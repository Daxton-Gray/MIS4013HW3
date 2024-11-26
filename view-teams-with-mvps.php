<div class="row">
  <div class="col">
    <h1>Teams with MVPs</h1>
  </div>
  <div class="col-auto">
<?php
include "view-mvps-newform.php";
?>
  </div>
</div>
<div class="card-group">
<?php
while ($team = $teams->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $team['team_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
<?php
  $mvps = selectMVPsByTeam($team['team_id']);
  while ($mvp = $mvps->fetch_assoc()) {
?>
    <li class="list-group-item">
      <?php echo $mvp['f_name']; ?> <?php echo $mvp['l_name']; ?><br/><?php echo $mvp['position']; ?><br/><?php echo $mvp['seasons_with_team']; ?> Seasons - <?php echo $mvp['mvp_seasons']; ?> MVP Awards<br/><?php include "view-mvps-editform.php"; ?>
          <form method="post" action="">
             <input type="hidden" name="mvpid" value="<?php echo $mvp['mvp_id']; ?>">
             <input type="hidden" name="actionType" value="Delete">
             <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
              </svg>
             </button>
          </form>
    </li>
<?php
  }
?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Joined <?php echo $team['league_abbreviation']; ?> in <?php echo $team['year_established']; ?></small></p>
    </div>
  </div>

<?php
}
?>
</div>
