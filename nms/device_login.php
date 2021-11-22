<?php include "includes/db_con.php"; ?>
<?php include "includes/header.php"; ?>
<?php

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $passwd = $_POST['passwd'];


    $query = "SELECT * FROM loginiot WHERE username = '$username'";
    $result = mysqli_query($connection, $query);

    if ($result == true) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($passwd == $row['passwd']) {
                echo "Login Sucessfull";
                header("location: admin.php");
            } else {
                echo "Login failed";
            }
        }
    } else {
        echo "Something went wrong" . mysqli_error($connection);
    }
}

?>


<div class="container">
    <div class="row">

        <div class="col-sm-6">
            <form action="" method="post" class="form-control mt-5 p-4">
                <h3>Login</h3>
                <br>
                <label for="username">Enter Username</label><br>
                <input type="text" name="username" id="username" class="form-control">
                <br>
                <label for="passwd">Enter Password</label><br>
                <input type="text" name="passwd" id="passwd" class="form-control">
                <br>
                <button type="submit" name="login" class="btn btn-success form-control">Login</button>
                <br><br>
                <button type="reset" class="btn btn-warning form-control">Reset</button>

            </form>
        </div> <!-- end -->
    </div>

    <?php include "includes/footer.php"; ?>