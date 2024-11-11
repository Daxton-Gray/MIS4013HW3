<h1>Leagues</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>League Name</th>
        <th>Abbreviation</th>
        <th>Sport</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($league = $leagues->fetch_assoc()) {
?>
       <tr>
         <td><?php echo $league['league_id']; ?></td>
         <td><?php echo $league['league_name']; ?></td>
         <td><?php echo $league['league_abbreviation']; ?></td>
         <td><?php echo $league['sport']; ?></td>
       </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
