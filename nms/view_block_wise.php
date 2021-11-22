<?php include "includes/db_con.php"; ?>
<?php include "includes/header.php"; ?>

<?php

$dn = "";
$bn = "";

if (isset($_POST["show"])) {

    $dist_value = $_POST["dist_value"];
    $block_value = $_POST["block_value"];


    $dq = "SELECT * FROM districts WHERE district_id = $dist_value";
    $dr = mysqli_query($connection, $dq);


    if ($dr == true) {
        while ($row = mysqli_fetch_assoc($dr)) {
            $dn = $row["district_name"];
        }
    }

    $bq = "SELECT * FROM blocks WHERE block_id = $block_value";
    $br = mysqli_query($connection, $bq);


    if ($br == true) {
        while ($row = mysqli_fetch_assoc($br)) {
            $bn = $row["block_name"];
        }
    }


    $query = "";

    switch ($dist_value) {
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
            echo "<h2>Sorry for now. This is under construction.</h2>";
            break;
    }


    $query = $query . " WHERE block_id = $block_value";
    $result = mysqli_query($connection, $query);

    if ($result == true) {

        $gend_date = array();
        // $dist_id = array();
        $day_time_value_array = array();
        $night_time_value_array = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $gend_date[] = $row["gen_date"];
            $day_time_value_array[] = $row["day_time_value"];
            $night_time_value_array[] = $row["night_time_value"];
        }
    } else {
        die("No Record Found or Error: " . mysqli_error($connection));
    }
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 p-5">
            <h4 class="text-center">Block Wise Noise Visualization</h4>
            <form action="" method="post" class="form-control p-4">

                <label>Select District</label>
                <select class="form-select" name="dist_value" id="dname">
                    <option selected>Select District</option>
                    <?php

                    $q = "SELECT * FROM districts";
                    $select_district = mysqli_query($connection, $q);

                    while ($row = mysqli_fetch_assoc($select_district)) {
                        $d_id = $row['district_id'];
                        $d_name = $row['district_name'];

                        echo "<option value='{$d_id}'>{$d_id} - {$d_name}</option>";
                    }
                    ?>
                </select>
                <br>

                <label>Select Block</label>
                <select class="form-select" name="block_value">
                    <option selected>Select Block</option>
                    <?php

                    $q = "SELECT * FROM blocks";
                    $select_district = mysqli_query($connection, $q);

                    while ($row = mysqli_fetch_assoc($select_district)) {
                        $b_id = $row['block_id'];
                        $db_id = $row['dist_id'];
                        $b_name = $row['block_name'];

                        echo "<option value='{$b_id}'>{$b_id} - {$b_name}</option>";
                    }
                    ?>
                </select>
                <br><br>

                <button type="submit" name="show" class="btn btn-success">Show</button>
                <button type="reset" class="btn btn-warning">Reset</button>

            </form>
        </div> <!-- end of col-sm-6 -->

        <div class="col-sm-6 p-5">
            <h4 class="text-center"><?php echo $dn . " : " . $bn; ?></h4>

            <div class="chartCase">
                <canvas id="myChart"></canvas>
            </div>

        </div> <!-- end of col-sm-6 -->

    </div>

</div>

<script type="text/javascript" src="js/chart.min.js"></script>

<script>
    // for fist graph

    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($gend_date); ?>,
            datasets: [{
                    label: 'Daytime Noise in dB',
                    data: <?php echo json_encode($day_time_value_array); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 1
                },
                {
                    label: 'Nighttime Noise in dB',
                    data: <?php echo json_encode($night_time_value_array); ?>,
                    backgroundColor: [
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }
            ]
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

</body>

</html>