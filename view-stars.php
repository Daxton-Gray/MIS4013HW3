<h1>Stars</h1>
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
while ($star = $stars->fetch_assoc()) {
?>
       <tr>
         <td><?php echo $star['league_id']; ?></td>
         <td><?php echo $star['league_name']; ?></td>
         <td><?php echo $star['league_abbreviation']; ?></td>
         <td><?php echo $star['sport']; ?></td>
       </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
