<h1>MVPs since Team was Established</h1>

<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
$teams = selectTeams(); // Assuming this fetches the data from the database
$dataPoints = [];
$labels = [];

while ($team = $teams->fetch_assoc()) {
    $dataPoints[] = [
        'x' => $team['year_est'],
        'y' => $team['total_mvps']
    ];
    $labels[] = $team['team_name'];
}
?>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'scatter',
    data: {
      datasets: [{
        label: 'Team Data', // Optional: Add a label for the dataset
        data: <?php echo json_encode($dataPoints); ?>, // Embeds the array of {x, y} points
        backgroundColor: 'rgba(75, 192, 192, 0.6)', // Example styling
      }],
    },
    options: {
      plugins: {
        tooltip: {
          callbacks: {
            label: function(context) {
              const index = context.dataIndex;
              return '<?php echo json_encode($labels); ?>'[index];
            }
          }
        }
      }
    }
  });
</script>






<!-- <script>
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
 -->
