<select class="form-select" id="locid" name="locid">
<?php
while ($locationItem = $locationList->fetch_assoc()) {
  $selText = "";
  if ($selectedLocation == $locationItem['location_id']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $locationItem['location_id']; ?>"<?=$selText?>><?php echo $locationItem['city']; ?>, <?php echo $locationItem['state']; ?></option>
<?php
}
?>
</select>
