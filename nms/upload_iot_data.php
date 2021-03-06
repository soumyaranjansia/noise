<?php include "includes/db_con.php"; ?>
<?php include "functions.php"; ?>
<?php
if (isset($_POST['create'])) {

  $date = $_POST['date'];

  // $block_id = 1;

  // for puri block

  for ($i = $block_id; $i <= 5; $i++) {

    $dist_id = 2;
    $daytime = rand(500, 750) / 10;
    $nighttime = rand(400, 600) / 10;

    $avgvalue = ($daytime + $nighttime) / 2;

    $query = "INSERT INTO puri_block_values (dist_id, block_id, gen_date, avg_value, day_time_value, night_time_value) VALUES ('$dist_id', '$i', '$date', '$avgvalue', '$daytime', '$nighttime')";

    $result = mysqli_query($connection, $query);

    if ($result == true) {
      echo $i . "--Your data successfully added <br>";
    } else {
      echo "Query failed " . mysqli_error($connection);
    }
  }


  // for cuttack block

  for (
    $i = $block_id;
    $i <= 5;
    $i++
  ) {

    $dist_id = 3;
    $daytime = rand(500, 750) / 10;
    $nighttime = rand(400, 600) / 10;

    $avgvalue = ($daytime + $nighttime) / 2;

    $query = "INSERT INTO cuttack_block_values (dist_id, block_id, gen_date, avg_value, day_time_value, night_time_value) VALUES ('$dist_id', '$i', '$date', '$avgvalue', '$daytime', '$nighttime')";

    $result = mysqli_query($connection, $query);

    if ($result == true) {
      echo $i . "--Your data successfully added <br>";
    } else {
      echo "Query failed " . mysqli_error($connection);
    }
  }


  // for khordha block

  for ($i = $block_id; $i <= 5; $i++) {

    $dist_id = 4;
    $daytime = rand(500, 750) / 10;
    $nighttime = rand(400, 600) / 10;

    $avgvalue = ($daytime + $nighttime) / 2;

    $query = "INSERT INTO khordha_block_values (dist_id, block_id, gen_date, avg_value, day_time_value, night_time_value) VALUES ('$dist_id', '$i', '$date', '$avgvalue', '$daytime', '$nighttime')";

    $result = mysqli_query($connection, $query);

    if ($result == true) {
      echo $i . "--Your data successfully added <br>";
    } else {
      echo "Query failed " . mysqli_error($connection);
    }
  }

  // for kendrapara block

  for ($i = $block_id; $i <= 5; $i++) {

    $dist_id = 5;
    $daytime = rand(500, 750) / 10;
    $nighttime = rand(400, 600) / 10;

    $avgvalue = ($daytime + $nighttime) / 2;

    $query = "INSERT INTO kendrapara_block_values (dist_id, block_id, gen_date, avg_value, day_time_value, night_time_value) VALUES ('$dist_id', '$i', '$date', '$avgvalue', '$daytime', '$nighttime')";

    $result = mysqli_query($connection, $query);

    if ($result == true) {
      echo $i . "--Your data successfully added <br>";
    } else {
      echo "Query failed " . mysqli_error($connection);
    }
  }
}
?>

<!-- HEADER -->
<?php include "includes/header.php"; ?>


<div class="container">

  <form class="form-control mt-5 p-4" action="" method="post">

    <h3>Upload Your Observation</h3>
    <form action="" method="get">
      <select class="form-select" name="district" id="dname">
        <option selected>Select District</option>
        <?php getDistrictInOptionForm(); ?>
      </select>
    </form>
    <br>
    <select class="form-select" name="block" id="bname">
      <option selected>Select Block</option>
      <?php
      $dist_name ='Ganjam';
      getBlockInOptionForm($dist_name); ?>
    </select>
    <br>

    <label for="date">Select a Date</label><br>
    <input type="date" id="date" name="date" class="form-control">
    <br><br>

    <button type="submit" class="btn btn-success" name="create">Submit</button>
    <button type="reset" class="btn btn-warning">Reset</button>

  </form>
</div>

<!-- FOOTER -->
<?php include "includes/footer.php"; ?>