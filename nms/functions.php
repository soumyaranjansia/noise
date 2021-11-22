<?php include "includes/db_con.php"; ?>
<?php

function addNewDistrict($district_name)
{
    global $connection;
    $add_dist_query = "INSERT INTO districts (district_name) VALUES ('$district_name')";
    $dist_added = mysqli_query($connection, $add_dist_query);

    if ($dist_added == true) {
        echo 'District added Successfully';
    } else {
        echo 'Error : ' . mysqli_error($connection);
    }
}

function getDistrictInTableForm()
{
    global $connection;
    $query = "SELECT * FROM districts";
    $result = mysqli_query($connection, $query);

    if ($result == true) {
        while ($district_row = mysqli_fetch_assoc($result)) {

            $dist_id = $district_row["district_id"];
            $dist_name = $district_row["district_name"];

            echo "<tr>";
            echo "<td>{$dist_id}</td>";
            echo "<td>{$dist_name}</td>";
            echo "</tr>";
        }
    } else {
        echo 'Error while showing Districts: ' . mysqli_error($connection);
    }
}

function getDistrictInOptionForm()
{
    global $connection;
    $query = "SELECT * FROM districts";
    $result = mysqli_query($connection, $query);

    if ($result == true) {
        while ($row = mysqli_fetch_assoc($result)) {
            $d_id = $row['district_id'];
            $d_name = $row['district_name'];

            echo "<option value='{$d_name}?d={$d_name}'>{$d_name}</option>";
        }
    } else {
        echo 'Error while showing Districts: ' . mysqli_error($connection);
    }
}

function addNewBlock($dist_name, $block_name)
{
    global $connection;
    $checkin = "SELECT * FROM block WHERE district_name='$dist_name' and block_name='$block_name'";
    $checkin_q = mysqli_query($connection, $checkin);
    if (mysqli_num_rows($checkin_q) > 0) {
        echo "block already exists";
    } else {
        $add_block_query = "INSERT INTO block (district_name, block_name) VALUES ('$dist_name', '$block_name')";
        $block_added = mysqli_query($connection, $add_block_query);
        if ($block_added == true) {
            echo 'Block added Successfully';
        } else {
            echo 'Error : ' . mysqli_error($connection);
        }
    }
}

function getBlockInTableForm()
{
    global $connection;
    $query = "SELECT * FROM block";
    $result = mysqli_query($connection, $query);

    if ($result == true) {
        while ($block_row = mysqli_fetch_assoc($result)) {

            $dist_name = $block_row["district_name"];
            $block_name = $block_row["block_name"];

            echo "<tr>";
            echo "<td>{$dist_name}</td>";
            echo "<td>{$block_name}</td>";
            echo "</tr>";
        }
    } else {
        echo 'Error while showing Blocks: ' . mysqli_error($connection);
    }
}


function getBlockInOptionForm($dist_name)
{
    global $connection;
    $query = "SELECT * FROM block WHERE district_name = '$dist_name'";
    $result = mysqli_query($connection, $query);

    if ($result == true) {
        while ($block_row = mysqli_fetch_assoc($result)) {

            
            $block_name = $block_row["block_name"];

            echo "<option value='{$block_name}'>{$block_name}</option>";
        }
    } else {
        echo 'Error while showing Blocks: ' . mysqli_error($connection);
    }
}

?>