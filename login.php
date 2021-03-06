<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div id="wrapper" class="bg-p m-0 h-100">
        <!-- page body -->
        <div class="container">
            <div class="row h-100 align-items-center justify-content-center">
                <div>
                    <div class="col-12 text-center">
                        <img src="assets/images/logo-dronebase-2x.png" alt="">
                    </div>
                    <div class="col-12 col-lg-5 login-box mt-5 border border-4 rounded-3 px-3 py-5 px-md-5 m-auto">
                        <div class="col-12 mb-5 txt-lite text-center">
                            <h2>ADMIN LOGIN</h2>
                        </div>
                        <!-- <span class="bg-danger txt-lite px-2 py-1 rounded rounded-radius">Please enter valid email address.</span> -->
                        <!-- <div class="input-group mb-3 input-mega mb-4 border border-danger"> -->
                        <div class="input-group mb-3 input-mega mb-4">
                            <input type="text" class="form-control" placeholder="Email Address"
                                aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-text"><i class="fa fa-envelope"></i> </span>
                        </div>
                       
                        <!--  -->
                        <!-- <span class="bg-danger txt-lite px-2 py-1 rounded rounded-radius">Please enter valid password.</span> -->
                        <div class="input-group mb-3 input-mega mb-4">
                            <input type="text" class="form-control" placeholder="Password"
                                aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-text"><i class="fa fa-lock"></i> </span>
                        </div>
                        <!--  -->
                        <div class="col-12">
                            <button class="btn btn-lg w-100 btn-s btn-block btn-mega">Login</button>
                        </div>
                        <!--  -->
                        <div class="col-12 text-center mt-4">
                            <a href="#" class="link-grey para-lg">Forgot Password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });

    </script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>

</html>