
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
                                                        <h5>Delivery Note</h5>
                                                        <span>Please enter Product no to Search data</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <nav class="breadcrumb-container" aria-label="breadcrumb">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item">
                                                            <a href="#"><i class="ik ik-home"></i></a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#">Delivery Note</a></li>
                                                    </ol>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card" style="min-height: 484px;">
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <div class="col-sm-5">
                                                            <a href="<?php echo site_url('welcome/delivery_note_input') ?>" class="btn btn-primary mr-2"><i class="ik ik-plus"></i>Create Delivery Note</a>
                                                            <a href="#" class="btn btn-primary mr-2"><i class="ik ik-upload"></i>Export to Excel</a>
                                                        </div>
                                                        <label class="col-sm-1 col-form-label">Search By</label>
                                                        <div class="col-sm-2">
                                                            <select class="form-control select2">
                                                                <option value="">-Status Delivery-</option>
                                                                <option value="all">All</option>
                                                                <option value="open">Open</option>
                                                                <option value="close">Close</option>
                                                                <option value="late">Late</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <select class="form-control select2">
                                                                <option value="dn_no">DN No</option>
                                                                <option value="product_no">Product No</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <input type="text" class="form-control" placeholder="What are you looking for" id="search_by">
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <button type="submit" class="btn btn-primary mr-2"><i class="ik ik-search"></i>Find</button>
                                                        </div>
                                                    </div>
                                                    <div class="dt-responsive">
                                                        <table id="delivery_note" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th width="5"></th>
                                                                    <th>DN No</th>
                                                                    <th>DN Date</th>
                                                                    <th>Vendor Name</th>
                                                                    <th>Plat No</th>
                                                                    <th>Driver</th>
                                                                    <th>Create By</th>
                                                                    <th>Last Update</th>
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
        <script src="<?php echo base_url() ?>javascript_data/delivery_note.js?"></script>