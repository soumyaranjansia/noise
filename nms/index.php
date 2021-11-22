<?php include "includes/db_con.php"; ?>
<?php

$query = "SELECT * FROM districts";
$result = mysqli_query($connection, $query);


if ($result == true) {

  $district_name_array = array();
  $district_id_array = array();
  $count = 0;

  while ($row = mysqli_fetch_assoc($result)) {

    $district_id_array[] = $row['district_id'];
    $district_name_array[] = $row['district_name'];
    $count += 1;

    if ($count == 5) {
      break;
    }
  }
} else {
  die("Query failed " . mysqli_error($connection));
}


for ($x = 1; $x <= 5; $x++) {

  $query = "";

  switch ($x) {
    case 1:
      $query = "SELECT * FROM ganjam_block_values";
      break;
    case 2:
      $query = "SELECT * FROM puri_block_values";
      break;
    case 3:
      $query = "SELECT * FROM cuttack_block_values";
      break;
    case 4:
      $query = "SELECT * FROM khordha_block_values";
      break;
    case 5:
      $query = "SELECT * FROM kendrapara_block_values";
      break;
    default:
      echo "Sorry for now. Something went wrong";
      break;
  }

  $result = mysqli_query($connection, $query);

  if ($result == true) {

    $avg_avg_value = array();
    $total_entries = 0;
    $sum = 0;

    while ($row = mysqli_fetch_assoc($result)) {
      $avg_avg_value[] = $row['avg_value'];
      $total_entries += 1;
    }

    for ($i = 0; $i < $total_entries; $i++) {
      $sum += $avg_avg_value[$i];
    }

    $dist_avg_avg_values[] = $sum / $total_entries;
  } else {
    die("Query failed " . mysqli_error($connection));
  }
}

?>


<!-- HEADER -->
<?php include "includes/header.php"; ?>

<!-- START OF BANNER -->
<div class="container-fluid mt-5 p-5" style="height: 540px;">
  <div class="row">
    <div class="col-sm-6 p-5 text-center">
      <h1 style="font-size: 3rem; font-weight:bolder;">Just Promise Yourself That Ever Drive But Never Noise</h1>
      <p style="font-size: 1.2rem;">
        Study and Data Visulization of Odisha Noise Pollution
      </p>
      <a href="#dd" class="btn btn-secondary">Find Out More</a>
    </div> <!-- end -->

    <div class="col-sm-6">

      <canvas id="myChart"></canvas>

    </div> <!-- end -->
  </div>
</div><!-- END OF BANNER -->


<!-- Here we include our JavaScript files -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/chart.min.js"></script>


<!-- real time data from mysqli for mychart -->
<script>
  // for fist graph

  const ctx = document.getElementById('myChart').getContext('2d');
  const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?php echo json_encode($district_name_array); ?>,
      datasets: [{
        label: 'Noise in dB',
        data: <?php echo json_encode($dist_avg_avg_values); ?>,
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

<?php include "includes/footer.php" ?>