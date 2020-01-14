
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
                                                        <h5>Delivery From Subcount</h5>
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
                                                        <li class="breadcrumb-item"><a href="#">Making Labels</a></li>
                                                        <li class="breadcrumb-item active" aria-current="page">Delivery from subcount</li>
                                                    </ol>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Create Delivery Note -->
                                    <div class="modal fade" id="md_delivery_note" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" style="width: 1000px;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="demoModalLabel">Print Label</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form class="forms-sample">
                                                    <div class="modal-body">

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
                                                    <div class="form-group row">
                                                        <div class="col-sm-5">
                                                            <button data-toggle="modal" data-target="#md_delivery_note" class="btn btn-primary mr-2"><i class="ik ik-plus"></i>Create Delivery Note</button>
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
                                                        <table id="simpletable2" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th>SPK No</th>
                                                                    <th>LPP No</th>
                                                                    <th>Product No</th>
                                                                    <th>Product Name</th>
                                                                    <th>Heat No</th>
                                                                    <th>Qty Packing</th>
                                                                    <th>Di Buat</th>
                                                                    <th>Tgl Pembuatan</th>
                                                                    <th width="20">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>105222000689220</td>
                                                                    <td>20195520033</td>
                                                                    <td>0112</td>
                                                                    <td>Lorem Ipsum</td>
                                                                    <td>2838001</td>
                                                                    <td>3000</td>
                                                                    <td>Michael</td>
                                                                    <td>2011/04/25</td>
                                                                    <td>
                                                                        <div class="table-actions">
                                                                            
                                                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>105222000689220</td>
                                                                    <td>20195520033</td>
                                                                    <td>0112</td>
                                                                    <td>Lorem Ipsum</td>
                                                                    <td>2838001</td>
                                                                    <td>3000</td>
                                                                    <td>Michael</td>
                                                                    <td>2011/04/25</td>
                                                                    <td>
                                                                        <div class="table-actions">
                                                                            
                                                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>105222000689220</td>
                                                                    <td>20195520033</td>
                                                                    <td>0112</td>
                                                                    <td>Lorem Ipsum</td>
                                                                    <td>2838001</td>
                                                                    <td>3000</td>
                                                                    <td>Michael</td>
                                                                    <td>2011/04/25</td>
                                                                    <td>
                                                                        <div class="table-actions">
                                                                            
                                                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>105222000689220</td>
                                                                    <td>20195520033</td>
                                                                    <td>0112</td>
                                                                    <td>Lorem Ipsum</td>
                                                                    <td>2838001</td>
                                                                    <td>3000</td>
                                                                    <td>Michael</td>
                                                                    <td>2011/04/25</td>
                                                                    <td>
                                                                        <div class="table-actions">
                                                                            
                                                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>105222000689220</td>
                                                                    <td>20195520033</td>
                                                                    <td>0112</td>
                                                                    <td>Lorem Ipsum</td>
                                                                    <td>2838001</td>
                                                                    <td>3000</td>
                                                                    <td>Michael</td>
                                                                    <td>2011/04/25</td>
                                                                    <td>
                                                                        <div class="table-actions">
                                                                            
                                                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>105222000689220</td>
                                                                    <td>20195520033</td>
                                                                    <td>0112</td>
                                                                    <td>Lorem Ipsum</td>
                                                                    <td>2838001</td>
                                                                    <td>3000</td>
                                                                    <td>Michael</td>
                                                                    <td>2011/04/25</td>
                                                                    <td>
                                                                        <div class="table-actions">
                                                                            
                                                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>105222000689220</td>
                                                                    <td>20195520033</td>
                                                                    <td>0112</td>
                                                                    <td>Lorem Ipsum</td>
                                                                    <td>2838001</td>
                                                                    <td>3000</td>
                                                                    <td>Michael</td>
                                                                    <td>2011/04/25</td>
                                                                    <td>
                                                                        <div class="table-actions">
                                                                            
                                                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>105222000689220</td>
                                                                    <td>20195520033</td>
                                                                    <td>0112</td>
                                                                    <td>Lorem Ipsum</td>
                                                                    <td>2838001</td>
                                                                    <td>3000</td>
                                                                    <td>Michael</td>
                                                                    <td>2011/04/25</td>
                                                                    <td>
                                                                        <div class="table-actions">
                                                                            
                                                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>105222000689220</td>
                                                                    <td>20195520033</td>
                                                                    <td>0112</td>
                                                                    <td>Lorem Ipsum</td>
                                                                    <td>2838001</td>
                                                                    <td>3000</td>
                                                                    <td>Michael</td>
                                                                    <td>2011/04/25</td>
                                                                    <td>
                                                                        <div class="table-actions">
                                                                            
                                                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>105222000689220</td>
                                                                    <td>20195520033</td>
                                                                    <td>0112</td>
                                                                    <td>Lorem Ipsum</td>
                                                                    <td>2838001</td>
                                                                    <td>3000</td>
                                                                    <td>Michael</td>
                                                                    <td>2011/04/25</td>
                                                                    <td>
                                                                        <div class="table-actions">
                                                                            
                                                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>105222000689220</td>
                                                                    <td>20195520033</td>
                                                                    <td>0112</td>
                                                                    <td>Lorem Ipsum</td>
                                                                    <td>2838001</td>
                                                                    <td>3000</td>
                                                                    <td>Michael</td>
                                                                    <td>2011/04/25</td>
                                                                    <td>
                                                                        <div class="table-actions">
                                                                            
                                                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>105222000689220</td>
                                                                    <td>20195520033</td>
                                                                    <td>0112</td>
                                                                    <td>Lorem Ipsum</td>
                                                                    <td>2838001</td>
                                                                    <td>3000</td>
                                                                    <td>Michael</td>
                                                                    <td>2011/04/25</td>
                                                                    <td>
                                                                        <div class="table-actions">
                                                                            
                                                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr><tr>
                                                                    <td>105222000689220</td>
                                                                    <td>20195520033</td>
                                                                    <td>0112</td>
                                                                    <td>Lorem Ipsum</td>
                                                                    <td>2838001</td>
                                                                    <td>3000</td>
                                                                    <td>Michael</td>
                                                                    <td>2011/04/25</td>
                                                                    <td>
                                                                        <div class="table-actions">
                                                                            
                                                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>105222000689220</td>
                                                                    <td>20195520033</td>
                                                                    <td>0112</td>
                                                                    <td>Lorem Ipsum</td>
                                                                    <td>2838001</td>
                                                                    <td>3000</td>
                                                                    <td>Michael</td>
                                                                    <td>2011/04/25</td>
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
