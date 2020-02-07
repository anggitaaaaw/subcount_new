
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
                                                        <h5>Vendor Receiving Input</h5>
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
                                                        <li class="breadcrumb-item active" aria-current="page">Vendor Receiving Input</li>
                                                    </ol>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    
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

                                    <div class="card col-md-10" style="min-height: 484px;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <form class="forms-sample">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Delivery Note No</label>
                                                            <div class="col-sm-8">
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
                                                        <button type="button" class="btn btn-success" id="edit_qty" data-toggle="modal" disabled><i class="ik ik-edit"></i>Update Qty</button>
                                                        <br>
                                                        <br>
                                                        <div class="dt-responsive">
                                                            <table id="tbl_dn_no" class="table table-striped table-bordered nowrap">
                                                            <!-- <table id="tbl_dn_no" class="tabel_dn"> -->
                                                                <thead>
                                                                    <tr>
                                                                       <!-- <th width="5">No</th> -->
                                                                        <th>SPK No</th>
                                                                        <th>Batch No</th>
                                                                        <th>Item Code</th>
                                                                        <th>Description</th>
                                                                        <th>Heat No</th>
                                                                        <th style="width: 60px;" >Quantity (Pcs)</th>
                                                                        <th style="width: 60px;" >Quantity (Kg)</th>
                                                                        <th style="width: 60px;">Actual (Pcs)</th>
                                                                        <th style="width: 60px;">Actual (Kg)</th>
                                                                        <th style="width: 60px;">Balance (Pcs)</th>
                                                                        <th style="width: 60px;">Balance (Kg)</th>
                                                                        <!--<th>Actual</th>
                                                                        <th>Balance</th>-->
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                   <!-- <tr>
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
                                                                        
                                                                    </tr>-->
                                                                </tbody>
                                                            </table>
                                                            <br>
                                                            <button type="button" id="aggree" class="btn btn-primary" onclick="move_trx_ven()">Aggree To Receive item and Qty</button>
                                                            <button type="button" class="btn btn-secondary">Refresh</button>
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
                    <script src="<?php echo base_url() ?>javascript_data/receiving_disubcount_input.js?<?php echo time() ?>"></script>