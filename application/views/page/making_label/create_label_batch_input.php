
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
                                                        <h5>Create Label Batch Input</h5>
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
                                                        <li class="breadcrumb-item"><a href="#">Create Label Batch</a></li>
                                                        <li class="breadcrumb-item"><a href="#">Create Label Batch Input</a></li>
                                                    </ol>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card col-md-10" style="min-height: 484px;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <form id="myForm" class="forms-sample">
                                                        <div class="form-group row" style="margin: 1px;">
                                                            <label class="col-sm-3 col-form-label">Serial ID</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" readonly class="form-control" id="serial_id">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="margin: 1px;">
                                                            <label class="col-sm-3 col-form-label">SPK NO</label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control select2" id="spk_no" onchange="select_spk(this.value)"> 
                                                                    <option value="">-SELECT SPK NO-</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="margin: 1px;">
                                                            <label class="col-sm-3 col-form-label">Item Code</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="item_code">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="margin: 1px;">
                                                            <label class="col-sm-3 col-form-label">Description</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="deskripsi">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="margin: 1px;">
                                                            <label class="col-sm-3 col-form-label">Heat No A</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="heatno_a">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="margin: 1px;">
                                                            <label class="col-sm-3 col-form-label">Heat No B</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="heatno_b">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="margin: 1px;">
                                                            <label class="col-sm-3 col-form-label">LPP No</label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control select2" id="lpp_no" onchange="select_lpp_no(this.value)">
                                                                    <option value="">-SELECT LPP NO-</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="margin: 1px;">
                                                            <label class="col-sm-3 col-form-label">LPP Qty</label>
                                                            <div class="col-sm-4">
                                                                <input type="text" class="form-control" id="lpp_qty">
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="input-group">
                                                                    <input type="text" placeholder="Weight" class="form-control" id="weight">
                                                                    <span class="input-group-append" id="basic-addon3">
                                                                        <label class="input-group-text">Kg</label>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <Input type="hidden" id="user" value="<?php echo $this->session->userdata('username');?>" >
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <br>
                                                                <button type="button" class="btn btn-primary" ><i class="ik ik-plus"></i>Add Data</button>
                                                                <button type="button" class="btn btn-primary" onclick="save_data()"  ><i class="ik ik-save"></i>Save Data</button>
                                                                <button type="button" class="btn btn-success" id="edit_label" data-toggle="modal" ><i class="ik ik-edit"></i>Update Data</button>
                                                                <button type="button" class="btn btn-danger" id="delete_label" ><i class="ik ik-trash"></i>Delete Data</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="demoModalLabel">Edit Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                               <form class="forms-sample">
                                                        <div class="form-group row" style="margin: 1px;">
                                                            <label class="col-sm-3 col-form-label">SPK NO</label>
                                                            <div class="col-sm-8">
                                                                <input type="hidden" id="edit_id" >
                                                                <input type="hidden" id="edit_spk_id" >

                                                                <select class="form-control select2" id="edit_spk_no" onchange="select_spk_edit(this.value)"> 
                                                             
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="margin: 1px;">
                                                            <label class="col-sm-3 col-form-label">Item Code</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="edit_item_code">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="margin: 1px;">
                                                            <label class="col-sm-3 col-form-label">Description</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="edit_deskripsi">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="margin: 1px;">
                                                            <label class="col-sm-3 col-form-label">Heat No A</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="edit_heatno_a">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="margin: 1px;">
                                                            <label class="col-sm-3 col-form-label">Heat No B</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="edit_heatno_b">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="margin: 1px;">
                                                            <label class="col-sm-3 col-form-label">LPP No</label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control select2" id="edit_lpp_no" onchange="select_lpp_no_edit(this.value)">
                                                                   
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="margin: 1px;">
                                                            <label class="col-sm-3 col-form-label">LPP Qty</label>
                                                            <div class="col-sm-4">
                                                                <input type="text" class="form-control" id="edit_lpp_qty">
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="input-group">
                                                                    <input type="text" placeholder="Weight" class="form-control" id="edit_weight">
                                                                    <span class="input-group-append" id="basic-addon3">
                                                                        <label class="input-group-text">Kg</label>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       
                                                    </form>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" onclick="proses_edit_label()"  ><i class="ik ik-save"></i>Edit Data</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <iframe src="<?php echo site_url('welcome/print_label') ?>" id="iframe2" style="border:1px solid gray;" height="100%" width="100%;">

                                        </iframe>
                                        <button style="margin: 5px;" type="button" class="btn btn-primary" id="view_label_barcode"><i class="ik ik-file"></i>View Label</button>
                                        <button style="margin: 5px;" type="button" id="print_label" class="btn btn-primary"><i class="ik ik-printer"></i>Print Label</button>
                                    </div>
                                    <div class="col-md-12">
                                    <br><br><br><br>
                                        <div class="dt-responsive">
                                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>SPK No</th>
                                                        <th>LPP No</th>
                                                        <th>Item Code</th>
                                                        <th>Description</th>
                                                        <th>Heat No</th>
                                                        <th>Quantity</th>
                                                        <th>Weight</th>
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
        <script src="<?php echo base_url() ?>javascript_data/create_label_batch_input.js?<?php echo time() ?>"></script>

