<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sportcalendar Admin Panel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/admin/assets/images/favicon.png" />
    <!-- Custom CSS -->
    <link href="/admin/assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <link href="/admin/assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="/admin/assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
    <link href="/admin/dist/css/style.min.css" rel="stylesheet" />

    <!-- CSS file from image lib -->
    <link href="/admin/assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="/admin/dist/css/style.min.css" rel="stylesheet">
    <!-- end CSS image -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel=»stylesheet» href=»https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css» />
    {{-- Calendar links stylesheet --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet" />
    <link href="/css/main.css" rel="stylesheet" />

</head>

<body>
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- Main wrapper - style you can find in pages.scss -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="/dashboard">
                        <!-- Logo icon -->
                        <b class="logo-icon ps-2">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="/admin/assets/images/logo-icon.png" alt="homepage" class="light-logo" width="25" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text ms-2">
                            <!-- dark Logo text -->
                            {{-- <img src="/admin/assets/images/logo-text.png" alt="homepage" class="light-logo" /> --}}
                            <h3>Sportcalendar</h3>
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->

                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->

                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
                        </li>
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-none d-md-block">Створити нову <i class="fa fa-angle-down"></i></span>
                                <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Дія</a></li>
                                <li><a class="dropdown-item" href="#">Інша Дія</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-magnify fs-4"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter" />
                                <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">

                        <!-- Comment -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-bell font-24"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Дія</a></li>
                                <li><a class="dropdown-item" href="#">Інша Дія</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Comment -->

                        <!-- Messages -->
                        <!-- ============================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle d-flex align-items-center justify-content-center">
                                                        <i class="mdi mdi-calendar text-white fs-4"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Події сьогодні</h5>
                                                        <span class="mail-desc">Just a reminder that event</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-info btn-circle d-flex align-items-center justify-content-center">
                                                        <i class="mdi mdi-settings fs-4"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Налаштування</h5>
                                                        <span class="mail-desc">You can customize this template</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-primary btn-circle d-flex align-items-center justify-content-center">
                                                        <i class="mdi mdi-account fs-4"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Admin Admin</h5>
                                                        <span class="mail-desc">Just see the my admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-danger btn-circle d-flex align-items-center justify-content-center">
                                                        <i class="mdi mdi-link fs-4"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">2 Admin Admin</h5>
                                                        <span class="mail-desc">Just see the my new admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </ul>
                        </li>
                        <!-- ============================== -->
                        <!-- End Messages -->

                        <!-- Start User profile and search -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic"
                                href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="/admin/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31" />
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-account me-1 ms-1"></i> Мій профайл</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-wallet me-1 ms-1"></i> Мій баланс</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-email me-1 ms-1"></i> Пошта</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-settings me-1 ms-1"></i> Налаштування аккаунту</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="ps-4 p-10">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded text-white"> Показати профайл</a>
                                </div>
                            </ul>
                        </li>
                        <!-- End User profile and search -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ======================== -->
        <!-- End Topbar header -->

        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" title="Основний Dashboard-I" href="/dashboard" aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Dashboard-I </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" title="Повний список спорт-подій" href="/events" aria-expanded="false">
                                <i class="mdi mdi-bike"></i><span class="hide-menu"> Спорт-події </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" title="Звіти роботи парсерів" href="/parser" aria-expanded="false">
                                <i class="mdi mdi-arrange-bring-to-front"></i><span class="hide-menu"> Парсери </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" title="Звіти в формі гістограм" href="/charts" aria-expanded="false">
                                <i class="mdi mdi-chart-bar"></i><span class="hide-menu"> Графіки </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" title="Сторінка віджетів Sportcalendar" href="/widgets" aria-expanded="false">
                                <i class="mdi mdi-chart-bubble"></i><span class="hide-menu"> Віджети </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" title="Агенти Sportcalendar" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-move-resize-variant"></i><span class="hide-menu"> Агенти </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a class="sidebar-link" title="Повний список партнерів Sportcalendar" href="/partners">
                                        <i class="mdi mdi-face"></i><span class="hide-menu"> Організатори </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link" title="Зареєстровані користувачі Sportcalendar" href="/users">
                                        <i class="mdi mdi-account-multiple"></i><span class="hide-menu"> Користувачі </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" title="Персональний Органайзер менеджера" href="/organizer" aria-expanded="false">
                                <i class="mdi mdi-table-large"></i><span class="hide-menu"> Органайзер </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" title="Додатковий Dashboard" href="/dashboard2" aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Dashboard-II </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" title="Термінові повідомлення Sportcalendar" href="/bells" aria-expanded="false">
                                <i class="mdi mdi-bell-ring"></i><span class="hide-menu"> Повідомлення </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" title="Поштовий агент Sportcalendar" href="/letters" aria-expanded="false">
                                <i class="mdi mdi-email-outline"></i><span class="hide-menu"> Пошта </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" title="Звіт роботи сервера Sportcalendar" href="/logs" aria-expanded="false">
                                <i class="mdi mdi-database"></i><span class="hide-menu"> Сервер </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-move-resize-variant"></i><span class="hide-menu"> Додатки менеджера </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a class="sidebar-link" title="Окремий Dashboard для менеджерів" href="/dashboard3">
                                        <i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Dashboard-3 </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link" title="Додаткова галарея для менеджерів" href="/galery2">
                                        <i class="mdi mdi-multiplication-box"></i><span class="hide-menu"> Галерея </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link" title="Звіти менеджерів проекту" href="/reports">
                                        <i class="mdi mdi-calendar-check"></i><span class="hide-menu"> Звіти </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link" title="Списки Інвойсів" href="/invoices">
                                        <i class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Рахунки </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link" title="Чати для менеджерів" href="/chats">
                                        <i class="mdi mdi-message-outline"></i><span class="hide-menu"> Chat Options </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-account-key"></i><span class="hide-menu"> Оновлення </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="authentication-login.html" class="sidebar-link">
                                        <i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Важливо </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="authentication-register.html" class="sidebar-link">
                                        <i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Кастомно </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-alert"></i><span class="hide-menu"> Налаштування </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="error-403.html" class="sidebar-link">
                                        <i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Світла тема </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="error-404.html" class="sidebar-link">
                                        <i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Темна тема </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="error-405.html" class="sidebar-link">
                                        <i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Кастомна тема </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="error-500.html" class="sidebar-link">
                                        <i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Фешн </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item p-3">
                            <a target="_blank" class=" w-100 btn btn-cyan d-flex align-items-center text-white">
                                <i class="mdi mdi-cloud-download font-20 me-2">
                                </i>New Project</a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->

        <!-- Page wrapper  -->
        <div class="page-wrapper">

                @yield('content')

            <!-- footer -->
            <footer class="footer text-center">
                All Rights Reserved by Sportcalendar. Designed and Developed by
                <a href="https://dev-sportcalendar.netlify.app/">Sportcalendar</a>.
            </footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- ============================== -->
    <!-- End Wrapper -->

    <!-- All Jquery -->
    <script src="/admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/admin/dist/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="/admin/dist/js/jquery-ui.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="/admin/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="/admin/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/admin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/admin/dist/js/custom.min.js"></script>
    <!--This page JavaScript page From-basic-->
    <script src="/admin/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="/admin/dist/js/pages/mask/mask.init.js"></script>
    <script src="/admin/assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="/admin/assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="/admin/assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="/admin/assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="/admin/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="/admin/assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="/admin/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="/admin/assets/libs/quill/dist/quill.min.js"></script>
    <!-- Page image -->
    <script src="/admin/assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="/admin/assets/libs/magnific-popup/meg.init.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- this page js -->
    <script src="/admin/assets/libs/moment/min/moment.min.js"></script>
    <script src="/admin/assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="/admin/dist/js/pages/calendar/cal-init.js"></script>
    <!-- Charts js Files -->
    <script src="/admin/assets/libs/chart/matrix.interface.js"></script>
    <script src="/admin/assets/libs/chart/excanvas.min.js"></script>

    <script src="/admin/assets/libs/flot/excanvas.js"></script>
    <script src="/admin/assets/libs/flot/jquery.flot.js"></script>
    <script src="/admin/assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="/admin/assets/libs/flot/jquery.flot.time.js"></script>
    <script src="/admin/assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="/admin/assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="/admin/assets/libs/chart/jquery.peity.min.js"></script>
    <script src="/admin/assets/libs/chart/matrix.charts.js"></script>
    <script src="/admin/assets/libs/chart/jquery.flot.pie.min.js"></script>
    <script src="/admin/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="/admin/assets/libs/chart/turning-series.js"></script>
    <script src="/admin/dist/js/pages/chart/chart-page-init.js"></script>

    <!-- Calendar JS files -->
    <script src="/js/extention/choices.js"></script>
    <script src="/js/extention/flatpickr.js"></script>
    <script>
      flatpickr(".datepicker", {});
    </script>
    <script>
      const choices = new Choices('[data-trigger]',
      {searchEnabled: false, itemSelectText: '',});
    </script>

</body>

</html>
