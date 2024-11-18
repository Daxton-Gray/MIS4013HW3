<h1>Teams with MVPs</h1>
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
    <li class="list-group-item"><?php echo $mvp['f_name']; ?> <?php echo $mvp['l_name']; ?> - <?php echo $mvp['position']; ?> - <?php echo $mvp['season_with_team']; ?> Seasons - <?php echo $mvp['mvp_seasons']; ?> MVPs</li>
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
