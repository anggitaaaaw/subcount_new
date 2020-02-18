
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
                                                        <h5>Report Transaction</h5>
                                                        <span>Please Select some data to show data</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <nav class="breadcrumb-container" aria-label="breadcrumb">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item">
                                                            <a href="#"><i class="ik ik-home"></i></a>
                                                        </li>
                                                        <li class="breadcrumb-item active" aria-current="page">Transaction report</li>
                                                    </ol>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card col-md-12" style="min-height: 484px; overflow: auto;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-4 col-form-label">Trans Date</label>
                                                                        <div class="col-sm-3">
                                                                            <input type="text" placeholder="From" class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker">
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <input type="text" placeholder="To" class="form-control datetimepicker-input" id="datepicker2" data-toggle="datetimepicker" data-target="#datepicker2">
                                                                        </div>
                                                                        <div class="col-sm-2">
                                                                            <div class="checkbox-fade fade-in-primary">
                                                                                <label>
                                                                                    <input type="checkbox" value="">
                                                                                    <span class="cr">
                                                                                        <i class="cr-icon ik ik-check txt-primary"></i>
                                                                                    </span>
                                                                                    <span>ALL</span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-4 col-form-label">Subcont Name</label>
                                                                        <div class="col-sm-6">
                                                                            <select type="text" class="form-control select2"></select>
                                                                        </div>
                                                                        <div class="col-sm-2">
                                                                            <div class="checkbox-fade fade-in-primary">
                                                                                <label>
                                                                                    <input type="checkbox" value="">
                                                                                    <span class="cr">
                                                                                        <i class="cr-icon ik ik-check txt-primary"></i>
                                                                                    </span>
                                                                                    <span>ALL</span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-4 col-form-label">SPK No</label>
                                                                        <div class="col-sm-6">
                                                                            <select type="text" class="form-control select2"></select>
                                                                        </div>
                                                                        <div class="col-sm-2">
                                                                            <div class="checkbox-fade fade-in-primary">
                                                                                <label>
                                                                                    <input type="checkbox" value="">
                                                                                    <span class="cr">
                                                                                        <i class="cr-icon ik ik-check txt-primary"></i>
                                                                                    </span>
                                                                                    <span>ALL</span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-4 col-form-label"></label>
                                                                        <div class="col-sm-6">
                                                                            <button type="button" id="save_vd" class="btn btn-primary" onclick="receive_incoming()">Filter</button>
                                                                            <button type="button" class="btn btn-secondary" onclick="delete_incoming()">Clear</button>
                                                                            <button type="button" class="btn btn-info" id="print_pl" onclick="location.reload()">Print</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-4 col-form-label">Item Code</label>
                                                                        <div class="col-sm-6">
                                                                            <select type="text" class="form-control select2"></select>
                                                                        </div>
                                                                        <div class="col-sm-2">
                                                                            <div class="checkbox-fade fade-in-primary">
                                                                                <label>
                                                                                    <input type="checkbox" value="">
                                                                                    <span class="cr">
                                                                                        <i class="cr-icon ik ik-check txt-primary"></i>
                                                                                    </span>
                                                                                    <span>ALL</span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-4 col-form-label">Description</label>
                                                                        <div id="spk_no" class="col-sm-8">
                                                                            <input type="text" class="form-control"> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="dt-responsive">
                                                            <table id="tbl_incoming" class="table table-striped table-bordered nowrap">
                                                            <!-- <table id="tbl_dn_no" class="tabel_dn"> -->
                                                                <thead>
                                                                    <tr>
                                                                        <th width="5" rowspan="2">No</th>
                                                                        <th rowspan="2">Subcont Name</th>
                                                                        <th colspan="2">Send Qty</th>
                                                                        <th colspan="2">Receive Qty</th>
                                                                        <th colspan="2">Balance Qty</th>           
                                                                    </tr>
                                                                    <tr>
                                                                        <th>In Pcs</th>
                                                                        <th>In Kg</th>   
                                                                        <th>In Pcs</th>
                                                                        <th>In Kg</th>   
                                                                        <th>In Pcs</th>
                                                                        <th>In Kg</th>         
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="body_tbl_iw">
                                                                   
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
                    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
                    <script src="<?php echo base_url() ?>javascript_data/incoming_wip.js?<?php echo time() ?>"></script>