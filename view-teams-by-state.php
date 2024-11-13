<h1>Teams By State</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Team ID</th>
        <th>Team Name</th>
        <th>League</th>
        <th>City</th>
        <th>State</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($team = $teams->fetch_assoc()) {
?>
       <tr>
         <td><?php echo $team['team_id']; ?></td>
         <td><?php echo $team['team_name']; ?></td>
         <td><?php echo $team['league_abbreviation']; ?></td>
         <td><?php echo $team['city']; ?></td>
         <td><?php echo $team['state']; ?></td>
         <td><?php echo $team['country']; ?></td>
       </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
