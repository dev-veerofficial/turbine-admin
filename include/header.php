<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media.css">
</head>

<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <div>
                    <a class="navbar-brand" href="#"><img src="assets/images/logo-dronebase-2x.png" alt=""> </a>
                    <a href="javascript:void(0);" id="asidetogglr"><i class="fa fa-bars"></i></a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-download-dark"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-bell"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <strong>Mike Parker</strong>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="my-profile.php"> <i class="fa fa-user"></i> My Profile</a></li>
                                <li><a class="dropdown-item" href="edit-profile.php"> <i class="fa fa-pencil-alt"></i> Edit Profile</a></li>
                                <li><a class="dropdown-item" href="change-password.php"> <i class="fa fa-lock"></i> Change Password</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="login.php"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"><i class="icon-power-off"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>