    <?php include('include/header.php'); ?>
    <div id="pagewrapper" class="d-flex">
        <!-- Sidebar -->
        <?php include('include/sidebar.php'); ?>
        <!-- page body -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h4>My Profile</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <label for="">FullName</label>
                                        <p>Mike Parker</p>
                                    </div>
                                </div>                               
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <p>mike.parker@example.com</p>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <label for="">Mobile Number</label>
                                        <p>+353 12345 789</p>
                                    </div>
                                </div>
                            </div>
                               
                                <!--  -->
                                <div class="col-12 mt-4">
                                    <a href="edit-profile.php" class="btn btn-s btn-lg">Edit Profile</a>
                                    <a href="change-password.php" class="btn btn-s btn-lg mt-2 mt-sm-0">Change Password</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Mobile Number</label>
                                <input type="text" class="form-control" placeholder="Mobile Number">
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-12 mt-4">
                            <span class="me-3">Status</span>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="active">
                                <label class="form-check-label" for="inlineRadio1">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="inactive">
                                <label class="form-check-label" for="inlineRadio2">Inactive</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-s" id="">Add User</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Ends here -->
    <?php include('include/footer.php'); ?>