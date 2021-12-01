





@extends('layouts.admin')

@section('title', 'events')

@section('content')
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Events Reports</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Library
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->

    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-0">Browesr statistics</h5>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Назва</th>
                    <th scope="col">Значення</th>
                </tr>
                </thead>
                <tbody>
                @foreach($event as $name => $value)
                    <tr>
                        <td>{{$name}}</td>
                        <td>{{ $value }}</td>
                    </tr>

                @endforeach


                </tbody>
            </table>
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







