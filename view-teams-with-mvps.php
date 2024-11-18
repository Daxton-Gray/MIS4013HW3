<h1>Teams with MVPs</h1>
<div class="card-group">
<?php
while ($team = $teams->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $team['team_name']; ?></h5>
      <p class="card-text">
<?php
  $mvps = selectMVPsByTeam($team['team_id']);
  while ($mvp = $mvps->fetch_assoc()) {
?>
<?php
  }
?>
      </p>
      <p class="card-text"><small class="text-body-secondary">Est. <?php echo $team['year_established']; ?></small></p>
    </div>
  </div>

<?php
}
?>
</div>
