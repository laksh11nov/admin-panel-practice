<!-- Begin Page Content -->
                <div class="container-fluid">                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Products</h6>
                            <a class="text-decoration-none" href="<?= $base_url.'product/add' ?>"><h6 class="m-0 font-weight-bold text-primary">Add Products</h6></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Category</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Edit/Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($result_p as $row) { ?>
                                        <tr>
                                           <td><?= $row->product_sku ?></td>
                                            <td><?= $row->product_category_name ?></td>
                                            <td><?= $row->product_name ?></td>
                                            <td><a href="#" data-toggle="modal" data-target="#<?= $row->product_slug."-photo" ?>">View Photo</a></td>
                                            <td><a href="#" data-toggle="modal" data-target="#<?= $row->product_slug."-description" ?>">View Description</a></td>
                                            <td><?= $row->price ?></td>
                                            
                                            <td class="text-center">
                                                <a href="<?= $base_url.'product/edit/'.$row->product_id ?>" class="btn btn-warning btn-circle btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>            
                                                <a href="<?= $base_url.'product/delete/'.$row->product_id ?>" onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger btn-circle btn-sm">
                                                   <i class="fas fa-trash"></i>
                                               </a>
                                            </td>
                                        </tr>


                                            <!-- image Modal-->
                                                <div class="modal fade" id="<?= $row->product_slug."-photo" ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Photo</h5>
                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body"><img style="width: 100%;" src="<?= $base_url ?>assets/product/<?= $row->product_category_slug.'/'.$row->photo ?>"></div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- description Modal-->
                                                <div class="modal fade" id="<?= $row->product_slug."-description" ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Description</h5>
                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body"><?= $row->description ?></div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>







                                    <?php }; ?>
                                        
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->