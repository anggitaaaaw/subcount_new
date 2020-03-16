
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

                                    <div class="modal fade" id="editQty2" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="demoModalLabel">Receiving Report</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form class="forms-sample" id="myForm">
                                                    <div class="modal-body">
                                                        <p id="trans_date">Transaction Date: <b>20 Februari 2020</b></p>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">DN NO</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control" id="dn_no" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">SPK NO</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control" id="spk_no" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">LPP NO</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control" id="lpp_no" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Item Code</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control" id="item_code" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Description</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control" id="item_name" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Heat No</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control" id="heatno_a" readonly>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Qty Del (Pcs)</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control" id="qty_real" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Qty Del (Kg)</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control" id="weight_real" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Qty Rec (Pcs)</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control" id="qty_real2" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Qty Rec (Kg)</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control" id="weight_real2" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Deviation (Pcs)</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control" id="qty_real3" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Deviation (Kg)</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control" id="weight_real3" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" onclick="simpan_receiving_report()">Save Data</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card" style="overflow: auto; min-height: 484px;">
                                                <div class="card-body form-group row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group row">
                                                            <div class="col-sm-8">
                                                                <a class="btn btn-primary mr-2" href="<?php echo site_url('welcome/receiving_disubcount_input') ?>"><i class="ik ik-plus"></i>Vendor Receive</a>
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