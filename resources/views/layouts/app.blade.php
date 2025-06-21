<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Texnologiya yangiliklari">
    <meta name="keywords" content="keyin yozaman">
    <meta name="author" content="shohruz">
    <title>Megabit - qaynoq yangiliklar</title>
    <link rel="shortcut icon" href="{{asset('front/img/favicon.png')}}">
    <!-- <link rel="stylesheet" href="{{asset('front/css/plugins.css')}}"> -->
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}"">
</head>

<body>
    <div class="content-wrapper">

    @include('partials.navbar')

    <section class="wrapper bg-light">
        <div class="container py-4 py-md-4">
            <div class="row">
                <div class="mx-auto">
                    <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400" data-image-src="{{asset('front/img/photos/bg3.jpg')}}">
                        <div class="card-body p-6 p-md-11 d-lg-flex flex-row align-items-lg-center justify-content-md-between text-center text-lg-start">
                            <h3 class="display-6 mb-6 mb-lg-0 pe-lg-10 pe-xl-5 pe-xxl-18 text-white">We are trusted by over 5000+ clients. Join them by using our services and grow your business.</h3>
                            
                            <a href="#" class="btn btn-white rounded-pill mb-0 text-nowrap">Telegram</a>

                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-10 py-md-10">
            <div class="row gx-lg-8 gx-xl-12">
                <div class="col-lg-8">

                    @yield('content')

                </div>
                <!-- /column -->
                <aside class="col-lg-4 sidebar mt-4 mt-lg-0">

                    @include('partials.sidebar')

                </aside>
                <!-- /column .sidebar -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="">
        <div class="container pb-7">
            <div class="d-md-flex align-items-center justify-content-center">
                <p class="mb-2 mb-lg-0">© 2025 MegaBit. All rights reserved.</p>
                <!-- /.social -->
            </div>
        </div>
        <!-- /.container -->
    </footer>


    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <script src="{{asset('front/js/plugins.js')}}"></script>
    <script src="{{asset('front/js/theme.js')}}"></script>
    </body>

</html>