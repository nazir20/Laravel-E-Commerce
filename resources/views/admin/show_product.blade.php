<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin | Show Products</title>
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
    @include('sweetalert::alert');
    <div class="container-scroller">
      @include('admin.sidebar')
      <div class="container-fluid page-body-wrapper">
        @include('admin.navbar')
        <div class="main-panel">
          <div class="content-wrapper">
            
            <form action="{{url('/search-product')}}" class="nav-link mt-2 mt-md-0 d-none d-lg-flex search" method="GET">
              @csrf
              <input type="text" name="search" class="form-control" placeholder="Search products" style="color: #fff">
            </form>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">All Products</h4>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Product Image</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Discount Price</th>
                            <th>Quantity</th>
                            <th>Processor</th>
                            <th>RAM</th>
                            <th>SSD</th>
                            <th>Delete</th>
                            <th>Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse($products as $product)
                            <tr>
                                <td>
                                    <img src="products_images/{{$product->image}}" alt="image" />
                                </td>
                                <td>{{$product->category}}</td>
                                <td style="color: orange">${{$product->price}}</td>
                                <td class="text-success">${{$product->discount_price}} <i class="mdi mdi-arrow-up"></i></td>
                                <td class="text-danger">{{$product->quantity}}</td>
                                <td>{{$product->processor_type}} {{$product->processor}}</td>
                                <td>{{$product->ram}}</td>
                                <td>{{$product->ssd_capacity}}</td>
                                <td>
                                    <a href="{{url('delete_product',$product->id)}}" style="font-size: 25px; color:#FF6D60"><i class="mdi mdi-delete-sweep"></i></a>
                                </td>
                                <td>
                                    <a href="{{url('edit_product',$product->id)}}" style="font-size: 20px;color:#7149C6"><i class="mdi mdi-tooltip-edit"></i></a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                              <td colspan="16">
                                <div class="text-center">
                                  <img style="width: 25%;height: 25%;" src="/user/assets/imgs/no-search-result.png" alt="no-search-result">
                                  <h4>No Product Was Found!</h4>
                                </div>
                              </td>
                            </tr>
                          @endforelse
                        </tbody>
                      </table>
                    </div>
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
  </body>
</html>