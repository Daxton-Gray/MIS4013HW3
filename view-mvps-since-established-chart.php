<h1>Total MVPs Per Team</h1>

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
        label: 'Team MVPs vs. Year Established',
        data: [
          <?php
          // Fetch team data and output it as JavaScript-compatible objects
          while ($team = $teams->fetch_assoc()) {
            echo "{ x: " . $team['year_established'] . ", y: " . $team['total_mvps'] . " },";
          }
          ?>
        ],
        backgroundColor: 'rgba(75, 192, 192, 0.6)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1,
      }]
    },
    options: {
      scales: {
        x: {
          title: {
            display: true,
            text: 'Year Established'
          }
        },
        y: {
          title: {
            display: true,
            text: 'Total MVPs'
          }
        }
      }
    }
  });
</script>


// <h1>Total MVPs Per Team</h1>

// <div>
//   <canvas id="myChart"></canvas>
// </div>

// <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



// <script>
//   const ctx = document.getElementById('myChart');

//   new Chart(ctx, {
//     type: 'scatter',
//     data: {
//     datasets: [{
//         data: [{
// <?php
// while ($team = $teams->fetch_assoc()) {
//  echo "{ x: " . $team['year_established'] . ", y: " . $team['total_mvps'] . " },";
// }
// ?>,
//         }]
//     }],

//     // These labels appear in the legend and in the tooltips when hovering different arcs
//     labels: [
// <?php
// $teams = selectTeams();
// while ($team = $teams->fetch_assoc()) {
//   echo "'" . $team['team_name'] . "', ";
// }
// ?>  
//     ]
// },
//   });
// </script>
