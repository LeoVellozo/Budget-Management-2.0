<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    
    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
    <div class="dashboard-wrapper">
        <div class="dashboard-finance">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                {{-- <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h3 class="mb-2">Finance Dashboard </h3>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Finance Dashboard Template</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="offset-xl-10 col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12">
                        <form>
                            <div class="form-group">
                                <input class="form-control" type="text" name="daterange" value="01/01/2018 - 01/15/2018" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Total Income</h5>
                            <div class="card-body">
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">$5,79,000</h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                    <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">25%</span>
                                </div>
                            </div>
                            <div class="card-body bg-light p-t-40 p-b-40">
                                <div id="sparkline-revenue"></div>
                            </div>
                            <div class="card-footer text-center bg-white">
                                <a href="#" class="card-link">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Total Expences</h5>
                            <div class="card-body">
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">$1,79,000</h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                    <span class="icon-circle-small icon-box-xs text-danger bg-danger-light"><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">15%</span>
                                </div>
                            </div>
                            <div class="card-body text-center bg-light p-t-40 p-b-40">
                                <div id="sparkline-revenue2"></div>
                            </div>
                            <div class="card-footer text-center bg-white">
                                <a href="#" class="card-link">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Cash on Hand</h5>
                            <div class="card-body">
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">$79,000</h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                    <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">25%</span>
                                </div>
                            </div>
                            <div class="card-body bg-light p-t-40 p-b-40">
                                <div id="sparkline-revenue3"></div>
                            </div>
                            <div class="card-footer text-center bg-white">
                                <a href="#" class="card-link">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Net Profit Margin</h5>
                            <div class="card-body">
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">$92,000</h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                    <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span> <span class="ml-1">25%</span>
                                </div>
                            </div>
                            <div class="card-body bg-light p-b-40 p-t-40">
                                <div id="sparkline-revenue4"></div>
                            </div>
                            <div class="card-footer text-center bg-white">
                                <a href="#" class="card-link">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end revenue year  -->
                <!-- ============================================================== -->
                
            </div>            
            <div class="row">
                <!-- ============================================================== -->
                <!-- basic table  -->
                <!-- ============================================================== -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Last Releases</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered first">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                    </tbody>                                   
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end basic table  -->
                <!-- ============================================================== -->
            </div>                 
        </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>. 
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end footer -->
        <!-- ============================================================== -->
    </div>
</x-app-layout>
