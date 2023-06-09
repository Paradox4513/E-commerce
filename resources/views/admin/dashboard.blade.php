@extends('admin.layout.base')
@section('title', 'Dashboard')
@section('data-page-id', 'adminDashboard')



@section('content')
    <div class="dashboard admin_shared">
        <div class="grid-x collapse" data-equalizar data-equalizar-on="medium">


        <!-- //Order sumary -->
            <div class="small-12 medium-3 summary" data-equalizar-wath>
                <div class="card">
                    <div class="card-section">
                        <div class="row">
                            <div class="small-3 cell">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                            <div class="small-9 cell">
                                <p>Total Orders</p><h4>{{ $orders}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-divider">
                        <div class="row cell">
                            <a href='#'>Order Details</a>
                        </div>
                    </div>

                </div>

            </div>



            <!-- //Stock sumary -->
            <div class="small-12 medium-3 summary" data-equalizar-wath>
                <div class="card">
                    <div class="card-section">
                        <div class="row">
                            <div class="small-3 cell">
                                <i class="fa fa-thermometer-empty" aria-hidden="true"></i>
                            </div>
                            <div class="small-9 cell">
                                <p>Stock</p><h4>{{$products}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-divider">
                        <div class="row cell">
                            <a href='/admin/products'>View Products</a>
                        </div>
                    </div>

                </div>

            </div>



            <!-- //Revenue sumary -->
            <div class="small-12 medium-3 summary" data-equalizar-wath>
                <div class="card">
                    <div class="card-section">
                        <div class="row">
                            <div class="small-3 cell">
                                <i class="fa fa-money" aria-hidden="true"></i>
                            </div>
                            <div class="small-9 cell">
                                <p>Revenue</p><h4>${{number_format($payments, 2)}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-divider">
                        <div class="row cell">
                            <a href='#'>Payment Details</a>
                        </div>
                    </div>

                </div>

            </div>




            <!-- //Sign up sumary -->
            <div class="small-12 medium-3 summary" data-equalizar-wath>
                <div class="card">
                    <div class="card-section">
                        <div class="row">
                            <div class="small-3 cell">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                            <div class="small-9 cell">
                                <p>Signup</p><h4>{{$users}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-divider">
                        <div class="row cell">
                            <a href='#'>Registered Users</a>
                        </div>
                    </div>

                </div>

            </div>

     
        </div>




        <div class="row collapse expanded graph">
            <div class="small-12 medium-6 cell monthly-sales">
                <div class="card">
                    <div class="card-section">
                        <h4>Monthly Orders</h4>
                        <canvas id="order"></canvas>
                    </div>
                </div>
            </div>


            <div class="small-12 medium-6 cell monthly-revenue">
                <div class="card">
                    <div class="card-section">
                        <h4>Monthly Revenue</h4>
                        <canvas id="revenue"></canvas>
                    </div>
                </div>
            </div>


            
        </div>
    </div>
@endsection