@extends('layouts.admin')
@section('title', 'eventscreate')
@section('content')
    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Events Editor</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard-I</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Створення події
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bread crumb and right sidebar toggle -->

    <!-- Container fluid  -->
    <!-- ===================================== -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <!-- ===================================== -->
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
                                    class="col-sm-3 text-end control-label col-form-label">
                                    Назва
                                    @if ($errors->has('event_name'))
                                        <span class="badge bg-danger">Danger</span>
                                    @endif
                                </label>

                                <div class="col-sm-6">
                                    <input type="text"
                                        class="form-control"
                                        id="event_name"
                                        name="event_name"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="event_type"
                                    class="col-sm-3 text-end control-label col-form-label">
                                    Тип
                                    @if ($errors->has('event_type'))
                                        <span class="badge bg-danger">Danger</span>
                                    @endif
                                </label>
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
                                    class="col-sm-3 text-end control-label col-form-label">
                                    Id категорії
                                    @if ($errors->has('category_id'))
                                        <span class="badge bg-danger">Danger</span>
                                    @endif
                                </label>
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
                                    class="col-sm-3 text-end control-label col-form-label">
                                    Опис заходу
                                    @if ($errors->has('event_description'))
                                        <span class="badge bg-danger">Danger</span>
                                    @endif
                                </label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" id="event_description" name="event_description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="city"
                                    class="col-sm-3 text-end control-label col-form-label">
                                    Місто проведення
                                    @if ($errors->has('city'))
                                        <span class="badge bg-danger">Danger</span>
                                    @endif
                                </label>
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
                                    class="col-sm-3 text-end control-label col-form-label">
                                    Вулиця проведення
                                    @if ($errors->has('street'))
                                        <span class="badge bg-danger">Danger</span>
                                    @endif
                                </label>
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
                                    class="col-sm-3 text-end control-label col-form-label">
                                    Номер будинку
                                    @if ($errors->has('build_number'))
                                        <span class="badge bg-danger">Danger</span>
                                    @endif
                                </label>
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
                                    class="col-sm-3 text-end control-label col-form-label">
                                    Індекс
                                    @if ($errors->has('geo_point'))
                                        <span class="badge bg-danger">Danger</span>
                                    @endif
                                </label>
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
                                    <small class="text-muted">dd/mm/yyyy</small>
                                    @if ($errors->has('registration_date'))
                                        <span class="badge bg-danger">Danger</span>
                                    @endif
                                </label>
                                <div class="col-sm-6">
                                    <input id="registration_date" name="registration_date" type="datetime-local">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Дата початку
                                    <small class="text-muted">dd/mm/yyyy</small>
                                    @if ($errors->has('start_date'))
                                        <span class="badge bg-danger">Danger</span>
                                    @endif
                                </label>
                                <div class="col-sm-6">
                                    <input id="start_date" name="start_date" type="datetime-local">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Дата закінчення
                                    <small class="text-muted">dd/mm/yyyy</small>
                                    @if ($errors->has('finish_date'))
                                        <span class="badge bg-danger">Danger</span>
                                    @endif
                                </label>
                                <div class="col-sm-6">
                                    <input id="finish_date" name="finish_date" type="datetime-local">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="event_link"
                                    class="col-sm-3 text-end control-label col-form-label">
                                    Посилання на запрошення
                                    @if ($errors->has('event_link'))
                                        <span class="badge bg-danger">Danger</span>
                                    @endif
                                </label>
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
                                    class="col-sm-3 text-end control-label col-form-label">
                                    Статус запрошення
                                    @if ($errors->has('event_status'))
                                        <span class="badge bg-danger">Danger</span>
                                    @endif
                                </label>
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
                                    class="col-sm-3 text-end control-label col-form-label">
                                    Зображення лого
                                    @if ($errors->has('image_intro'))
                                        <span class="badge bg-danger">Danger</span>
                                    @endif
                                </label>
                                <div class="col-sm-6">
                                    <input type="file" class="form-control-file" id="image_intro" name="image_intro">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="event_status"
                                    class="col-sm-3 text-end control-label col-form-label">
                                    Зображення головне
                                    @if ($errors->has('image_full'))
                                        <span class="badge bg-danger">Danger</span>
                                    @endif
                                </label>
                                <div class="col-sm-6">
                                    <input type="file" class="form-control-file" id="image_full" name="image_full">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="alt_intro"
                                    class="col-sm-3 text-end control-label col-form-label">
                                    Текст для зображення логотипу
                                    @if ($errors->has('alt_intro'))
                                        <span class="badge bg-danger">Danger</span>
                                    @endif
                                </label>
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
                                    class="col-sm-3 text-end control-label col-form-label">
                                    Текст для повного зображення
                                    @if ($errors->has('alt_full'))
                                        <span class="badge bg-danger">Danger</span>
                                    @endif
                                </label>
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
                                    class="col-sm-3 text-end control-label col-form-label">
                                    Мета тег title
                                    @if ($errors->has('meta_title'))
                                        <span class="badge bg-danger">Danger</span>
                                    @endif
                                </label>
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
                                    class="col-sm-3 text-end control-label col-form-label">
                                    Мета тег desc
                                    @if ($errors->has('meta_desc'))
                                        <span class="badge bg-danger">Danger</span>
                                    @endif
                                </label>
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
                                    class="col-sm-3 text-end control-label col-form-label">
                                    Рейтинг
                                    @if ($errors->has('rating'))
                                        <span class="badge bg-danger">Danger</span>
                                    @endif
                                </label>
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
                                    class="col-sm-3 text-end control-label col-form-label">
                                    Посилання сторінки
                                    @if ($errors->has('url'))
                                        <span class="badge bg-danger">Danger</span>
                                    @endif
                                </label>
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
                                    class="col-sm-3 text-end control-label col-form-label">
                                    Організатори
                                    @if ($errors->has('event_source'))
                                        <span class="badge bg-danger">Danger</span>
                                    @endif
                                </label>
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
                                    <small class="text-muted">dd/mm/yyyy</small>
                                    @if ($errors->has('created_at'))
                                        <span class="badge bg-danger">Danger</span>
                                    @endif
                                </label>
                                <div class="col-sm-6">
                                    <input id="created_at" name="created_at" type="datetime-local">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Дата редагування
                                    <small class="text-muted">dd/mm/yyyy</small>
                                    @if ($errors->has('updated_at'))
                                        <span class="badge bg-danger">Danger</span>
                                    @endif
                                </label>
                                <div class="col-sm-6">
                                    <input id="updated_at" name="updated_at" type="datetime-local">
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

