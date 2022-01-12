@extends('layouts.admin')
@section('title', 'parser')
@section('content')

<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Розділ: "Парсери"</h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard" title="Перехід на головну">
                            <h6><i>Dashboard-I</i></h6></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <i class="text-primary"><b>Парсери.</b></i>
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
    @if(isset($delete))
    <div class="card">
        <div class="card-body">
            <div class="alert alert-success" role="alert">
                Видалення успішно виконано !
            </div>
        </div>
    </div>
    @endif
    @if(isset($create))
    <div class="card">
        <div class="card-body">
            <div class="alert alert-success" role="alert">
                Створення успішно виконано !
            </div>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h5 class="card-title">Результат роботи парсерів <strong>Sportcalendar</strong></h5>
                        <form action="{{ route('event_create') }}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-cyan btn-sm text-white submit">Перейти в Додані події!</button>
                        </form>

                    </div>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Назва</th>
                                    <th>Категорія</th>
                                    <th>Місто</th>
                                    <th>Тип події</th>
                                    <th>Адреса</th>
                                    <th>Дата</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach($events as $event)
                                <tr>
                                    <td>{{ $event->event_name }}</td>
                                    <td>{{ $event->category_id }}</td>
                                    <td>{{ $event->city }}</td>
                                    <td>{{ $event->event_type }}</td>
                                    <td>{{ $event->street }}</td>
                                    <td>{{ $event->start_date }}</td>
                                    <td>
                                        <i class="mdi mdi-television-guide"></i><a href="/event/show/{{$event->id}}" aria-expanded="false"><span class="hide-menu"><b>Show</b></span></a>
                                        <i class="mdi mdi-pencil"></i><a href="/event/edit/{id}" aria-expanded="false"><span class="hide-menu"><b>Edit</b></span></a>
                                        <i class="mdi mdi-archive"></i><a href="/event/delete/{{ $event->id }}" aria-expanded="false"><span class="hide-menu"><b>Delete</b></span></a>
                                    </td>
                                </tr>
                                @endforeach --}}
                                <!-- Second example part temp for demo sheets/table -->
                                {{-- <tr>
                                    <td>Michael Silva</td>
                                    <td>Marketing Designer</td>
                                    <td>London</td>
                                    <td>66</td>
                                    <td>2012/11/27</td>
                                    <td>$198,500</td>
                                    <td>
                                        <div class="border-top">
                                            <div class="card-body">
                                                <button type="submit" class="btn btn-success text-white">Show</button>
                                                <button type="submit" class="btn btn-info">Edit</button>
                                                <button type="submit" class="btn btn-danger text-white">Del</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr> --}}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Назва</th>
                                    <th>Категорія</th>
                                    <th>Місто</th>
                                    <th>Тип події</th>
                                    <th>Адреса</th>
                                    <th>Дата</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-0">Static Table</h5>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-0">Static Table With Checkboxes</h5>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>
                                    <label class="customcheckbox mb-3">
                                        <input type="checkbox" id="mainCheckbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                </th>
                                <th scope="col">Rendering engine</th>
                                <th scope="col">Browser</th>
                                <th scope="col">Platform(s)</th>
                                <th scope="col">Engine version</th>
                            </tr>
                        </thead>
                        <tbody class="customtable">
                            <tr>
                                <th>
                                    <label class="customcheckbox">
                                        <input type="checkbox" class="listCheckbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                </th>
                                <td>Trident</td>
                                <td>Internet Explorer 4.0</td>
                                <td>Win 95+</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <th>
                                    <label class="customcheckbox">
                                        <input type="checkbox" class="listCheckbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                </th>
                                <td>Trident</td>
                                <td>Internet Explorer 5.0</td>
                                <td>Win 95+</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <th>
                                    <label class="customcheckbox">
                                        <input type="checkbox" class="listCheckbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                </th>
                                <td>Trident</td>
                                <td>Internet Explorer 4.0</td>
                                <td>Win 95+</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <th>
                                    <label class="customcheckbox">
                                        <input type="checkbox" class="listCheckbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                </th>
                                <td>Trident</td>
                                <td>Internet Explorer 5.0</td>
                                <td>Win 95+</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <th>
                                    <label class="customcheckbox">
                                        <input type="checkbox" class="listCheckbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                </th>
                                <td>Trident</td>
                                <td>Internet Explorer 5.5</td>
                                <td>Win 95+</td>
                                <td>5.5</td>
                            </tr>
                            <tr>
                                <th>
                                    <label class="customcheckbox">
                                        <input type="checkbox" class="listCheckbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                </th>
                                <td>Trident</td>
                                <td>Internet Explorer 6</td>
                                <td>Win 98+</td>
                                <td>6</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Collspan Table Example</h5>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
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

