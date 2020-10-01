<!DOCTYPE html>
<html itemscope="itemscope" itemtype="http://schema.org/WebPage" lang="en-US">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
                <title>
                    Pizzaro
                </title>
                <link href="{{asset('assets/css/bootstrap.min.css')}}" media="all" rel="stylesheet" type="text/css"/>
               <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/brands.min.css" integrity="sha512-AMDXrE+qaoUHsd0DXQJr5dL4m5xmpkGLxXZQik2TvR2VCVKT/XRPQ4e/LTnwl84mCv+eFm92UG6ErWDtGM/Q5Q==" crossorigin="anonymous" />
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/solid.min.css" integrity="sha512-QN7X/bUbbeel9bbq6JVNJXk1Zowt+n+QPN+DjhEmTa4TdL1YPCsCey5JrvfRW8xp28LDYgGG/waNVdrhwMQmVQ==" crossorigin="anonymous" />
                <link href="{{asset('assets/css/animate.min.css')}}" media="all" rel="stylesheet" type="text/css"/>
                <link href="{{asset('assets/css/font-pizzaro.css')}}" media="all" rel="stylesheet" type="text/css"/>
                <link href="{{asset('assets/css/style.css')}}" media="all" rel="stylesheet" type="text/css"/>
                <link href="{{asset('assets/css/colors/red.css')}}" media="all" rel="stylesheet" type="text/css"/>
                <link href="{{asset('assets/css/jquery.mCustomScrollbar.min.css')}}" media="all" rel="stylesheet" type="text/css"/>
                <!-- Demo Purpose Only. Should be removed in production -->
                <link href="{{asset('assets/css/config.css')}}" rel="stylesheet">
                    <link href="{{asset('assets/css/green.css')}}" rel="alternate stylesheet" title="Green color">
                        <link href="{{asset('assets/css/pink.css')}}" rel="alternate stylesheet" title="Pink color">
                            <link href="{{asset('assets/css/blue.css')}}" rel="alternate stylesheet" title="Blue color">
                                <link href="{{asset('assets/css/colors/red.css')}}" rel="alternate stylesheet" title="Red color">
                                    <link href="{{asset('assets/css/orange.css')}}" rel="alternate stylesheet" title="Orange color">
                                        <link href="{{asset('assets/css/gold.css')}}" rel="alternate stylesheet" title="Gold color">
                                            <link href="{{asset('assets/css/navy.css')}}" rel="alternate stylesheet" title="Navy color">
                                                <link href="{{asset('assets/css/flat-blue.css')}}" rel="alternate stylesheet" title="Flat Blue color">
                                                    <!-- Demo Purpose Only. Should be removed in production : END -->
                                                    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CYanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
                                                        <link href="{{asset('assets/images/fav-icon.png')}}" rel="shortcut icon">
                                                        </link>
                                                    </link>
                                                </link>
                                            </link>
                                        </link>
                                    </link>
                                </link>
                            </link>
                        </link>
                    </link>
                </link>
            </meta>
        </meta>
    </head>
    <body class="{{ $class ?? 'page-template-template-homepage-v1 home-v1' }}">
        <div class="hfeed site" id="page">
            @yield('header')
            <div class="site-content" id="content" tabindex="-1">
                @yield('content')
            </div>
            <!-- #content -->
            @yield('footer')
            <!-- #colophon -->
        </div>
        <!-- For demo purposes – can be removed on production -->
        <!-- For demo purposes – can be removed on production : End -->
        <script src="{{asset('assets/js/jquery.min.js')}}" type="text/javascript">
        </script>
       
        <script src="{{asset('assets/js/tether.min.js')}}" type="text/javascript">
        </script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript">
        </script>
        <script src="{{asset('assets/js/owl.carousel.min.js')}}" type="text/javascript">
        </script>
        <script src="{{asset('assets/js/social.share.min.js')}}" type="text/javascript">
        </script>
        <script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}" type="text/javascript">
        </script>
        <script src="{{asset('assets/js/scripts.min.js')}}" type="text/javascript">
        </script>
        <!-- For demo purposes – can be removed on production -->
        <script src="{{asset('assets/js/switchstylesheet.js')}}">
        </script>
        @yield('script')
        <!-- For demo purposes – can be removed on production : End -->
    </body>
</html>
