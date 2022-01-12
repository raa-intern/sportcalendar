@extends('layouts.admin')
@section('title', 'charts')
@section('content')

<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Розділ: "Графіки"</h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard" title="Перехід на головну">
                            <h6><i>Dashboard-I</i></h6></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <i class="text-primary"><b>Графіки.</b></i>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Bread crumb and right sidebar toggle -->

<!-- Container fluid  -->
<!-- ================================ -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <!-- ================================ -->
    <!-- Cards -->
    <div class="row">
        <div class="col-md-3">
            <div class="card mt-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="peity_line_neutral left text-center mt-2">
                            <span><span style="display: none">10,15,8,14,13,10,10</span>
                                <canvas width="50" height="24"></canvas>
                            </span>
                            <h6>10%</h6>
                        </div>
                    </div>
                    <div class="col-md-6 border-left text-center pt-2">
                        <h3 class="mb-0 fw-bold">150</h3>
                        <span class="text-muted">Спорт-подій</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="peity_bar_bad left text-center mt-2">
                            <span><span style="display: none">3,5,6,16,8,10,6</span>
                                <canvas width="50" height="24"></canvas>
                            </span>
                            <h6>-40%</h6>
                        </div>
                    </div>
                    <div class="col-md-6 border-left text-center pt-2">
                        <h3 class="mb-0 fw-bold">4560</h3>
                        <span class="text-muted">Користувачів</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="peity_line_good left text-center mt-2">
                            <span><span style="display: none">12,6,9,23,14,10,17</span>
                                <canvas width="50" height="24"></canvas>
                            </span>
                            <h6>+60%</h6>
                        </div>
                    </div>
                    <div class="col-md-6 border-left text-center pt-2">
                        <h3 class="mb-0">3862</h3>
                        <span class="text-muted">Акт. Кор-чів</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="peity_bar_good left text-center mt-2">
                            <span>12</span>
                            <h6>+30%</h6>
                        </div>
                    </div>
                    <div class="col-md-6 border-left text-center pt-2">
                        <h3 class="mb-0 fw-bold">12560</h3>
                        <span class="text-muted">Зареєстровано</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End cards -->
    <!-- Chart-1 -->
   <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Графік активності користувачів в реальному часі</h5>
                    <div id="real-time" style="height: 400px"></div>
                    <p>
                        Встановленний проміжок часу між оновленнями:
                        <input id="updateInterval" type="text" value="" style="text-align: right; width: 5em" />
                        milliseconds
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- ENd chart-1 -->
    <!-- Chart-2 -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Turning-series chart</h5>
                    <div id="placeholder" style="height: 400px"></div>
                    <p id="choices" class="mt-3"></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Chart-2 -->

    <!-- Chart-3 -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bar Chart</h5>
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-line-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End chart-3 -->
    <!-- Charts -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pie Chart</h5>
                    <div class="pie" style="height: 400px"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Line Chart</h5>
                    <div class="bars" style="height: 400px"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================ -->
    <!-- End Charts -->
    <!-- ================================ -->
    <!-- End PAge Content -->

    <!-- ================================ -->
    <!-- Right sidebar -->
    <!-- ================================ -->
    <!-- .right-sidebar -->
    <!-- ================================ -->
    <!-- End Right sidebar -->
</div>
<!-- ================================ -->
<!-- End Container fluid  -->


@stop

@section('sidebar')
@parent
@endsection
