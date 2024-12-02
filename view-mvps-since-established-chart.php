<h1>MVPs since Team was Established</h1>

<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'scatter',
    data: {
    datasets: [{
        data: [
<?php
 $dataPoints = [];
 while ($team = $teams->fetch_assoc()) {
  $dataPoints[] = "{x: {$team['year_est']}, y: {$team['total_mvps']}}";
 }
 echo implode(',', $dataPoints);
?>
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
<?php
$teams = selectTeams();
while ($team = $teams->fetch_assoc()) {
  echo "'" . $team['team_name'] . "', ";
}
?>  
    ]
},
  });
</script>

