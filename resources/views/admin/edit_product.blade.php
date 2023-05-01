<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin | Edit Product</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <form action="{{url('update_product',$product->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="card-body">
                            <h4 class="card-title">Edit Product Form</h4>
                            <p class="card-description"> Computer details </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Product Title</label>
                                        <div class="col-sm-9">
                                            <input value="{{$product->title}}" name="title" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Category</label>
                                        <div class="col-sm-9">
                                            <select name="category" class="form-control" required style="color: #fff">
                                                <option selected value="{{$product->category}}">{{$product->category}}</option>
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
                                            <input value="{{$product->screen_size}}" name="screen_size" placeholder="ex: 15,6 inc" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Screen Resolution</label>
                                        <div class="col-sm-9">
                                            <input value="{{$product->screen_resolution}}" name="screen_resolution" placeholder="ex: 1920x1080" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Screen Refresh Rate</label>
                                        <div class="col-sm-9">
                                            <input value="{{$product->screen_refresh_rate}}" name="screen_refresh_rate" placeholder="ex: 144 Hz" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Device Weight</label>
                                        <div class="col-sm-9">
                                            <input value="{{$product->device_weight}}" name="device_weight" placeholder="ex: 2KG" type="text" class="form-control" style="color: #fff" required/>
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
                                            <input value="{{$product->processor}}" name="processor" placeholder="ex: 12650H" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Processor Generation</label>
                                        <div class="col-sm-9">
                                            <input value="{{$product->processor_generation}}" name="processor_generation" placeholder="ex: 12" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Processor Type</label>
                                        <div class="col-sm-9">
                                            <input value="{{$product->processor_type}}" name="processor_type" placeholder="ex: Core i7" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Processor Speed</label>
                                        <div class="col-sm-9">
                                            <input value="{{$product->processor_speed}}" name="processor_speed" placeholder="ex: 2.4GH" type="text" class="form-control" style="color: #fff" required/>
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
                                            <input value="{{$product->graphics_type}}" name="graphics_type" placeholder="ex: Nvidia GeForce RTX" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Graphics Card Memory</label>
                                        <div class="col-sm-9">
                                            <input value="{{$product->graphics_card_memory}}" name="graphics_card_memory" placeholder="ex: 6GB" type="text" class="form-control" style="color: #fff" required/>
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
                                            <input value="{{$product->ram}}" name="ram" placeholder="ex: 16GB" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">SSD Capacity</label>
                                        <div class="col-sm-9">
                                            <input value="{{$product->ssd_capacity}}" name="ssd_capacity" placeholder="ex: 1TB" type="text" class="form-control" style="color: #fff" required/>
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
                                            <input value="{{$product->keyboard}}" name="keyboard" placeholder="ex: Q Turkish" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Color</label>
                                        <div class="col-sm-9">
                                            <input value="{{$product->color}}" name="color" placeholder="ex: Silver" type="text" class="form-control" style="color: #fff" required/>
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
                                            <input value="{{$product->price}}" name="price" placeholder="ex: $1200" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Discount Price</label>
                                        <div class="col-sm-9">
                                            <input value="{{$product->discount_price}}" name="discount_price" placeholder="ex: 10%" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Operating System</label>
                                        <div class="col-sm-9">
                                            <input value="{{$product->operating_system}}" name="operating_system" placeholder="ex: Windows 11 Pro" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Quantity</label>
                                        <div class="col-sm-9">
                                            <input value="{{$product->quantity}}" name="quantity" placeholder="ex: 20" type="text" class="form-control" style="color: #fff" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Product Image</label>
                                        <input id="image" type="file" name="image" class="file-upload-default">
                                        <div class="input-group col-sm-9">
                                            <input value="{{$product->image}}" type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
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
                                            <button type="submit" class="btn btn-info">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Product Image</label>
                                        <div class="input-group col-sm-9">
                                            <img id="showImage" style="width: 40%;border-radius: 3%;" src="/products_images/{{$product->image}}" alt="product_image">
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                };
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
  </body>
</html>