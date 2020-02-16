
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
                                                        <h5>Incoming WIP</h5>
                                                        <span>Please Scan Packing List to show data</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <nav class="breadcrumb-container" aria-label="breadcrumb">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item">
                                                            <a href="#"><i class="ik ik-home"></i></a>
                                                        </li>
                                                        <li class="breadcrumb-item active" aria-current="page">Incoming WIP</li>
                                                    </ol>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card col-md-12" style="min-height: 484px; overflow: auto;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <form class="forms-sample">
                                                        <div class="row">
                                                            <div class="col-md-10">
                                                                <div class="form-group row">
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control" style="font-size: 34px; height: 80px;" id="scan_label" placeholder="SCAN PACKING LIST"  onchange="tes(this.value)">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-4 col-form-label">SUBCONT</label>
                                                                        <div class="col-sm-6">
                                                                            <b>PT. JAKARTA MARTIN</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-4 col-form-label">DN No Reference</label>
                                                                        <div class="col-sm-6">
                                                                            <b>VEN001XXX</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-4 col-form-label">DN Date</label>
                                                                        <div class="col-sm-6">
                                                                            <b>2020-02-15</b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Packing List No</label>
                                                                        <div class="col-sm-8">
                                                                            <b>2020-02-15</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">SPK No</label>
                                                                        <div class="col-sm-8">
                                                                            <b>2020-02-15</b>    
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Item Code</label>
                                                                        <div class="col-sm-8">
                                                                            <b>2020-02-15</b>    
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
                                                                        <th rowspan="2">Batch No</th>
                                                                        <th colspan="2">Heat No</th>
                                                                        <th colspan="2">Send QTY</th>
                                                                        <th colspan="2">Receive Qty</th>
                                                                        <th rowspan="2">QC Judgement</th>
                                                                        <th rowspan="2">QTY</th>  
                                                                        <th rowspan="2">Remarks</th> 
                                                                        <th colspan="2">Balance Qty</th>           
                                                                    </tr>
                                                                    <tr>
                                                                        <th>A</th>
                                                                        <th>B</th> 
                                                                        <th>In Pcs</th>
                                                                        <th>In Kg</th>   
                                                                        <th>In Pcs</th>
                                                                        <th>In Kg</th>   
                                                                        <th>In Pcs</th>
                                                                        <th>In Kg</th>         
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="10">1</td>
                                                                        <td>22-4800-293</td>
                                                                        <td>1289</td>
                                                                        <td>-</td>
                                                                        <td style="width: 60px;"><input style="width: 100%;" type="text"></td>
                                                                        <td style="width: 60px;"><input style="width: 100%;" type="text"></td>
                                                                        <td style="width: 60px;"><input style="width: 100%;" type="text"></td>
                                                                        <td style="width: 60px;"><input style="width: 100%;" type="text"></td>
                                                                        <td style="width: 200px;"><input style="width: 20%;" checked type="radio">OK <input style="width: 20%;" type="radio">NG</td>
                                                                        <td style="width: 60px;"><input style="width: 100%;" type="text"></td>
                                                                        <td style="width: 200px;"><select readonly style="width: 100%;" type="text"></select></td>
                                                                        <td style="width: 60px;"><input readonly style="width: 100%;" type="text"></td>
                                                                        <td style="width: 60px;"><input readonly style="width: 100%;" type="text"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <br>
                                                            <button type="button" id="save_vd" class="btn btn-primary" onclick="create_vd()">Receive</button>
                                                            <button type="button" class="btn btn-secondary" onclick="delete_vd_temp()">Print</button>
                                                            <button type="button" class="btn btn-info" id="print_pl" onclick="print_vd()">Clear</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
                    <script src="<?php echo base_url() ?>javascript_data/incoming_wip.js?<?php echo time() ?>"></script>