<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin | View Customers</title>
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
            <form action="{{url('/search-user')}}" class="nav-link mt-2 mt-md-0 d-none d-lg-flex search" method="GET">
              @csrf
              <input type="text" name="search" class="form-control" placeholder="Search Users" style="color: #fff">
            </form>
            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Customers</h4>
                        <div class="table-responsive">
                            <table class="table">
                            <thead>
                                <tr>
                                    <th> Client Name </th>
                                    <th> Email </th>
                                    <th> Phone </th>
                                    <th>Join Date</th>
                                    <th> Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$user->created_at}}</td>
                                        <td>
                                            <a href="{{url('delete-user',$user->id)}}" class="btn btn-info">Delete User</a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="16">
                                            <div class="text-center">
                                            <img style="width: 25%;height: 25%;" src="/user/assets/imgs/no-search-result.png" alt="no-search-result">
                                            <h4>No User Was Found!</h4>
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
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
    <!-- Custom js for this page -->
  </body>
</html>