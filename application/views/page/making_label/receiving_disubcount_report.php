
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
                                                        <h5>Vendor Receiving Report</h5>
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
                                                        <li class="breadcrumb-item active" aria-current="page">Vendor Receiving Report</li>
                                                    </ol>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card col-md-12" style="min-height: 484px; overflow: auto;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <form class="forms-sample">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Delivery Note No</label>
                                                            <div class="col-sm-4">
                                                                <input type="text" class="form-control" id="plat_no" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Plat No</label>
                                                            <div class="col-sm-4">
                                                                <input type="text" class="form-control" id="plat_no" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Driver Name</label>
                                                            <div class="col-sm-4">
                                                                <input type="text" class="form-control" id="driver_name" readonly>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="dt-responsive">
                                                            <table id="receiving_disubcount_report" class="table table-striped table-bordered nowrap">
                                                            <!-- <table id="tbl_dn_no" class="tabel_dn"> -->
                                                                <thead>
                                                                    <tr>
                                                                       <!-- <th width="5">No</th> -->
                                                                        <th>SPK No</th>
                                                                        <th>Batch No</th>
                                                                        <th>Item Code</th>
                                                                        <th>Description</th>
                                                                        <th>Heat No</th>
                                                                        <th style="width: 60px;" >Quantity <br>(Pcs)</th>
                                                                        <th style="width: 60px;" >Quantity <br>(Kg)</th>
                                                                        <th style="width: 60px;">Actual <br>(Pcs)</th>
                                                                        <th style="width: 60px;">Actual <br>(Kg)</th>
                                                                        <th style="width: 60px;">Balance <br>(Pcs)</th>
                                                                        <th style="width: 60px;">Balance <br>(Kg)</th>
                                                                        <!--<th>Actual</th>
                                                                        <th>Balance</th>-->
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="10">1</td>
                                                                        <td width="100">23090123</td>
                                                                        <td width="100">239800102930</td>
                                                                        <td width="200">ASKDK298198</td>
                                                                        <td width="200">Produk A</td>
                                                                        <td width="50">29399</td>
                                                                        <td style="width: 60px;"><input style="width: 100%;" type="text"></td>
                                                                        <td style="width: 60px;"><input style="width: 100%;" type="text"></td>
                                                                        <td style="width: 60px;"><input style="width: 100%;" type="text"></td>
                                                                        <td style="width: 60px;"><input style="width: 100%;" type="text"></td>
                                                                        <td style="width: 60px;"><input readonly style="width: 100%;" type="text"></td>
                                                                        <td style="width: 60px;"><input readonly style="width: 100%;" type="text"></td>
                                                                        
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <br>
                                                            <button type="button" id="aggree" class="btn btn-primary" onclick="move_trx_ven()">Aggree To Receive item and Qty</button>
                                                            <button type="button" class="btn btn-secondary" onclick="location.reload()">Refresh</button>
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
                    <script src="<?php echo base_url() ?>javascript_data/receiving_disubcont_report.js?<?php echo time() ?>"></script>