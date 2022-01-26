        <?php include('include/header.php'); ?>
        <div id="pagewrapper" class="d-flex">
            <!-- Sidebar -->
            <?php include('include/sidebar.php'); ?>
            <!-- page body -->
            <div class="container">
                <!-- row -->
                <div class="row mt-4">
                    <div class="col-12 col-lg-8">
                        <!--  -->
                        <div class="row mb-4">
                            <!-- Card-1 -->
                            <div class="col-12 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Turbine Operator Tracking</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between text-center">
                                            <div>
                                                <div class="h-s"><strong>56</strong>/637</div>
                                                <div class="txt-p-lite"> <small>Turbines Completed</small> </div>
                                            </div>
                                            <div>
                                                <div class="h-s"><strong>8</strong></div>
                                                <div class="txt-p-lite"> <small>Operators</small> </div>
                                            </div>
                                            <div>
                                                <div class="h-s"><strong>5</strong></div>
                                                <div class="txt-p-lite"> <small>Teams</small> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card-2 -->
                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Week 12 Summary</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-around text-center">

                                            <div>
                                                <div class="h-s"><strong>8</strong></div>
                                                <div class="txt-p-lite"> <small>Turbines</small> </div>
                                            </div>
                                            <div>
                                                <div class="h-s"><strong>5</strong></div>
                                                <div class="txt-p-lite"> <small>Total Hrs</small> </div>
                                            </div>
                                            <div>
                                                <div class="h-s"><strong>5</strong></div>
                                                <div class="txt-p-lite"> <small>Standby</small> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-4 para-xl">Latest Logs</div>
                                    <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                                <div class="form-group mt-0">
                                                    <label for="exampleDataList" class="form-label mb-0">Site</label>
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
                                            <div class="col-12 col-md-4">
                                                <div class="form-group mt-0">
                                                    <label for="exampleDataList" class="form-label mb-0">Operator</label>
                                                    <select class="form-control iput-filters dd-select2" placeholder="All Operators">
                                                        <option value="shane" id="s2">Shane</option>
                                                        <option value="robin" id="s3">Robin</option>
                                                        <option value="peter" id="s4">Peter</option>
                                                        <option value="Michael" id="s5">Michael</option>
                                                        <option value="Dexter" id="s6">Dexter</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--  -->
                                            <div class="col-12 col-md-4">
                                                <div class="form-group mt-0">
                                                    <label for="exampleDataList" class="form-label mb-0">Date</label>
                                                    <input class="form-control iput-filters" name="dates">
                                                </div>
                                            </div>
                                            <!--  -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
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
                                                <td><a href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>05/01/22</td>
                                                <td>Niall Carroll</td>
                                                <td>Drumdeevan</td>
                                                <td>6</td>
                                                <td>1.5</td>
                                                <td>1</td>
                                                <td>8</td>
                                                <td><a href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>05/01/22</td>
                                                <td>Niall Carroll</td>
                                                <td>Drumdeevan</td>
                                                <td>6</td>
                                                <td>1.5</td>
                                                <td>1</td>
                                                <td>8</td>
                                                <td><a href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>05/01/22</td>
                                                <td>Niall Carroll</td>
                                                <td>Drumdeevan</td>
                                                <td>6</td>
                                                <td>1.5</td>
                                                <td>1</td>
                                                <td>8</td>
                                                <td><a href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>05/01/22</td>
                                                <td>Niall Carroll</td>
                                                <td>Drumdeevan</td>
                                                <td>6</td>
                                                <td>1.5</td>
                                                <td>1</td>
                                                <td>8</td>
                                                <td><a href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>05/01/22</td>
                                                <td>Niall Carroll</td>
                                                <td>Drumdeevan</td>
                                                <td>6</td>
                                                <td>1.5</td>
                                                <td>1</td>
                                                <td>8</td>
                                                <td><a href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>05/01/22</td>
                                                <td>Niall Carroll</td>
                                                <td>Drumdeevan</td>
                                                <td>6</td>
                                                <td>1.5</td>
                                                <td>1</td>
                                                <td>8</td>
                                                <td><a href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>05/01/22</td>
                                                <td>Niall Carroll</td>
                                                <td>Drumdeevan</td>
                                                <td>6</td>
                                                <td>1.5</td>
                                                <td>1</td>
                                                <td>8</td>
                                                <td><a href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>05/01/22</td>
                                                <td>Niall Carroll</td>
                                                <td>Drumdeevan</td>
                                                <td>6</td>
                                                <td>1.5</td>
                                                <td>1</td>
                                                <td>8</td>
                                                <td><a href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>05/01/22</td>
                                                <td>Niall Carroll</td>
                                                <td>Drumdeevan</td>
                                                <td>6</td>
                                                <td>1.5</td>
                                                <td>1</td>
                                                <td>8</td>
                                                <td><a href="#">View</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Week Summary Table -->
                    <div class="col-12 col-lg-4 mt-3 mt-lg-0">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-12 col-md-7 para-lg text-center mt-2">
                                        <div> <a href="#"> <i class="fa fa-chevron-left"></i> </a> Week 12 Summary <a href=""><i class="fa fa-chevron-right"></i></a> </div>
                                        <div class="para-sm txt-grey"><small>07/01/2022 - 14/01/2022</small></div>
                                    </div>
                                    <div class="col-12 col-md-5">
                                        <div class="form-group mt-0">
                                            <label for="exampleDataList" class="form-label mb-0">Operator</label>
                                            <select class="form-control iput-filters dd-select2" placeholder="All Operators">
                                                <option value="shane" id="p2">Shane</option>
                                                <option value="robin" id="p3">Robin</option>
                                                <option value="peter" id="p4">Peter</option>
                                                <option value="Michael" id="p5">Michael</option>
                                                <option value="Dexter" id="p6">Dexter</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Operator</th>
                                                <th>Tbn</th>
                                                <th>Hrs</th>
                                                <th>Sby</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Niall Carroll</td>
                                                <td>14</td>
                                                <td>15</td>
                                                <td>6</td>
                                            </tr>
                                            <tr>
                                                <td>Niall Carroll</td>
                                                <td>14</td>
                                                <td>15</td>
                                                <td>6</td>
                                            </tr>
                                            <tr>
                                                <td>Niall Carroll</td>
                                                <td>14</td>
                                                <td>15</td>
                                                <td>6</td>
                                            </tr>
                                            <tr>
                                                <td>Niall Carroll</td>
                                                <td>14</td>
                                                <td>15</td>
                                                <td>6</td>
                                            </tr>
                                            <tr>
                                                <td>Niall Carroll</td>
                                                <td>14</td>
                                                <td>15</td>
                                                <td>6</td>
                                            </tr>
                                            <tr>
                                                <td>Niall Carroll</td>
                                                <td>14</td>
                                                <td>15</td>
                                                <td>6</td>
                                            </tr>
                                            <tr>
                                                <td>Niall Carroll</td>
                                                <td>14</td>
                                                <td>15</td>
                                                <td>6</td>
                                            </tr>
                                            <tr>
                                                <td>Niall Carroll</td>
                                                <td>14</td>
                                                <td>15</td>
                                                <td>6</td>
                                            </tr>
                                            <tr>
                                                <td>Niall Carroll</td>
                                                <td>14</td>
                                                <td>15</td>
                                                <td>6</td>
                                            </tr>
                                            <tr>
                                                <td>Niall Carroll</td>
                                                <td>14</td>
                                                <td>15</td>
                                                <td>6</td>
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
        <?php include('include/footer.php'); ?>