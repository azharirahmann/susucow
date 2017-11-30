@extends('backend.layouts.app')

@section('title', 'Home')

@section('header_script')
    <script src="{{ asset('dash/js/Chart.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
    <!-- Chartinator  -->
    <script src="js/chartinator.js" ></script>
    <script type="text/javascript">
        jQuery(function ($) {

            var chart3 = $('#geoChart').chartinator({
                tableSel: '.geoChart',

                columns: [{role: 'tooltip', type: 'string'}],

                colIndexes: [2],

                rows: [
                    ['China - 2015'],
                    ['Colombia - 2015'],
                    ['France - 2015'],
                    ['Italy - 2015'],
                    ['Japan - 2015'],
                    ['Kazakhstan - 2015'],
                    ['Mexico - 2015'],
                    ['Poland - 2015'],
                    ['Russia - 2015'],
                    ['Spain - 2015'],
                    ['Tanzania - 2015'],
                    ['Turkey - 2015']],

                ignoreCol: [2],

                chartType: 'GeoChart',

                chartAspectRatio: 1.5,

                chartZoom: 1.75,

                chartOffset: [-12,0],

                chartOptions: {

                    width: null,

                    backgroundColor: '#fff',

                    datalessRegionColor: '#F5F5F5',

                    region: 'world',

                    resolution: 'countries',

                    legend: 'none',

                    colorAxis: {

                        colors: ['#679CCA', '#337AB7']
                    },
                    tooltip: {

                        trigger: 'focus',

                        isHtml: true
                    }
                }
            });
        });
    </script>
    <!--geo chart-->

@endsection

@section('content')
    <div class="col-md-12">
        <div class="market-updates">
            <div class="col-md-4 market-update-gd">
                <div class="market-update-block clr-block-1">
                    <div class="col-md-8 market-update-left">
                        <h3>83</h3>
                        <h4>Total Order</h4>
                    </div>
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-file-text-o"> </i>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 market-update-gd">
                <div class="market-update-block clr-block-2">
                    <div class="col-md-8 market-update-left">
                        <h3>135</h3>
                        <h4>Daily Visitors</h4>
                    </div>
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-eye"> </i>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 market-update-gd">
                <div class="market-update-block clr-block-3">
                    <div class="text-right">
                        <h3>23.125 <i class="fa fa-dollar"></i> </h3>
                        <h4>Outcome</h4>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <br>
        <div class="chit-chat-layer1">
            <div class="col-md-12 chit-chat-layer1-left">
                <div class="work-progres">
                    <div class="chit-chat-heading">
                        Recent Followers
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Tanggal</th>
                                <th>Full Name</th>
                                <th>Meja</th>
                                <th>Status</th>
                                <th> </th>
                                <th>Checklist</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>27 November 2017</td>
                                <td>Malorum</td>
                                <td>10</td>

                                <td><span class="label label-danger">in progress</span></td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info disabled">List Menu</button>
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Ayam Mozarella</a></li>
                                            <li><a href="#">Nasi Goreng</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Strawberry Milkshake</a></li>
                                            <li><a href="#">Es Teh</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success">
                                        <i class="fa fa-check"></i> Check
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>28 November 2017</td>
                                <td>Evan</td>
                                <td>11</td>
                                <td><span class="label label-success">completed</span></td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info disabled">List Menu</button>
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Ayam Bakar</a></li>
                                            <li><a href="#">Mie Goreng</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Choco Vanilla Milk</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success disabled">
                                        <i class="fa fa-check"></i> Done
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>29 November 2017</td>
                                <td>John</td>
                                <td>01</td>
                                <td><span class="label label-warning">in progress</span></td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info disabled">List Menu</button>
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Indomie Double Goreng</a></li>
                                            <li><a href="#">Kentang Goreng</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Orange Juice</a></li>
                                            <li><a href="#">Guava Juice</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success">
                                        <i class="fa fa-check"></i> Check
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>30 November 2017</td>
                                <td>Danial</td>
                                <td>04</td>
                                <td><span class="label label-info">in progress</span></td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info disabled">List Menu</button>
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Bebek Bakar</a></li>
                                            <li><a href="#">Nasi Kucing</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Vanilla Milkshake</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success">
                                        <i class="fa fa-check"></i> Check
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>1 Desember 2017</td>
                                <td>David</td>
                                <td>06</td>
                                <td><span class="label label-warning">in progress</span></td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info disabled">List Menu</button>
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Bakmi Djogja</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Es Teh</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success">
                                        <i class="fa fa-check"></i> Check
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <br>
        <div class="main-page-charts">
            <div class="main-page-chart-layer1">
                <div class="col-md-12">
                    <div class="glocy-chart">
                        <h3 class="tlt">Sales Analytics</h3>
                        <canvas id="bar" style="width: 100%; height: 100%;"></canvas>
                        <script>
                            var barChartData = {
                                labels : ["Jan","Feb","Mar","Apr","May","Jun","jul"],
                                datasets : [
                                    {
                                        fillColor : "#FC8213",
                                        data : [65,59,90,81,56,55,40]
                                    },
                                    {
                                        fillColor : "#337AB7",
                                        data : [28,48,40,19,96,27,100]
                                    }
                                ]

                            };
                            new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);

                        </script>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <br>
    </div>
    <div class="clearfix"> </div>
@endsection