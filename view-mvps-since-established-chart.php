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
          $teams = selectTeams(); // Fetch teams again for this dataset
          while ($team = $teams->fetch_assoc()) {
            echo "{ x: " . $team['year_established'] . ", y: " . $team['total_mvps'] . ", team: '" . $team['team_name'] . "' },";
          }
          ?>
        ],
        backgroundColor: 'rgba(75, 192, 192, 0.6)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1,
      }]
    },
    options: {
      plugins: {
        tooltip: {
          callbacks: {
            // Custom tooltip to display team names
            label: function(context) {
              const team = context.raw.team; // Access the 'team' property
              return `${team}: (${context.raw.x}, ${context.raw.y})`;
            }
          }
        }
      },
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
//       datasets: [{
//         data: [
//           <?php
//           // Fetch team data and output it as JavaScript-compatible objects
//           while ($team = $teams->fetch_assoc()) {
//             echo "{ x: " . $team['year_established'] . ", y: " . $team['total_mvps'] . " },";
//           }
//           ?>
//         ],
//         labels: [
// <?php
// $teams = selectTeams();
// while ($team = $teams->fetch_assoc()) {
//   echo "'" . $team['team_name'] . "', ";
// }
// ?>  
//     ],

//         backgroundColor: 'rgba(75, 192, 192, 0.6)',
//         borderColor: 'rgba(75, 192, 192, 1)',
//         borderWidth: 1,
//       }]
//     },
//     options: {
//       scales: {
//         x: {
//           title: {
//             display: true,
//             text: 'Year Established'
//           }
//         },
//         y: {
//           title: {
//             display: true,
//             text: 'Total MVPs'
//           }
//         }
//       }
//     }
//   });
// </script>
