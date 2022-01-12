@extends('layouts.admin')
@section('title', 'widgets')
@section('content')

<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Віджети</h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard" title="Перехід на головну">
                            <h6><i>Dashboard-I</i></h6></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <i class="text-primary"><b>Віджети.</b></i>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Bread crumb and right sidebar toggle -->

<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row el-element-overlay">

        @foreach ($widgets as $widget)
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1">
                        <img src="/admin/assets/images/intro/{{ $widget->image_intro }}" alt="image_intro not found!" />
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item">
                                    <a class="btn default btn-outline image-popup-vertical-fit el-link"
                                    href="/admin/assets/images/full/{{ $widget->image_full }}"><i class="mdi mdi-magnify-plus"></i></a>
                                </li>
                                <li class="el-item">
                                    <a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="el-card-content">
                        <h4 class="mb-0">{{ $widget->event_name }}</h4>
                        <span class="text-muted">{{ $widget->event_type }}</span>
                    </div>
                    <div style="text-align: center">
                        <button type="button" class="btn btn-cyan btn-sm text-white"> Показати подію </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

@stop

@section('sidebar')
@parent
@endsection
