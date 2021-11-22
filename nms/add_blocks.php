<?php include "includes/db_con.php"; ?>
<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<?php

if (isset($_POST['add_block'])) {
    $dist_name = $_POST['dist_name'];
    $block_name = $_POST['block_name'];
    addNewBlock($dist_name, $block_name);
}

?>


<div class="container-fluid">
    <div class="row mt-2">
        <div class="col-sm-6 p-5">
            <form action="" method="post" class="form-control p-4">
                <h3>Add New Block</h3>

                <label for="dname">Select District</label>
                <select class="form-select" name="dist_name" id="dname">
                    <option selected>Select District</option>
                    <?php getDistrictInOptionForm(); ?>
                </select>
                <br>

                <label for="bname">Enter Block Name</label>
                <br>
                <input type="text" class="form-control" name="block_name" id="bname">
                <br>
                <button type="submit" name="add_block" class="btn btn-primary">Add Block</button>
            </form>
        </div> <!-- end of col -->

        <div class="col-sm-6 p-5">
            <table class="table table-bordered table-hover text-center">
                <tr>
                    <th>District Name</th>
                    <th>Block Name</th>
                </tr>

                <!-- fetch the available BLOCKS from the database -->

                <?php getBlockInTableForm(); ?>

            </table>
        </div>
    </div>
</div>



<?php include "includes/footer.php"; ?>