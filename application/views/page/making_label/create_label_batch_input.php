
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

                                    <div class="card col-md-8" style="min-height: 484px;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <form class="forms-sample">
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
                                                                <input type="email" class="form-control" id="item_code">
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
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <br>
                                                                <button type="button" class="btn btn-primary" onclick="reload()">Add Data</button>
                                                                <button type="button" class="btn btn-primary" onclick="save_data()">Save Data</button>
                                                                <button type="button" class="btn btn-primary">View Label Batch</button>
                                                                <button type="button" id="print_label" class="btn btn-primary">Print Label Batch</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-4">
                                                    <iframe src="<?php echo site_url('welcome/print_label') ?>" id="iframe2" style="border:1px solid gray;" height="100%" width="100%;">

                                                    </iframe>
                                                </div>
                                                <div class="col-md-12">
                                                <br><br>
                                                    <div class="dt-responsive">
                                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th>SPK No</th>
                                                                    <th>LPP No</th>
                                                                    <th>Item Code</th>
                                                                    <th>Description</th>
                                                                    <th>Heat No</th>
                                                                    <th>Quantity</th>
                                                                    <th width="20">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>SPK No</td>
                                                                    <td>Batch No</td>
                                                                    <td>Item Code</td>
                                                                    <td>Description</td>
                                                                    <td>UoM</td>
                                                                    <td>Heat No</td>
                                                                    <td>
                                                                        <div class="table-actions">
                                                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                                                        </div>
                                                                    </td>
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
<script src="<?php echo base_url() ?>javascript_data/create_label_batch_input.js"></script>