
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
                                                        <iframe src="<?php echo site_url('welcome/print_dn') ?>" id="iframe" style="border:none;" height="100%" width="100%;">

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

                                    <div class="card col-md-12" style="min-height: 700px;">
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
                                                        <table id="example" class="table table-bordered nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th>Vendor Name</th>
                                                                    <th>SPK No</th>
                                                                    <th>LPP No</th>
                                                                    <th>Item Code</th>
                                                                    <th>Description</th>
                                                                    <th>Heat No</th>
                                                                    <th>Quantity</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Vendor Name</td>
                                                                    <td>SPK No</td>
                                                                    <td>Batch No</td>
                                                                    <td>Item Code</td>
                                                                    <td>Description</td>
                                                                    <td>UoM</td>
                                                                    <td>Heat No</td>
                                                                    <!--<td>
                                                                        <div class="table-actions">
                                                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                                                        </div>-->
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div style="float: right;">
                                                        <button type="submit" class="btn btn-primary mr-2"><i class="ik ik-check"></i>Create Delivery Note</button>
                                                        <button data-toggle="modal" data-target="#modal_printdn" class="btn btn-primary mr-2"><i class="ik ik-printer"></i>Print Delivery Note</button>
                                                        <button data-toggle="modal" data-target="#modal_printpackinglist" class="btn btn-primary mr-2"><i class="ik ik-printer  "></i>Print Packing List</button>
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
