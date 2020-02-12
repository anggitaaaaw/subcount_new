
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
                                                        <h5>Vendor Delivery</h5>
                                                        <span>Please enter Delivery Note to Print Data</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <nav class="breadcrumb-container" aria-label="breadcrumb">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item">
                                                            <a href="#"><i class="ik ik-home"></i></a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#">Vendor Delivery</a></li>
                                                    </ol>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Print Label -->
                                    <div class="modal fade" id="modal_printlabel" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" style="width: 400px;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="demoModalLabel">Print Label</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form class="forms-sample">
                                                    <div class="modal-body" style="height: 410px;">
                                                        <iframe src="<?php echo site_url('welcome/print_label2') ?>" id="iframe2" style="border:none;" height="100%" width="100%;">

                                                        </iframe>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" id="print_label" class="btn btn-primary">Print</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Print Packing List -->
                                    <div class="modal fade" id="modal_packinglist" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" style="width: 800px;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="demoModalLabel">Print Packing List</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form class="forms-sample">
                                                    <div class="modal-body" style="height: 600px;">
                                                        <iframe src="<?php echo site_url('welcome/print_packinglist') ?>" id="iframe" style="border:none;" height="100%" width="100%;">

                                                        </iframe>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" id="print_sj" class="btn btn-primary">Print</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card" style="min-height: 484px;">
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <label class="col-sm-1 col-form-label">Search By</label>
                                                        <div class="col-sm-2">
                                                            <select class="form-control select2">
                                                                <option value="">-Delivery Note-</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <input type="text" class="form-control" placeholder="Search Data" id="search_by">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <a href="#" class="btn btn-primary mr-2"><i class="ik ik-search"></i>Search</a>
                                                        </div>
                                                    </div>
                                                    <div class="dt-responsive">
                                                        <table id="vendor_delivery" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th width="5"></th>
                                                                    <th>DN No</th>
                                                                    <th>DN Date</th>
                                                                    <th>Plat No</th>
                                                                    <th>Driver</th>
                                                                    <th>Receiving Date</th>
                                                                    <th>Receiving By</th>
                                                                    <th>Delivery Date</th>
                                                                    <th>Delivery By</th>
                                                                    <th>Leadtime</th>
                                                                    <th>Packing List</th>
                                                                    <th>Status</th>
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
                    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
                    <script src="<?php echo base_url() ?>javascript_data/vendor_delivery.js?<?php echo time() ?>"></script>