<!--
<h1>My Favorite Teams</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Team ID</th>
        <th>Location ID</th>
        <th>League ID</th>
        <th>Team Name</th>
      </tr>
    </thead>
    
    <tbody>
<?php
/*while ($team = $teams->fetch_assoc()) {
  ?>
    <tr>
      <td>
        <?php echo $team['team_id']; ?>
      </td>
      <td>
        <?php echo $team['location_id']; ?>
      </td>
      <td>
        <?php echo $team['league_id']; ?>
      </td>
      <td>
        <?php echo $team['team_name']; ?>
      </td>
    </tr>
  <?php
}*/
?>
    </tbody>
  </table>
</div>
-->

<h1>My Favorite Teams</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Team ID</th>
        <th>Location ID</th>
        <th>League ID</th>
        <th>Team Name</th>
      </tr>
    </thead>
    
    <tbody>
<?php
include 'model-teams.php'; // Ensure this file includes selectTeams()

try {
    // Retrieve the list of teams
    $teams = selectTeams();

    // Display each team in the table
    foreach ($teams as $team) {
        ?>
        <tr>
          <td><?php echo htmlspecialchars($team['team_id']); ?></td>
          <td><?php echo htmlspecialchars($team['location_id']); ?></td>
          <td><?php echo htmlspecialchars($team['league_id']); ?></td>
          <td><?php echo htmlspecialchars($team['team_name']); ?></td>
        </tr>
        <?php
    }
} catch (Exception $e) {
    echo "<tr><td colspan='4'>Error fetching teams: " . htmlspecialchars($e->getMessage()) . "</td></tr>";
}
?>
    </tbody>
  </table>
</div>

