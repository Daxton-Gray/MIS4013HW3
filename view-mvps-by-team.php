<h1>MVPs By Team</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>MVP ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>League</th>
        <th>City</th>
        <th>Team Name</th>
        <th>Position</th>
        <th>Seasons on Team</th>
        <th>MVP Seasons</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($mvp = $mvps->fetch_assoc()) {
?>
       <tr>
         <td><?php echo $mvp['mvp_id']; ?></td>
         <td><?php echo $mvp['f_name']; ?></td>
         <td><?php echo $mvp['l_name']; ?></td>
         <td><?php echo $mvp['league_abbreviation']; ?></td>
         <td><?php echo $mvp['city']; ?></td>
         <td><?php echo $mvp['team_name']; ?></td>
         <td><?php echo $mvp['position']; ?></td>
         <td><?php echo $mvp['season_with_team']; ?></td>
         <td><?php echo $mvp['mvp_seasons']; ?></td>
       </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
