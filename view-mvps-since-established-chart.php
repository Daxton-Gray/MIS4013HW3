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
        data: [{
          X: 
<?php
while ($team = $teams->fetch_assoc()) {
  echo $team['year_est'] . ", ";
}
?>              
        }, {
          y:
<?php
$teams = selectTeams();
while ($team = $teams->fetch_assoc()) {
  echo $team['total_mvps'] . ", ";
}
?>           
        }],
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
