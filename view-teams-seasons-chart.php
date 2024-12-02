<h1>Total MVPs Per Team</h1>

<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'polarArea',
    data: {
    datasets: [{
        data: [
<?php
while ($team = $teams->fetch_assoc()) {
  echo $team['avg_seasons'] . ", ";
}
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
