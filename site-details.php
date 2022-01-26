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
                                <h4> <a href="sites.php"><i class="fa fa-arrow-circle-left"></i></a> | {{dynamic_site_name}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <th>Turbin</th>
                                            <th>Date Captured</th>
                                            <th>Time Captured</th>
                                            <th>Upload Date</th>
                                            <th>Pilots</th>
                                            <th>Processed Date</th>
                                            <th>Flagging</th>
                                            <th>Notes</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>T1</td>
                                                <td>11/02/2022</td>
                                                <td>13:07PM</td>
                                                <td>15/02/2022</td>
                                                <td>Shane</td>
                                                <td>1/18-ST</td>
                                                <td>NK</td>
                                                <td style="max-width:200px;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</td>
                                               
                                            </tr>
                                            <!--  -->
                                            <tr>
                                                <td>T2</td>
                                                <td>11/02/2022</td>
                                                <td>13:07PM</td>
                                                <td>15/02/2022</td>
                                                <td>Shane</td>
                                                <td>1/18-ST</td>
                                                <td>NK</td>
                                                <td style="max-width:200px;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</td>
                                               
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