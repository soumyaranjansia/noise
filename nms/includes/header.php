<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Noise Monitoring System</title>

    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/stylish-portfolio.css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-light bg-light p-3">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="./index.php">Noise Monitor System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./view_block_wise.php">Block Wise</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./noisewiki.php">Noise Wiki</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./upload_iot_data.php">Upload Data</a>
                    </li>
                </ul>
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                        Administrator
                    </button>
                    <ul class="dropdown-menu">

                        <li><a class="dropdown-item" href="./device_login.php">Login</a></li>
                        <li> <a class="dropdown-item" href="./device_register.php">Register</a></li>
                        <li><a class="dropdown-item" href="./add_districts.php">Add District</a></li>
                        <li><a class="dropdown-item" href="./add_blocks.php">Add Block</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>