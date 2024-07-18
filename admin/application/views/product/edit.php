<!-- Begin Page Content -->
<?php foreach ($product_data as $value) { ?>
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Products</h6>
                <a class="text-decoration-none" href="<?= $base_url.'product/add' ?>"><h6 class="m-0 font-weight-bold text-primary">Add Products</h6></a>
            </div>
            <div class="card-body">
                <form class="user" method="post" enctype="multipart/form-data" action="<?= $base_url ?>product/edit/<?= $value->product_id ?>">
                    <div class="form-group">
                        <input name="product_sku" value="<?= $value->product_sku ?>" type="text" class="form-control"
                            placeholder="Product SKU">
                    </div>
                    <div class="form-group">
                        <input name="product_name" value="<?= $value->product_name ?>" type="text" class="form-control"
                            placeholder="Product Name">
                    </div>
                    <div class="form-group">
                        <select name="product_category" class="form-control">
                            <option><?= $value->product_category_slug ?></option>
                            <?php foreach($result_c as $row){ ?>
                                <option><?= $row->product_category_slug ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input name="pre_photo" value="<?= $value->photo ?>" type="hidden" class="form-control"
                            placeholder="Product SKU">
                    </div>
                    <div class="form-group">
                        <input name="product_img" type="file" style="width: 100px;"> <a href="#" data-toggle="modal" data-target="#<?= $value->product_slug."-photo" ?>">View Photo</a> &nbsp;&nbsp;<span class="text-danger font-weight-bold">ALERT: 500x550</span>
                    </div>
                    <div class="form-group">
                        <textarea rows="5" name="product_description" type="text" class="form-control"
                            placeholder="Product Description"><?= $value->description ?></textarea>
                    </div>
                    <div class="form-group">
                        <input name="product_price" value="<?= $value->price ?>" type="text" class="form-control"
                            placeholder="Product Price">
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
                    <hr>

                </form>
            </div>
        </div>

    </div>

    <!-- image Modal-->
  <div class="modal fade" id="<?= $value->product_slug."-photo" ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Photo</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </div>
              <div class="modal-body"><img style="width: 100%;" src="<?= $base_url ?>assets/product/<?= $value->product_category_slug.'/'.$value->photo ?>"></div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              </div>
          </div>
      </div>
  </div>


    <!-- /.container-fluid -->
<?php } ?>
