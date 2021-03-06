
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
                                                        <h5>Create Delivery Note</h5>
                                                        <span>Please enter data completely and correctly</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <nav class="breadcrumb-container" aria-label="breadcrumb">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item">
                                                            <a href="../index.html"><i class="ik ik-home"></i></a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#">Delivery Note</a></li>
                                                        <li class="breadcrumb-item"><a href="#">Create Delivery Note</a></li>
                                                    </ol>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Print Delivery Note -->
                                    <div class="modal fade" id="modal_printdn" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" style="width: 800px;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="demoModalLabel">Print SJ</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form class="forms-sample">
                                                    <div class="modal-body" style="height: 600px;">
                                                        <iframe  id="iframe1" style="border:none;" height="100%" width="100%;">

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

                                    <!-- Print Packing List -->
                                    <div class="modal fade" id="modal_printpackinglist" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" style="width: 800px;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="demoModalLabel">Print SJ</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form class="forms-sample">
                                                    <div class="modal-body" style="height: 600px;">
                                                        <iframe  id="iframe2" style="border:none;" height="100%" width="100%;">

                                                        </iframe>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" id="print_pl" class="btn btn-primary">Print</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card col-md-12" style="min-height: 700px; overflow: auto;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                        
                                                        <div class="form-group row" style="margin: 1px;">
                                                            <label class="col-sm-2 col-form-label">Plat No</label>
                                                            <div class="col-sm-4">
                                                                <select class="form-control select2" id="select_plat_no">
                                                                    <option value="">-SELECT PLAT NO-</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="margin: 1px;">
                                                            <label class="col-sm-2 col-form-label">Driver Name</label>
                                                            <div class="col-sm-4">
                                                                <select class="form-control select2" id="select_driver_name">
                                                                    <option value="">-SELECT DRIVER NAME-</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="form-group row" style="margin: 1px;">
                                                            <label class="col-sm-4 col-form-label" style="font-size: 30px; font-weight: bold;">SCAN LABEL BACTH</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" style="font-size: 40px;" class="form-control" id="scan_label" name="scan_label" onchange="scan_label(this.value)">
                                                            </div>
                                                        </div>
                                                   
                                                    
                                                    <br>
                                                    <div class="dt-responsive">
                                                        <table id="tbl_create_dn" class="table table-bordered nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th>Vendor Name</th>
                                                                    <th>Serial ID</th>
                                                                    <th>SPK No</th>
                                                                    <th>LPP No</th>
                                                                    <th>Item Code</th>
                                                                    <th>Description</th>
                                                                    <th>Heat No</th>
                                                                    <th>Quantity</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                               
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div style="float: right;">
                                                        <button type="submit" class="btn btn-primary mr-2" onclick="create_dn()" id="create_dn"><i class="ik ik-check"></i>Create Delivery Note</button>
                                                        <button data-toggle="modal" class="btn btn-primary mr-2" id="print_dn" onclick ="print_dn()"><i class="ik ik-printer"></i>Print Delivery Note</button>
                                                        <button data-toggle="modal" class="btn btn-primary mr-2" id="print_packing" onclick="print_pl()"><i class="ik ik-printer  "></i>Print Packing List</button>
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
        <script src="<?php echo base_url() ?>javascript_data/delivery_note_input.js?<?php echo time() ?>"></script>
