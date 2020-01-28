
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
                                                        <h5>Master Vendor</h5>
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
                                                        <li class="breadcrumb-item active"><a href="#">Master Vendor</a></li>
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
                                                <form id="myForm" class="forms-sample">
                                                    <div class="modal-body">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Vendor Code </label>
                                                            <div class="col-sm-4">
                                                                <input type="text" class="form-control" id="vendor_code" name="vendor_code" maxlength="6">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label"> Vendor Name</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="vendor_name" name="vendor_name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Vendor Address </label>
                                                            <div class="col-sm-8">
                                                                <textarea type="text" class="form-control" id="vendor_address" rows="3" name="vendor_address"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Contact Person </label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="contact_person" name="contact_person">
                                                            </div>
                                                        </div>
                                                       
                                                             
                                                           
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Email Contact</label>
                                                            <div class="col-sm-6">
                                                                <input type="email" class="form-control" id="email_contact" name="email_contact">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Batch QTY</label>
                                                            <div class="col-sm-4">
                                                                <input type="number" class="form-control" id="batch_qty" name="batch_qty">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Capacity</label>
                                                            <div class="col-sm-4">
                                                                <input type="text" class="form-control" id="standard_container" name="standard_container">
                                                            </div>
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary" type="button" name="masuk" onclick="new_vendor()">Simpan</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                        <!-- Edit Menu Data -->
                        
                                    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="demoModalLabel">Edit Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form class="forms-sample">
                                                    <div class="modal-body">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Vendor Code </label>
                                                            <div class="col-sm-4">
                                                                <input type="text" class="form-control" id="edit_vendor_code" name="vendor_code" minlength="6" maxlength="6">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label"> Vendor Name</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="edit_vendor_name" name="vendor_name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Vendor Address </label>
                                                            <div class="col-sm-8">
                                                                <textarea type="text" class="form-control" id="edit_vendor_address" rows="3" name="vendor_address"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Contact Person </label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="edit_contact_person" name="contact_person">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Email Contact</label>
                                                            <div class="col-sm-6">
                                                                <input type="email" class="form-control" id="edit_email_contact" name="email_contact">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Batch QTY</label>
                                                            <div class="col-sm-4">
                                                                <input type="number" class="form-control" id="edit_batch_qty" name="batch_qty">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">STD Container </label>
                                                            <div class="col-sm-4">
                                                                <input type="text" class="form-control" id="edit_standard_container" name="standard_container">
                                                            </div>
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" onclick="proses_edit_vendor()">Simpan</button>
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
                                                    <button class="btn btn-info mr-2" id="edit_vendor" data-toggle="modal" ><i class="ik ik-edit"></i>Edit Data</button>
                                                    <button class="btn btn-danger mr-2" id="delete_vendor"><i class="ik ik-trash"></i>Delete</button>
                                                    <br><br><br>
                                                    <div class="dt-responsive">
                                                        <table id="example" class="table table-bordered nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th>Vendor Code</th>
                                                                    <th>Vendor Name</th>
                                                                    <th>Vendor Address</th>
                                                                    <th>Contact Person</th>
                                                                    <th>Email Contact</th>
                                                                    <th>Batch QTY</th>
                                                                    <th>Standard Container</th>
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
            <script src="<?php echo base_url() ?>javascript_data/mst_vendor.js?"></script>
