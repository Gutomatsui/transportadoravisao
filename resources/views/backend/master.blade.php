<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="pt-br"> <!--<![endif]-->

<head>
    <meta charset="utf-8">

    <title>Transportadora Visão </title>

    <meta name="description" content="KL climatização">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ URL::to('backend/img/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ URL::to('backend/img/icon57.png') }}" sizes="57x57">
    <link rel="apple-touch-icon" href="{{ URL::to('backend/img/icon72.png') }}" sizes="72x72">
    <link rel="apple-touch-icon" href="{{ URL::to('backend/img/icon76.png') }}" sizes="76x76">
    <link rel="apple-touch-icon" href="{{ URL::to('backend/img/icon114.png') }}" sizes="114x114">
    <link rel="apple-touch-icon" href="{{ URL::to('backend/img/icon120.png') }}" sizes="120x120">
    <link rel="apple-touch-icon" href="{{ URL::to('backend/img/icon144.png') }}" sizes="144x144">
    <link rel="apple-touch-icon" href="{{ URL::to('backend/img/icon152.png') }}" sizes="152x152">
    <link rel="apple-touch-icon" href="{{ URL::to('backend/img/icon180.png') }}" sizes="180x180">

    <link rel="stylesheet" href="{{ URL::to('backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('backend/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ URL::to('backend/css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::to('backend/css/themes.css') }}">

    <script src="{{ URL::to('backend/js/vendor/modernizr.min.js') }}"></script>
</head>

<body>

    <div id="page-wrapper">

        <div class="preloader themed-background">
            <h1 class="push-top-bottom text-light text-center"><strong>Transportadora</strong>Visão</h1>
            <div class="inner">
                <h3 class="text-light visible-lt-ie10"><strong>Loading..</strong></h3>
                <div class="preloader-spinner hidden-lt-ie10"></div>
            </div>
        </div>

        <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
            <!-- Alternative Sidebar -->
            <div id="sidebar-alt">
                <!-- Wrapper for scrolling functionality -->
                <div id="sidebar-alt-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Chat -->
                        <!-- Chat demo functionality initialized in backend/js/app.js -> chatUi() -->
                        <a href="page_ready_chat.html" class="sidebar-title">
                            <i class="gi gi-comments pull-right"></i> <strong>Chat</strong>UI
                        </a>
                    </div>
                    <!-- END Sidebar Content -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </div>
            <!-- END Alternative Sidebar -->

            <!-- Main Sidebar -->
            <div id="sidebar">
                <!-- Wrapper for scrolling functionality -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">

                        <!-- User Info -->
                        <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                            <div class="sidebar-user-avatar">
                                <a href="page_ready_user_profile.html">
                                    <img src="{{ URL::to('backend/img/placeholders/avatars/avatar2.jpg') }}"
                                        alt="avatar">
                                </a>
                            </div>
                            <div class="sidebar-user-name">{{ auth()->user()->name }}</div>

                            <a class="btn btn-primary " href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                {{ __('Sair') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </div>


                        <!-- Sidebar Navigation -->
                        <ul class="sidebar-nav">
                            <li>
                                <a href="{{ URL::to('/home') }}" class="sidebar"><i class="gi gi-home"></i>  Painel </a>
                            </li>
                            <li>
                                <a href="#" class="sidebar-nav-menu"><i
                                        class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i
                                        class="gi gi-user sidebar-nav-icon"></i><span
                                        class="sidebar-nav-mini-hide">Cotação</span></a>
                                <ul>
                                    <li>
                                        <a href="{{ URL::to('cotacao/listar') }}">Listagem de cotação</a>
                                    </li>
                                    
                                </ul>
                            </li>

                           
                        </ul> <!-- END Sidebar Navigation -->
                    </div>
                    <!-- END Sidebar Content -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </div>
            <!-- END Main Sidebar -->

            <!-- Main Container -->
            <div id="main-container">
                <!-- Header -->
                <!-- In the PHP version you can set the following options from inc/config file -->
                <!--
                Available header.navbar classes:

                'navbar-default'            for the default light header
                'navbar-inverse'            for an alternative dark header

                'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in backend/js/app.js - handleSidebar())
                'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in backend/js/app.js - handleSidebar()))
                'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
-->
                <header class="navbar navbar-default">
                    <!-- Left Header Navigation -->
                    <ul class="nav navbar-nav-custom">
                        <!-- Main Sidebar Toggle Button -->
                        <li>
                            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                <i class="fa fa-bars fa-fw"></i>
                            </a>
                        </li>
                        <!-- END Main Sidebar Toggle Button -->

                        <!-- Template Options -->
                        <!-- Change Options functionality can be found in backend/js/app.js - templateOptions() -->

                    </ul>
                    <!-- END Left Header Navigation -->


                </header>
                <!-- END Header -->

                @yield('backend.content')

                <!-- Footer -->
                <footer class="clearfix">

                    <div class="pull-left">
                        <span id=""></span> <a href="#" target="_blank">Transportadora Visão</a>
                    </div>
                </footer>
                <!-- END Footer -->
            </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
    </div>
    <!-- END Page Wrapper -->

    <!-- Scroll to top link, initialized in backend/js/app.js - scrollToTop() -->
    <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>



    <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
    <script src="{{ URL::to('backend/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ URL::to('backend/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('backend/js/plugins.js') }}"></script>
    <script src="{{ URL::to('backend/js/app.js') }}"></script>
    <script src="{{ URL::to('backend/js/pages/uiProgress.js') }}"></script>
    <script src="{{ URL::to('backend/js/vendor/jquery.mask.js') }}"></script>
    <script src="{{ URL::to('backend/js/helpers/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ URL::to('backend/js/pages/ecomDashboard.js') }}"></script>
    <script src="{{ URL::to('backend/js/jsbarcode.js') }}"></script>

    <script>
        $(function() {
            EcomDashboard.init();
        });
    </script>
    
    
    @yield('scripts')
</body>

</html>
