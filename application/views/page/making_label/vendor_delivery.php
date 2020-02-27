
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
                                    <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content" style="width: 900px;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="demoModalLabel">Print Label</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form class="forms-sample">
                                                <div class="modal-body" style="width: 100%">
                                                         <iframe  id="iframe4" style="border:1px solid gray;" height="400px" width="850px;">
                                                         </iframe>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" id="print_label_vendor" class="btn btn-primary">Print</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Print Packing List -->
                                    <div class="modal fade" id="modal_packinglist" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content" style="width: 900px; height: 720px">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="demoModalLabel">Print Packing List</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form class="forms-sample">
                                                <div class="modal-body" style="height: 100%; width: 100%">
                                                         <iframe  id="iframe5" style="border:1px solid gray;" height="500px" width="800px;">
                                                         </iframe>
                                                    </div>
                                        
                                                    <div class="modal-footer">
                                                        <button type="button" id="print_packing_list" class="btn btn-primary">Print</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Edit QTY -->
                                    <div class="modal fade" id="editQty" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="demoModalLabel">Edit Qty</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form class="forms-sample" id="myForm">
                                                    <div class="modal-body">
                                                    <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Quantity (pcs) </label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="qty_pcs" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label"> Quantity (Kg)</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="qty_kg" readonly>
                                                                <input type="hidden"  id="serial_id" >
                                                                <input type="hidden"  id="dn_no" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label"> Actual (pcs)</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="actual_pcs" onchange="hitung_pcs()">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label"> Actual (Kg)</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="actual_kg" onchange="hitung_kg()">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label"> Balance (pcs)</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="balance_pcs" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label"> Balance (Kg)</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="balance_kg" readonly>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" onclick="simpan_qty()">Simpan</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card" style="min-height: 484px; overflow: auto;">
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <label class="col-sm-1 col-form-label"> Status</label>
                                                        <div class="col-sm-2">
                                                            <select class="form-control" id="col12_filter" >
                                                                <option selected value="open">Open</option>
                                                                <option value="closed">Closed</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                           
                                                    <hr>
                                                    <div class="dt-responsive">
                                                        <table id="vendor_delivery" class="table table-striped table-bordered nowrap">
                                                      
                                                            <thead>
                                                                <tr>
                                                                    <th width="5"></th>
                                                                    <th>DN No</th>
                                                                    <th>DN Date</th>
                                                                    <th>SPK No</th>
                                                                    <th>Plat No</th>
                                                                    <th>Driver</th>
                                                                    <th>Receiving Date</th>
                                                                    <th>Receiving By</th>
                                                                    <th>Delivery Date</th>
                                                                    <th>Actual Delivery</th>
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