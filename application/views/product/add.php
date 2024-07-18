<!-- Begin Page Content -->
                <div class="container-fluid">                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Products</h6>
                            <a class="text-decoration-none" href="<?= $base_url.'product' ?>"><h6 class="m-0 font-weight-bold text-primary">View Products</h6></a>
                        </div>
                        <div class="card-body">
                            <form class="user" method="post" enctype="multipart/form-data" action="<?= $base_url ?>product/add">
                                        <div class="form-group">
                                            <input name="product_sku" required type="text"  class="form-control"
                                                placeholder="Product SKU">
                                        </div>
                                        <div class="form-group">
                                            <input name="product_name" required type="text" class="form-control"
                                                 placeholder="Product Name">
                                        </div>
                                        <div class="form-group">
                                            <select name="product_category" required type="text" class="form-control">
                                                <?php foreach($result_c as $row){ ?>
                                                <option><?= $row->product_category_slug ?></option>
                                            <?php } ?>
                                            </select> 
                                        </div>
                                        <div class="form-group">
                                             <input name="product_img" required type="file" style="width: 100px;">   &nbsp;&nbsp;<span class="text-danger font-weight-bold">ALERT: 500x550</span>
                                        </div>
                                        <div class="form-group">
                                                 <textarea rows="5" name="product_description" required type="text" class="form-control"
                                                 placeholder="Product Description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input name="product_price" required type="text" class="form-control"
                                                 placeholder="Product Price">
                                        </div>
                                       
                                        <button type="submit" class="btn btn-primary btn-user btn-block" >Submit</button>
                                        <hr>
                                       
                                    </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->