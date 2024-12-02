<h1>Total Teams per State</h1>

<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
    datasets: [{
        data: [
<?php
while ($location = $locations->fetch_assoc()) {
  echo $location['num_teams'] . ", ";
}
?>          
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
<?php
$locations = selectLocations();
while ($location = $locations->fetch_assoc()) {
  echo "'" . $location['state'] . "', ";
}
?>  
    ]
},
  });
</script>
