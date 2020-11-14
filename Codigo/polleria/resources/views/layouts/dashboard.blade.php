<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport"/>
        <title>
            Polleria el roble
        </title>
        <link href="{{asset('assets/images/logo.png')}}" rel="icon" type="image/x-icon"/>
        <link href="{{ asset('assets/dashboard/css/loader.css')}}" rel="stylesheet" type="text/css"/>
        <script src="{{ asset('assets/dashboard/js/loader.js')}}">
        </script>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet"/>
        <link href="{{ asset('assets/dashboard/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/dashboard/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <link href="{{ asset('assets/dashboard/css/regular.css" rel="stylesheet')}}"/>
        <link href="{{ asset('assets/dashboard/css/fontawesome.css" rel="stylesheet')}}"/>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link href="{{ asset('assets/dashboard/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/dashboard/css/select2.min.css')}}" rel="stylesheet" type="text/css"/>
        <!--  END CUSTOM STYLE FILE  -->
        @yield('style')
    </head>
    <body class="sidebar-noneoverflow" data-offset="100" data-spy="scroll" data-target="#navSection">
        <!-- BEGIN LOADER -->
        <div id="load_screen">
            <div class="loader">
                <div class="loader-content">
                    <div class="spinner-grow align-self-center">
                    </div>
                </div>
            </div>
        </div>
        <!--  END LOADER -->
        <!--  BEGIN NAVBAR  -->
        @yield('header')
        <!--  END NAVBAR  -->
        <!--  BEGIN MAIN CONTAINER  -->
        <div class="main-container" id="container">
            <div class="overlay">
            </div>
            <div class="cs-overlay">
            </div>
            <div class="search-overlay">
            </div>
            <!--  BEGIN SIDEBAR  -->
            @yield('menu')
            <!--  END SIDEBAR  -->
            <!--  BEGIN CONTENT AREA  -->
            <div class="main-content" id="content">
                <div class="layout-px-spacing">
                    @yield('content')
                </div>
                @yield('footer')
            </div>
            <!--  END CONTENT AREA  -->
        </div>
        <!-- END MAIN CONTAINER -->
        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        <script src="{{ asset('assets/dashboard/js/jquery-3.1.1.min.js') }}">
        </script>
        <script src="{{ asset('assets/dashboard/js/popper.min.js') }}">
        </script>
        <script src="{{ asset('assets/dashboard/js/bootstrap.min.js') }}">
        </script>
        <script src="{{ asset('assets/dashboard/js/perfect-scrollbar.min.js') }}">
        </script>
        <script src="{{ asset('assets/dashboard/js/app.js') }}">
        </script>
        <script>
            $(document).ready(function() {
            App.init();
        });
        </script>
        <script src="{{ asset('assets/dashboard/js/highlight.pack.js') }}">
        </script>
        <script src="{{ asset('assets/dashboard/js/custom.js') }}">
        </script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->
        <script src="{{ asset('assets/dashboard/js/scrollspyNav.js') }}">
        </script>
        <script src="{{ asset('assets/dashboard/js/select2.min.js')}}">
        </script>
        <script src="{{ asset('assets/dashboard/js/custom-select2.js')}}">
        </script>
        @yield('script')
    </body>
</html>