
                    <div class="wrapper">
                        <div class="page-wrap">
                            <div class="main-content">
                                <div class="container-fluid">
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <i class="ik ik-settings bg-blue"></i>
                                                    <div class="d-inline">
                                                        <h5>Setting Vendor</h5>
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
                                                        <li class="breadcrumb-item"><a href="#">Master Data</a></li>
                                                        <li class="breadcrumb-item active"><a href="#">Setting Vendor</a></li>
                                                    </ol>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- New Data -->
                                    <div class="modal fade" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="demoModalLabel">New Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form id="myForm     " class="forms-sample">
                                                    <div class="modal-body">
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Item No </label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control select2" id="item_no" onchange="select_item_no(this.value)">
                                                                   
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label"> Description</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="item_name" name="item_name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Subcont Vendor </label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control select2" id="subcount_vendor" onchange="select_subcount_vendor(this.value)">
                                                                   
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Process Name </label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control select2" id="process_code" >
                                                                   
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Price</label>
                                                            <div class="col-sm-6">
                                                                <input type="number" class="form-control" id="price" name="price">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Lower Tolerance</label>
                                                            <div class="col-sm-6">
                                                                <input type="number" class="form-control" id="low_tolerance" name="low_tolerance">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Upper Tolerance</label>
                                                            <div class="col-sm-6">
                                                                <input type="number" class="form-control" id="up_tolerance" name="up_tolerance">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Leadtime</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="leadtime" name="leadtime">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Batch QTY </label>
                                                            <div class="col-sm-6">
                                                                <input type="number" class="form-control" id="batch_qty" name="batch_qty" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Capacity</label>
                                                            <div class="col-sm-6">
                                                                <input type="number" class="form-control" id="container_qty" name="container_qty" >
                                                            </div>
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary"name="masuk" onclick="new_set_vendor()">Simpan</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                        <!-- Edit Menu Data -->
                    
                                    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="demoModalLabel">Edit Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form id="myForm     " class="forms-sample">
                                          
                                                    <div class="modal-body">
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Item No </label>
                                                            <div class="col-sm-8">
                                                               <input type="text" class="form-control" id="edit_item_no" disabled="disabled">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label"> Description</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="edit_item_name" name="item_name">
                                                            </div>
                                                        </div>
                                                        <input type="hidden" id="edit_vendor_code">
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Subcont Vendor </label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control select2" id="edit_subcount_vendor" onchange="edit_select_subcount_vendor(this.value)">
                                                                   
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" id="edit_process">
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Process Name </label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control select2" id="edit_process_code" >
                                                                   
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Price</label>
                                                            <div class="col-sm-6">
                                                                <input type="number" class="form-control" id="edit_price" name="edit_price">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Lower Tolerance</label>
                                                            <div class="col-sm-6">
                                                                <input type="number" class="form-control" id="edit_low_tolerance" name="edit_low_tolerance">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Upper Tolerance</label>
                                                            <div class="col-sm-6">
                                                                <input type="number" class="form-control" id="edit_up_tolerance" name="edit_up_tolerance">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Leadtime</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="edit_leadtime" name="edit_leadtime">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Batch QTY </label>
                                                            <div class="col-sm-8">
                                                                <input type="number" class="form-control" id="edit_batch_qty" name="batch_qty" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Capacity</label>
                                                            <div class="col-sm-6">
                                                                <input type="number" class="form-control" id="edit_container_qty" name="container_qty" >
                                                            </div>
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary"name="masuk" onclick="proses_edit_set_vendor()">Simpan</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                            
                                <div class="row">
                                        <div class="col-md-12">
                                            <div class="card" style="min-height: 484px;">
                                                <div class="card-body">
                                                    <button class="btn btn-primary mr-2" data-toggle="modal" data-target="#demoModal"><i class="ik ik-plus"></i>New Data</button>
                                                    <button class="btn btn-info mr-2" id="edit_set_vendor" data-toggle="modal" ><i class="ik ik-edit"></i>Edit Data</button>
                                                    <button class="btn btn-danger mr-2" id="delete_set_vendor"><i class="ik ik-trash"></i>Delete</button>
                                                    <br><br><br>
                                                    <div class="dt-responsive">
                                                        <table id="example" class="table table-bordered nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th>Item No</th>
                                                                    <th>Description</th>
                                                                    <th>Subcont</th>
                                                                    <th>Process Name</th>
                                                                    <th>Leadtime</th>
                                                                    <th>Price</th>
                                                                    <th>Low Tolerance</th>
                                                                    <th>Up Tolerance</th>
                                                                    <th>Batch No</th>
                                                                    <th>Container QTY</th>
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
            <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
            <script src="<?php echo base_url() ?>javascript_data/mst_setting_vendor.js?<?php echo time() ?>"></script>
            