<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin | Orders</title>
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
            <form action="{{url('/search-order')}}" class="nav-link mt-2 mt-md-0 d-none d-lg-flex search" method="GET">
              @csrf
              <input type="text" name="search" class="form-control" placeholder="Search By Tracking ID" style="color: #fff">
            </form>
            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Users Orders</h4>
                        <div class="table-responsive">
                            <table class="table">
                            <thead>
                                <tr>
                                    <th> Tracking ID </th>
                                    <th> Email </th>
                                    <th> Phone </th>
                                    <th> Price </th>
                                    <th> Payment Status </th>
                                    <th> Delivery Status </th>
                                    <th> Image</th>
                                    <th> Order Date</th>
                                    <th>Bill</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{$order->tracking_id}}</td>
                                        <td>{{$order->email}}</td>
                                        <td>{{$order->phone}}</td>
                                        <td>({{$order->quantity}}){{$order->price}}</td>
                                        <td>
                                            <div class="badge badge-outline-success">{{$order->payment_status}}</div>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <button class="btn btn-sm btn-outline-warning dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$order->delivery_status}}</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ url('/update-order/'.$order->user_id.'/'.$order->id.'/processing') }}">Processing</a>
                                                    <a class="dropdown-item" href="{{ url('/update-order/'.$order->user_id.'/'.$order->id.'/pending') }}">Pending</a>
                                                    <a class="dropdown-item" href="{{ url('/update-order/'.$order->user_id.'/'.$order->id.'/packaging') }}">Packaging</a>
                                                    <a class="dropdown-item" href="{{ url('/update-order/'.$order->user_id.'/'.$order->id.'/shipped') }}">Shipped</a>
                                                    <a class="dropdown-item" href="{{ url('/update-order/'.$order->user_id.'/'.$order->id.'/on_the_way') }}">On The Way</a>
                                                    <a class="dropdown-item" href="{{ url('/update-order/'.$order->user_id.'/'.$order->id.'/delivered') }}">Delivered</a>
                                                    <a class="dropdown-item" href="{{ url('/update-order/'.$order->user_id.'/'.$order->id.'/cancel_order') }}">Cancel Order</a>  
                                                </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="products_images/{{$order->image}}" alt="image" />
                                        </td>
                                        <td>{{$order->created_at}}</td>
                                        <td>
                                            <a href="{{url('print-bill', $order->id)}}" class="btn btn-outline-info">Print Bill</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
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