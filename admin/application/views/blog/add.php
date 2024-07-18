<!-- Begin blog Content -->
                <div class="container-fluid">                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Blog</h6>
                            <a class="text-decoration-none" href="<?= $base_url.'blog/index' ?>"><h6 class="m-0 font-weight-bold text-primary">View blog</h6></a>
                        </div>
                        <div class="card-body">
                            <form class="user" method="post" enctype="multipart/form-data" action="<?= $base_url ?>">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                            <input name="blog_name" type="text"  class="form-control"
                                                placeholder="blog Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input name="blog_slug" type="text"  class="form-control"
                                                placeholder="blog Slug">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input name="thumb_photo" type="file" style="width: 100px;"> <span class="fw-bold text-primary ">Thumbnail Photo</span>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input name="banner_photo" type="file" style="width: 100px;"> <span class="fw-bold text-primary ">Banner Photo</span>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                                 <textarea rows="3" name="short_content" required type="text" class="form-control"
                                                 placeholder="Short Content"></textarea>
                                        </div>
                                        <div class="form-group">
                                                 <textarea rows="5" id="fullcontent" name="full_content" required type="text" class="form-control"
                                                 placeholder="Full blog Content"></textarea>
                                        </div>                              
                                       
                                        <button type="submit" class="btn btn-primary btn-user btn-block" >Submit</button>
                                        <hr>
                                       
                                    </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->