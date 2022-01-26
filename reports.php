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
                                <h4>Reports</h4>
                            </div>
                            <div class="col-6 d-flex justify-content-end"><a href="#" class="link-s"> <i class="fa fa-download"></i> Download CSV </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row filters mb-4 pb-4 border-bottom">
                            <!--  -->
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 mt-2 mt-md-0">
                                <div class="form-group mt-0">
                                    <label for="">Date Range</label>
                                    <input type="text" name="dates" class="form-control iput-filters">
                                </div>
                            </div>
                            <!--  -->
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 mt-2 mt-md-0">
                                <div class="form-group mt-0">
                                    <label for="exampleDataList" class="form-label mb-0">Select Site</label>
                                    <select class="form-control iput-filters dd-select2" placeholder="All Sites">
                                        <option value="Site 1" id="2">Site 1</option>
                                        <option value="Site 2" id="3">Site 2</option>
                                        <option value="Site 3" id="4">Site 3</option>
                                        <option value="Site 4" id="5">Site 4</option>
                                        <option value="Site 5" id="6">Site 4</option>
                                    </select>
                                </div>
                            </div>
                            <!--  -->
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 mt-2 mt-md-0">
                                <div class="form-group mt-0">
                                    <label for="exampleDataList" class="form-label mb-0">Select Team</label>
                                    <select class="form-control iput-filters dd-select2" placeholder="All Operators">
                                        <option value="shane" id="t2">T1</option>
                                        <option value="robin" id="t3">T2</option>
                                        <option value="peter" id="t4">T3</option>
                                        <option value="Michael" id="t5">T4</option>
                                        <option value="Dexter" id="t6">T5</option>
                                    </select>
                                </div>
                            </div>
                            <!--  -->
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 mt-2 mt-md-0">
                                <div class="form-group mt-0">
                                    <label for="exampleDataList" class="form-label mb-0">Standby Hours</label>
                                    <select class="form-control iput-filters dd-select2" placeholder="All Operators">
                                        <option value="shane" id="g2">0-10 Hrs</option>
                                        <option value="robin" id="g3">10-20 Hrs</option>
                                        <option value="peter" id="g4">20-30 Hrs</option>
                                        <option value="Michael" id="g5">30-40 Hrs</option>
                                        <option value="Dexter" id="g6">40-50 Hrs</option>
                                    </select>
                                </div>
                            </div>
                            <!--  -->
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 mt-2 mt-md-0">
                                <div class="form-group mt-0">
                                    <label for="exampleDataList" class="form-label mb-0">KMs Travelled</label>
                                    <select class="form-control iput-filters dd-select2" placeholder="All Operators">
                                        <option value="shane" id="k2">0-10 KM</option>
                                        <option value="robin" id="k3">10-20 KM</option>
                                        <option value="peter" id="k4">20-30 KM</option>
                                        <option value="Michael" id="k5">30-40 KM</option>
                                        <option value="Dexter" id="k6">40-50 KM</option>
                                    </select>
                                </div>
                            </div>
                            <!--  -->
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 mt-2 mt-md-0 d-flex align-items-end justify-content-end">
                                <a href="#" class="btn btn-s btn-lg">Generate</a>
                            </div>
                            <!--  -->
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Operators</th>
                                                <th>Turbine Sites</th>
                                                <th>Turbines</th>
                                                <th>Standby</th>
                                                <th>Mobilisation</th>
                                                <th>Total Hrs.</th>
                                                <th> Notes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>05/01/22</td>
                                                <td>Niall Carroll</td>
                                                <td>Drumdeevan</td>
                                                <td>6</td>
                                                <td>1.5</td>
                                                <td>1</td>
                                                <td>8</td>
                                                <td style="max-width: 150px; font-size:14px">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</td>
                                            </tr>
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