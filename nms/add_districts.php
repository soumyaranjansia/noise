<?php include "includes/db_con.php"; ?>
<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<?php

if (isset($_POST['add_district'])) {
    $district_name = $_POST['dname'];
    addNewDistrict($district_name);
}

?>

<div class="container-fluid">
    <div class="row mt-2">
        <div class="col-sm-6 p-5">
            <form action="" method="post" class="form-control p-4">
                <h3>Add New District</h3>
                <label for="dname">Enter District Name</label>
                <br>
                <input type="text" class="form-control" name="dname" id="dname">
                <br>
                <button type="submit" name="add_district" class="btn btn-primary">Add District</button>
            </form>
        </div> <!-- end of col -->

        <div class="col-sm-6 p-5">
            <table class="table table-bordered table-hover text-center">
                <tr>
                    <th>District ID</th>
                    <th>District Name</th>
                </tr>

                <!-- fetch the available DISTRICTS from the database -->

                <?php getDistrictInTableForm(); ?>

            </table>
        </div>
    </div>
</div>



<?php include "includes/footer.php"; ?>