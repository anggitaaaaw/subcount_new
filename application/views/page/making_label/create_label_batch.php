
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
                                                        <h5>Create Label Batch</h5>
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
                                                    </ol>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- New Data -->
                                    <div class="modal fade" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" style="width: 1260px;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="demoModalLabel">New Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form class="forms-sample">
                                                    <div class="modal-body row">
                                                        <fieldset style="border: 1px solid gray; padding: 10px;" class="col-sm-6">
                                                            <div class="form-group row" style="margin: 1px;">
                                                                <label class="col-sm-3 col-form-label">SPK NO</label>
                                                                <div class="col-sm-8">
                                                                    <select class="form-control select2">
                                                                        <option value="cheese">SPK NO</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row" style="margin: 1px;">
                                                                <label class="col-sm-3 col-form-label">Product No</label>
                                                                <div class="col-sm-8">
                                                                    <input type="email" class="form-control" id="product_no">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Product Name</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control" id="product_name">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Tanggal</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text"  class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker" placeholder="Tanggal Mulai">
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control datetimepicker-input" id="datepicker2" data-toggle="datetimepicker" data-target="#datepicker2" placeholder="Tanggal Selesai">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Heat No</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" placeholder="Batch QTY">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Vendor ID</label>
                                                                <div class="col-sm-8">
                                                                    <select class="form-control select2">
                                                                        <option value="cheese">Vendor ID</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">LPP Status</label>
                                                                <div class="col-sm-4">
                                                                    <select class="form-control select2">
                                                                        <option value="cheese">Complete</option>
                                                                        <option value="cheese">Uncomplete</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">LPP No</label>
                                                                <div class="col-sm-4">
                                                                    <select class="form-control select2">
                                                                        <option value="cheese">Complete</option>
                                                                        <option value="cheese">Uncomplete</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Qty Packing</label>
                                                                <div class="col-sm-4">
                                                                    <input type="number" class="form-control" id="product_name">
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset style="border: 1px solid gray; padding: 10px;" class="col-sm-4">

                                                        </fieldset>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary">Simpan</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Print SJ -->
                                    <div class="modal fade" id="modal_printsj" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" style="width: 660px;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="demoModalLabel">Print SJ</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form class="forms-sample">
                                                    <div class="modal-body" style="height: 600px;">
                                                        <iframe src="<?php echo site_url('welcome/print_sj') ?>" id="iframe" style="border:none;" height="100%" width="100%;">

                                                        </iframe>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" id="print_sj" class="btn btn-primary">Print</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                          
                                    <!-- Print Label -->
                                    <div class="modal fade" id="modal_printlabel" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content" style="width: 900px; height: 720px">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="demoModalLabel">Print Label</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form class="forms-sample">
                                                    <div class="modal-body" style="height: 100%; width: 100%">
                                                         <iframe  id="iframe3" style="border:1px solid gray;" height="500px" width="800px;">
                                                         </iframe>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" id="print_label" class="btn btn-primary">Print</button>
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
                                                    <a class="btn btn-primary mr-2" href="<?php echo site_url('welcome/create_label_batch_input') ?>"><i class="ik ik-plus"></i>Label Batch</a>
                                                    <!--
                                                    <button data-toggle="modal" data-target="#modal_printlabel" class="btn btn-primary mr-2"><i class="ik ik-printer"></i>Cetak Label</button>
                                                    <button data-toggle="modal" data-target="#modal_printsj" class="btn btn-primary mr-2"><i class="ik ik-printer"></i>Cetak SJ</button>
                                                    -->
                                                    <br><br><br>
                                                    <div class="dt-responsive">
                                                        <table id="create_label_batch" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th>Detail</th>
                                                                    <th>Vendor</th>
                                                                    <th>SPK no</th>
                                                                    <th>Item No</th>
                                                                    <th>Item Name</th>
                                                                    <th>Capacity</th>
                                                                    <th>Batch Qty</th>
                                                                    <th>Create By</th>
                                                                    <th width="20">Action</th>
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
