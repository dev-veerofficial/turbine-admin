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
                                <h4>Sites</h4>
                            </div>
                            <div class="col-6 d-flex justify-content-end"><a href="add-site.php" class="btn btn-s">+ Add
                                    Site</a></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <th>#</th>
                                            <th>Site Name</th>
                                            <th>Address</th>
                                            <th>Co-ordinates</th>
                                            <th>No. of Turbines</th>
                                            <th>Turbine Names</th>
                                            <th>Notes</th>
                                            <th>Actions</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Drumdeevan</td>
                                                <td>est et nisl aliquet pretium</td>
                                                <td>53.1424° N, 7.6921° W</td>
                                                <td>6</td>
                                                <td>T1, T2, T3, T4, T5, T6</td>
                                                <td style="max-width:200px;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</td>
                                                <td style="min-width: 100px;">
                                                    <a href="site-details.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Turbine Details"><i class="fas fa-list"></i></a>
                                                    <a class="text-warning mx-2" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fa fa-pencil-alt"></i></a>
                                                    <a class="text-danger" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <!--  -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include('include/footer.php'); ?>