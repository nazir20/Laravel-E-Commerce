<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin | Add Product</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.sidebar')
      <div class="container-fluid page-body-wrapper">
        @include('admin.navbar')
        <div class="main-panel">
          <div class="content-wrapper">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
            @endif
            <div class="text-center pt-4 pb-5">
                <h2>Add Product</h2>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <form action="{{route('admin.add_product')}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="card-body">
                            <h4 class="card-title">Add Product Form</h4>
                            <p class="card-description"> Computer details </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Product Title</label>
                                        <div class="col-sm-9">
                                            <input name="title" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Category</label>
                                        <div class="col-sm-9">
                                            <select name="category" class="form-control" required style="color: #fff">
                                                @foreach ($categories as $category)
                                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="card-description"> Screen </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Screen Size</label>
                                        <div class="col-sm-9">
                                            <input name="screen_size" placeholder="ex: 15,6 inc" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Screen Resolution</label>
                                        <div class="col-sm-9">
                                            <input name="screen_resolution" placeholder="ex: 1920x1080" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Screen Refresh Rate</label>
                                        <div class="col-sm-9">
                                            <input name="screen_refresh_rate" placeholder="ex: 144 Hz" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Device Weight</label>
                                        <div class="col-sm-9">
                                            <input name="device_weight" placeholder="ex: 2KG" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="card-description"> Processor </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Processor</label>
                                        <div class="col-sm-9">
                                            <input name="processor" placeholder="ex: 12650H" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Processor Generation</label>
                                        <div class="col-sm-9">
                                            <input name="processor_generation" placeholder="ex: 12" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Processor Type</label>
                                        <div class="col-sm-9">
                                            <input name="processor_type" placeholder="ex: Core i7" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Processor Speed</label>
                                        <div class="col-sm-9">
                                            <input name="processor_speed" placeholder="ex: 2.4GH" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="card-description"> Graphics </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Graphics Type</label>
                                        <div class="col-sm-9">
                                            <input name="graphics_type" placeholder="ex: Nvidia GeForce RTX" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Graphics Card Memory</label>
                                        <div class="col-sm-9">
                                            <input name="graphics_card_memory" placeholder="ex: 6GB" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="card-description">Memory</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">RAM</label>
                                        <div class="col-sm-9">
                                            <input name="ram" placeholder="ex: 16GB" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">SSD Capacity</label>
                                        <div class="col-sm-9">
                                            <input name="ssd_capacity" placeholder="ex: 1TB" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p class="card-description">External Details</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Keyboard</label>
                                        <div class="col-sm-9">
                                            <input name="keyboard" placeholder="ex: Q Turkish" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Color</label>
                                        <div class="col-sm-9">
                                            <input name="color" placeholder="ex: Silver" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="card-description">Other Details</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Price</label>
                                        <div class="col-sm-9">
                                            <input name="price" placeholder="ex: $1200" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Discount Price</label>
                                        <div class="col-sm-9">
                                            <input name="discount_price" placeholder="ex: 10%" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Operating System</label>
                                        <div class="col-sm-9">
                                            <input name="operating_system" placeholder="ex: Windows 11 Pro" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Quantity</label>
                                        <div class="col-sm-9">
                                            <input name="quantity" placeholder="ex: 20" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Product Image</label>
                                        <input type="file" name="image" class="file-upload-default" required>
                                        <div class="input-group col-sm-9">
                                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="input-group col-sm-9">
                                            <button type="submit" class="btn btn-info">Add Product</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>
          @include('admin.footer')
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/file-upload.js"></script>
    <script src="admin/assets/js/typeahead.js"></script>
    <script src="admin/assets/js/select2.js"></script>
  </body>
</html>