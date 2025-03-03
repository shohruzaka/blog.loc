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

    <section class="wrapper bg-soft-green">
        <div class="container py-8 py-md-8 text-center">
            <div class="row">
                <div class="col-lg-8 col-xxl-7 mx-auto text-center" data-cues="slideInDown" data-group="page-title" data-delay="600" data-disabled="true">

                    <h1 class="display-1 fs-58 mb-7" data-cue="slideInDown" data-group="page-title" data-delay="600" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">We bring rapid solutions for your business.</h1>
                    <div class="d-flex justify-content-center mb-5 mb-md-0" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900" data-cue="slideInDown" data-disabled="true" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                        <span data-cue="slideInDown" data-group="page-title-buttons" data-delay="900" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1500ms; animation-direction: normal; animation-fill-mode: both;"><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Telegram</a></span>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

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