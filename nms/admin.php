<?php include "includes/db_con.php"; ?>
<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>



<div class="container">

    <h2>Device Panel</h2>
    <form action="" method="post">

        <label for="dname">Select District</label>
        <select class="form-select" name="dist_id" id="dname">
            <option selected>Select District</option>
            <?php getDistrictInOptionForm(); ?>
        </select>
        <button type="submit" name="dcheck" class="btn btn-primary">Get All Blocks</button>
        <br>

        <label for="bname">Select Block</label>
        <select class="form-select" name="block_id" id="bname">
            <option selected>Select District</option>
            <?php getBlockInOptionForm(1); ?>
        </select>
        <br>

    </form>
    <table>

    </table>


</div>




<?php include "includes/footer.php"; ?>