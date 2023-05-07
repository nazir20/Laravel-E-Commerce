<div class="content-wrapper">
    <div class="row">
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <div class="row">
                    <div class="col-9">
                    <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">{{$total_users}}</h3>
                    </div>
                    </div>
                    <div class="col-3">
                    <div class="icon icon-box-success ">
                        <a href="{{url('/customers')}}">
                            <span class="mdi mdi-account-star text-warning icon-item"></span>
                        </a>
                    </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Total Customers</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <div class="row">
                    <div class="col-9">
                    <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">{{$total_product}}</h3>
                    </div>
                    </div>
                    <div class="col-3">
                    <div class="icon icon-box-success ">
                        <a href="{{route('admin.show_product')}}">
                            <span class="mdi mdi-basket text-info icon-item"></span>
                        </a>
                    </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Total Products</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">{{$total_orders}}</h3>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success">
                            <a href="{{route('admin.user_orders')}}">
                                <span class="mdi mdi-basket-fill text-success icon-item"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Total Active Orders</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="row">
                <div class="col-9">
                    <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">{{$delivered_orders}}</h3>
                    </div>
                </div>
                <div class="col-3">
                    <div class="icon icon-box-success">
                        <a href="{{route('admin.user_orders')}}">
                            <span class="mdi mdi-truck-delivery text-danger icon-item"></span>
                        </a>
                    </div>
                </div>
            </div>
            <h6 class="text-muted font-weight-normal">Orders Delivered</h6>
            </div>
        </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <div class="row">
                    <div class="col-9">
                    <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">{{$processing_orders}}</h3>
                    </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success">
                            <a href="{{route('admin.user_orders')}}">
                                <span class="mdi mdi-autorenew icon-item"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Orders Processing</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <div class="row">
                    <div class="col-9">
                    <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">${{$revenue}}</h3>
                    </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success">
                            <span class="mdi mdi-codepen text-danger icon-item"></span>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Revenue</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <div class="row">
                    <div class="col-9">
                    <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">{{$sold_products}}</h3>
                    </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success">
                            <span class="mdi mdi-sale text-warning icon-item"></span>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Sold Products Amount</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Doughnut chart</h4>
                <canvas id="doughnutChart" style="height:250px"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Bar chart</h4>
                <canvas id="barChart" style="height:230px"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
