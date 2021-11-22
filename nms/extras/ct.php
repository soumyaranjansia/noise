<?php include "includes/db_con.php"; ?>
<?php include "includes/header.php"; ?>

<?php

if (isset($_POST['start'])) {

    $query = "CREATE TABLE gajapati_block_values AS SELECT id, dist_id, block_id,gen_date, avg_value, day_time_value, night_time_value FROM ganjam_block_values";

    $result = mysqli_query($connection, $query);

    if($result == true) {
        echo "Tables created";
    } else {
        echo "Tables not created" . mysqli_error($connection);
    }
}

?>



<div class="container">

    <form action="" method="post">
        <button class="btn btn-warning" name="start" type="submit">Start Generating Tables</button>
    </form>
</div>

<?php include "includes/footer.php"; ?>