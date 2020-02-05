
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
                                                        <h5>Setting User</h5>
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
                                                        <li class="breadcrumb-item active"><a href="#">Setting User</a></li>
                                                    </ol>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card" style="min-height: 484px;">
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Find User</label>
                                                        <div class="col-sm-6">
                                                            <select class="form-control select2" id="username" name="parent_menu">
                                                                <option value="hilmanf11">HILMAN FADILLAH | hilmanf11</option>
                                                                <option value="anggita123">Anggita Febriani | anggita123</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <button type="button" class="btn btn-primary" onclick="generate_menu()">Generate</button>
                                                        </div>
                                                    </div>
                                                    <br><br><br>
                                                    <div class="dt-responsive">
                                                        <table  class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th>Parent Menu</th>
                                                                    <th>Menu Name</th>
                                                                    <th width="30">Access</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="table_menu">
                                                                <tr>
                                                                    <td>No Parent</td>
                                                                    <td>Dashboard</td>
                                                                    <td><input type="checkbox" name="" id=""/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>No Parent</td>
                                                                    <td>Administrator</td>
                                                                    <td><input type="checkbox" name="" id=""/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Administrator</td>
                                                                    <td>Setting Menu</td>
                                                                    <td><input type="checkbox" name="" id=""/></td>
                                                                </tr>
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
            <script src="<?php echo base_url() ?>javascript_data/setting_user.js?<?php echo time() ?>"></script>