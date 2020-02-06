
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


                                    <!-- Vendor Receipt -->
                                    <div class="modal fade" id="modal_dn_no" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" style="max-width: 1100px;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="demoModalLabel">Vendor Receive</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form class="forms-sample">
                                                    <div class="modal-body" style="overflow: scroll;">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Delivery Note No</label>
                                                            <div class="col-sm-4">
                                                                <select class="form-control select2" id="select_dn_no" onchange="tes(this.value)" >
                                                                    <option value="">-SELECT DELIVERY NOTE NO-</option>
                                                                </select>
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
                                                        <div class="dt-responsive" style="padding: 10px;">
                                                            <table id="tbl_dn_no" class="tabel_dn">
                                                                <thead>
                                                                    <tr>
                                                                        <th width="5">No</th>
                                                                        <th>SPK No</th>
                                                                        <th>Batch No</th>
                                                                        <th>Item Code</th>
                                                                        <th>Description</th>
                                                                        <th>Heat No</th>
                                                                        <th>Quantity (Pcs)</th>
                                                                        <th>Quantity (Kg)</th>
                                                                        <th>Actual (Pcs)</th>
                                                                        <th>Actual (Kg)</th>
                                                                        <th>Balance (Pcs)</th>
                                                                        <th>Balance (Kg)</th>
                                                                        <!--<th>Actual</th>
                                                                        <th>Balance</th>-->
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="body_dn_no">
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
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" id="aggree" class="btn btn-primary">Aggree To Receive item and Qty</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
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