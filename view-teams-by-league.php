<h1>Teams by League</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Team ID</th>
        <th>City</th>
        <th>Name</th>
        <th>Year Established</th>
        <th></th>
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
