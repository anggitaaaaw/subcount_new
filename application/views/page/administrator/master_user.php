
                    <div class="wrapper">
                        <div class="page-wrap">
                            <div class="main-content">
                                <div class="container-fluid">
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <i class="ik ik-users bg-blue"></i>
                                                    <div class="d-inline">
                                                        <h5>Master User</h5>
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
                                                        <li class="breadcrumb-item"><a href="#">Administrator</a></li>
                                                        <li class="breadcrumb-item active"><a href="#">Master User</a></li>
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
                                               
                                                    <div class="modal-body">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">NIK <i style="color: red;">*</i></label>
                                                            <div class="col-sm-8">
                                                                <input type="text" required class="form-control" id="nik" name="nik">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Full Name <i style="color: red;">*</i></label>
                                                            <div class="col-sm-8">
                                                                <input type="text" required class="form-control" id="full_name" name="fullname">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Username <i style="color: red;">*</i></label>
                                                            <div class="col-sm-8">
                                                            <input type="text" required class="form-control" id="username" name="username">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Password <i style="color: red;">*</i></label>
                                                            <div class="col-sm-8">
                                                            <input type="password" required class="form-control" id="password" name="password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Position</label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control select2" id="position" name="position">
                                                                    <option value="" disabled selected>-SELECT POSITION-</option>
                                                                    <option value="administrator">Administrator</option>
                                                                    <option value="spv">Supervisor</option>
                                                                    <option value="staff">Staff</option>
                                                                    <option value="operator">Operator</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Group</label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control select2" id="group" name="group">
                                                                    <option value="" disabled selected>-SELECT GROUP-</option>
                                                                    <option value="indoseiki">Indoseiki</option>
                                                                    <option value="vendor">Vendor</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" id="div_vendor">
                                                            <label class="col-sm-3 col-form-label">Vendor Name</label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control select2" id="vendor" name="vendor">

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Status </label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control select2" id="status" name="status">
                                                                    <option value="" disabled selected>-SELECT STATUS-</option>
                                                                    <option value="aktif">Aktif</option>
                                                                    <option value="tidak_aktif">Tidak Aktif</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary" type="button" name="masuk" onclick="new_user()">Simpan</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal edit user -->
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
                                                            <label class="col-sm-3 col-form-label">NIK <i style="color: red;">*</i></label>
                                                            <div class="col-sm-8">
                                                                <input type="text" required class="form-control" id="edit_nik" name="nik">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Full Name <i style="color: red;">*</i></label>
                                                            <div class="col-sm-8">
                                                                <input type="text" required class="form-control" id="edit_full_name" name="full_name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Username <i style="color: red;">*</i></label>
                                                            <div class="col-sm-8">
                                                            <input type="text" required class="form-control" id="edit_username" name="username">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Password <i style="color: red;">*</i></label>
                                                            <div class="col-sm-8">
                                                            <input type="password" required class="form-control" id="edit_password" name="password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Position</label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control select2" id="edit_position" name="position">
                                                                    <option value="administrator">Administrator</option>
                                                                    <option value="spv">Supervisor</option>
                                                                    <option value="staff">Staff</option>
                                                                    <option value="operator">Operator</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Group</label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control select2" id="edit_group" name="group">
                                                                    <option value="indoseiki">Indoseiki</option>
                                                                    <option value="vendor">Vendor</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" id="div_edit_vendor">
                                                            <label class="col-sm-3 col-form-label">Vendor Name</label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control select2" id="edit_vendor" name="vendor">

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Status </label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control select2" id="edit_status" name="status">
                                                                    <option value="aktif">Aktif</option>
                                                                    <option value="tidak_aktif">Tidak Aktif</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" onclick="proses_edit_user()">Edit</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal-->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card" style="min-height: 484px;">
                                                <div class="card-body">
                                                    <button class="btn btn-primary mr-2" data-toggle="modal" data-target="#demoModal"><i class="ik ik-plus"></i>New Data</button>
                                                    <button class="btn btn-info mr-2" id="edit_user" data-toggle="modal"><i class="ik ik-edit"></i>Edit Data</button>
                                                    <button class="btn btn-danger mr-2" id="delete_user"><i class="ik ik-trash"></i>Delete</button>
                                                    <br><br><br>
                                                    <div class="dt-responsive">
                                                        <table id="example" class="table table-bordered nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th>NIK</th>
                                                                    <th>Full Name</th>
                                                                    <th>Username</th>
                                                                    <th>Password</th>
                                                                    <th>Position</th>
                                                                    <th>Group</th>
                                                                    <th>Status</th>
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
<script src="<?php echo base_url() ?>javascript_data/master_user.js?<?php echo time() ?>"></script>
