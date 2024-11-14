<h1>Teams by League</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Team ID</th>
        <th>League</th>
        <th>City</th>
        <th>Name</th>
        <th>Year Established</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($team = $teams->fetch_assoc()) {
?>
       <tr>
         <td><?php echo $team['team_id']; ?></td>
         <td><?php echo $team['league_abbreviation']; ?></td>
         <td><?php echo $team['city']; ?></td>
         <td><?php echo $team['team_name']; ?></td>
         <td><?php echo $team['year_established']; ?></td>
         <td><a href="stars-by-team.php?id=<?php echo $team['team_id']; ?>">All-Stars</a></td>
       </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
