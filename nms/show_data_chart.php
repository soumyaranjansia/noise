<?php include "includes/db_con.php" ?>
<?php

// -------------------------------------
$query = "SELECT * FROM districts";
$result = mysqli_query($connection, $query);
if ($result == true) {

    $districts = array();
    $dist_value = array();
    $count = 0;

    while ($row = mysqli_fetch_assoc($result)) {

        $districts[] = $row['dist_name'];
        $dist_value[] = $row['dist_id'];
        $count += 1;
    }
} else {
    die("Query failed " . mysqli_error($connection));
}
// -------------------------------------


for ($x = 1; $x <= $count; $x++) {

    $query = "SELECT * FROM ganjam_block_value WHERE dist_id = $x";
    $result = mysqli_query($connection, $query);
    if ($result == true) {

        $gendDate = array();
        $dist_id = array();
        $daytimeArray = array();
        $night_time_Array = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $genDate[] = $row["gen_date"];
            $dist_id[] = $row["dist_id"];
            $daytimeArray[] = $row["day_time_value"];
            $night_time_Array[] = $row["night_time_value"];
        }
    } else {
        die("Query failed " . mysqli_error($connection));
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style type="text/css">
        .chartCase {
            width: 560px;
            height: auto;
        }
    </style>

</head>

<body>

    <div class="chartCase">
        <canvas id="myChart"></canvas>
    </div>
    <div class="chartCase">
        <canvas id="myChart2"></canvas>
    </div>

    <script type="text/javascript" src="js/chart.min.js"></script>

    <script>
        // for fist graph

        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($genDate); ?>,
                datasets: [{
                    label: '# of Votes',
                    data: <?php echo json_encode($daytimeArray); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)'
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

        //  for second graph

        const ctx2 = document.getElementById('myChart2').getContext('2d');
        const myChart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($dist_id); ?>,
                datasets: [{
                    label: '# of Votes',
                    data: <?php echo json_encode($night_time_Array); ?>,
                    backgroundColor: [
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(153, 102, 255, 1)'
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

<?php include "includes/footer.php"; ?>