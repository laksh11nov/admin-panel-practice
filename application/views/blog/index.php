<!-- Begin blog Content -->
                <div class="container-fluid">                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Blog</h6>
                            <a class="text-decoration-none" href="<?= $base_url.'blog/add' ?>"><h6 class="m-0 font-weight-bold text-primary">Add Blog</h6></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>blog Id</th>
                                            <th>blog Name</th>
                                            <th>blog Slug</th>
                                            <th>Edit/Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($result_p as $row) { ?>
                                        <tr>
                                            <td><?= $row->blog_sku ?></td>
                                            <td><?= $row->blog_category_name ?></td>
                                            <td><?= $row->blog_name ?></td>                           
                                            <td class="text-center">
                                                <a href="<?= $base_url.'blog/edit/'.$row->blog_id ?>" class="btn btn-warning btn-circle btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>            
                                                <a href="<?= $base_url.'blog/delete/'.$row->blog_id ?>" onclick="return confirm('Are you sure you want to delete this blog?')" class="btn btn-danger btn-circle btn-sm">
                                                   <i class="fas fa-trash"></i>
                                               </a>
                                            </td>
                                        </tr>
                                    <?php }; ?>
                                        
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->