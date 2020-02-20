
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
                                                                    <div class="form-group row" style="margin: 1px;">
                                                                        <label class="col-sm-4 col-form-label">Trans Date</label>
                                                                        <div class="col-sm-3">
                                                                            <input type="text" placeholder="From" class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker" onchange="date_to()">
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <input type="text" placeholder="To" class="form-control datetimepicker-input" id="datepicker2" data-toggle="datetimepicker" data-target="#datepicker2" onchange="date_from(this.value)">
                                                                        </div>
                                                                        <div class="col-sm-2">
                                                                            <div class="checkbox-fade fade-in-primary">
                                                                                <label>
                                                                                    <input type="checkbox" value="" id="check_date" checked onchange="check_date()">
                                                                                    <span class="cr">
                                                                                        <i class="cr-icon ik ik-check txt-primary"></i>
                                                                                    </span>
                                                                                    <span>ALL</span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row" style="margin: 1px;">
                                                                        <label class="col-sm-4 col-form-label">Subcont Name</label>
                                                                        <div class="col-sm-6">
                                                                            <select type="text" id="subcount_name_report" class="form-control select2" onchange="select_subcount(this.value)"></select>
                                                                        </div>
                                                                        <div class="col-sm-2">
                                                                            <div class="checkbox-fade fade-in-primary">
                                                                                <label>
                                                                                    <input type="checkbox" value="" id="check_subcount" checked onchange="check_subcount()">
                                                                                    <span class="cr">
                                                                                        <i class="cr-icon ik ik-check txt-primary"></i>
                                                                                    </span>
                                                                                    <span>ALL</span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row" style="margin: 1px;">
                                                                        <label class="col-sm-4 col-form-label">SPK No</label>
                                                                        <div class="col-sm-6">
                                                                            <select type="text" id="spk_no_report" class="form-control select2" onchange="select_spk_no(this.value)"></select>
                                                                        </div>
                                                                        <div class="col-sm-2">
                                                                            <div class="checkbox-fade fade-in-primary">
                                                                                <label>
                                                                                    <input type="checkbox" value="" id="check_spk" checked onchange="check_spk()">
                                                                                    <span class="cr">
                                                                                        <i class="cr-icon ik ik-check txt-primary"></i>
                                                                                    </span>
                                                                                    <span>ALL</span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class="form-group row" style="margin: 1px;">
                                                                        <label class="col-sm-4 col-form-label"></label>
                                                                        <div class="col-sm-6">
                                                                            <button type="button" id="filter_report" class="btn btn-primary" onclick="filter()">Filter</button>
                                                                            <button type="button" id="clear_report"class="btn btn-secondary" onclick="clear()">Clear</button>
                                                                            <button type="button" class="btn btn-info" id="print_report" onclick="print()">Print</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row" style="margin: 1px;">
                                                                        <label class="col-sm-4 col-form-label">Item Code</label>
                                                                        <div class="col-sm-6">
                                                                            <select type="text" id="item_code_report" class="form-control select2" onchange="select_item_code(this.value)"></select>
                                                                        </div>
                                                                        <div class="col-sm-2">
                                                                            <div class="checkbox-fade fade-in-primary">
                                                                                <label>
                                                                                    <input type="checkbox" value="" id="check_item" checked onchange="check_item()">
                                                                                    <span class="cr">
                                                                                        <i class="cr-icon ik ik-check txt-primary"></i>
                                                                                    </span>
                                                                                    <span>ALL</span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row" style="margin: 1px;">
                                                                        <label class="col-sm-4 col-form-label">Description</label>
                                                                        <div id="spk_no" class="col-sm-8">
                                                                            <input type="text" id="item_name_report" class="form-control"> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="dt-responsive">
                                                            <table id="tbl_report" class="table table-striped table-bordered nowrap">
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
                    <script src="<?php echo base_url() ?>javascript_data/report_trans.js?<?php echo time() ?>"></script>