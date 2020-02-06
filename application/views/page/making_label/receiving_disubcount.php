
                    <div class="wrapper">
                        <div class="page-wrap">
                            <div class="main-content">
                                <div class="container-fluid">
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <i class="ik ik-edit bg-blue"></i>
                                                    <div class="d-inline">
                                                        <h5>Vendor Receiving</h5>
                                                        <span>Please Select Delivery Note to show data</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <nav class="breadcrumb-container" aria-label="breadcrumb">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item">
                                                            <a href="#"><i class="ik ik-home"></i></a>
                                                        </li>
                                                        <li class="breadcrumb-item active" aria-current="page">Vendor Receiving</li>
                                                    </ol>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card" style="min-height: 484px;">
                                                <div class="card-body form-group row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group row">
                                                            <div class="col-sm-8">
                                                                <a class="btn btn-primary mr-2" href="<?php echo site_url('welcome/receiving_disubcount_input') ?>"><i class="ik ik-plus"></i>Vendor Receive</a>
                                                            </div>
                                                            <label class="col-sm-1 col-form-label">Delivery Note</label>
                                                            <div class="col-sm-3">
                                                                <select class="form-control select2">
                                                                    <option value="cheese">Delivery Note</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="dt-responsive">
                                                            <table id="receiving_disubcount" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th width="5"></th>
                                                                        <th>Delivery Date</th>
                                                                        <th>Delivery No</th>
                                                                        <th>Plat No</th>
                                                                        <th>Driver Name</th>
                                                                        <th>Receive Date</th>
                                                                        <th>Receive User</th>
                                                                    </tr>
                                                                </thead>
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
                    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
                    <script src="<?php echo base_url() ?>javascript_data/receiving_disubcount.js?<?php echo time() ?>"></script>