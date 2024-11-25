<select class="form-select" id="lgid" name="lgid">
<?php
while ($leagueItem = $leagueList->fetch_assoc()) {
  $selText = "";
  if ($selectedLeague == $leagueItem['league_id']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $leagueItem['league_id']; ?>"<?=$selText?>><?php echo $leagueItem['league_abbreviation']; ?></option>
<?php
}
?>
</select>
