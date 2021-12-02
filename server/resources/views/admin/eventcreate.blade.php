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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" action="{{ route('event_store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Створення події</h4>
                            <div class="form-group row">
                                <label
                                    for="event_name"
                                    class="col-sm-3 text-end control-label col-form-label">Назва</label>
                                <div class="col-sm-6">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="event_name"
                                        name="event_name"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="event_type"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Тип</label
                                >
                                <div class="col-sm-6">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="event_type"
                                        name="event_type"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="category_id"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Id категорії</label
                                >
                                <div class="col-sm-6">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="category_id"
                                        name="category_id"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="event_description"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Опис заходу</label
                                >
                                <div class="col-sm-6">
                                    <textarea class="form-control" id="event_description" name="event_description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="city"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Місто проведення</label
                                >
                                <div class="col-sm-6">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="city"
                                        name="city"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="street"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Вулиця проведення</label
                                >
                                <div class="col-sm-6">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="street"
                                        name="street"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="build_number"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Номер будинку</label
                                >
                                <div class="col-sm-6">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="build_number"
                                        name="build_number"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="geo_point"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Індекс</label
                                >
                                <div class="col-sm-6">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="geo_point"
                                        name="geo_point"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Дата реєстрації
                                    <small class="text-muted">dd/mm/yyyy</small></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control date-inputmask" id="registration_date" name="registration_date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Дата початку
                                    <small class="text-muted">dd/mm/yyyy</small></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control date-inputmask" id="start_date" name="start_date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Дата закінчення
                                    <small class="text-muted">dd/mm/yyyy</small></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control date-inputmask" id="finish_date" name="finish_date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="event_link"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Посилання на запрошення</label
                                >
                                <div class="col-sm-6">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="event_link"
                                        name="event_link"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="event_status"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Статус запрошення</label
                                >
                                <div class="col-sm-6">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="event_status"
                                        name="event_status"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="event_status"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Зображення лого</label
                                >
                                <div class="col-sm-6">
                                    <input type="file" class="form-control-file" id="image_intro" name="image_intro">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="event_status"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Зображення головне</label
                                >
                                <div class="col-sm-6">
                                    <input type="file" class="form-control-file" id="image_full" name="image_full">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="alt_intro"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Текст для зображення логотипу</label
                                >
                                <div class="col-sm-6">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="alt_intro"
                                        name="alt_intro"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="alt_full"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Текст для повного зображення</label
                                >
                                <div class="col-sm-6">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="alt_full"
                                        name="alt_full"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="meta_title"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Мета тег title</label
                                >
                                <div class="col-sm-6">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="meta_title"
                                        name="meta_title"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="meta_desc"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Мета тег desc</label
                                >
                                <div class="col-sm-6">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="meta_desc"
                                        name="meta_desc"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="rating"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Рейтинг</label
                                >
                                <div class="col-sm-6">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="rating"
                                        name="rating"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="url"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Посилання сторінки</label
                                >
                                <div class="col-sm-6">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="url"
                                        name="url"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="event_source"
                                    class="col-sm-3 text-end control-label col-form-label"
                                >Організатори</label
                                >
                                <div class="col-sm-6">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="event_source"
                                        name="event_source"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Дата запису
                                    <small class="text-muted">dd/mm/yyyy</small></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control date-inputmask" id="created_ad" name="created_ad">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Дата редагування
                                    <small class="text-muted">dd/mm/yyyy</small></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control date-inputmask" id="updated_ad" name="updated_ad">
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="button submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!--
        <form >
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="title" class="form-control" placeholder="Title">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description:</strong>
                        <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        -->
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







