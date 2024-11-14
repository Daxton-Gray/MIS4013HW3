<h1>Teams by League</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Team ID</th>
        <th>City</th>
        <th>Last Name</th>
        <th>League</th>
        <th>City</th>
        <th>Team Name</th>
        <th>Position</th>
        <th>Seasons on Team</th>
        <th>All-Star Seasons</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($star = $stars->fetch_assoc()) {
?>
       <tr>
         <td><?php echo $star['allstar_id']; ?></td>
         <td><?php echo $star['f_name']; ?></td>
         <td><?php echo $star['l_name']; ?></td>
         <td><?php echo $star['league_abbreviation']; ?></td>
         <td><?php echo $star['city']; ?></td>
         <td><?php echo $star['team_name']; ?></td>
         <td><?php echo $star['position']; ?></td>
         <td><?php echo $star['season_with_team']; ?></td>
         <td><?php echo $star['allstar_seasons']; ?></td>
       </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
