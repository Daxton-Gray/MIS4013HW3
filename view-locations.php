<h1>Locations</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Location ID</th>
        <th>City</th>
        <th>State</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($location = $locations->fetch_assoc()) {
?>
       <tr>
         <td><?php echo $location['location_id']; ?></td>
         <td><?php echo $location['city']; ?></td>
         <td><?php echo $location['city']; ?></td>
         <td><?php echo $location['country']; ?></td>
       </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
