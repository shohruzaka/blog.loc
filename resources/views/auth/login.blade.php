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

    <section class="wrapper bg-light">
        <div class="container py-10 py-md-10">
            <div class="row">
                <div class="col-lg-7 col-xl-6 col-xxl-5 mx-auto">
                    <div class="card">
                        <div class="card-body p-11 text-center">
                            <h2 class="mb-3 text-center">Xush kelibsiz</h2>
                            <p class="lead mb-6 text-center">Kirish uchun kerakli maydonlarni to'ldiring</p>
                            <form class="text-start mb-3">
                                <div class="form-floating mb-4">
                                    <input type="email" class="form-control" placeholder="Email" id="loginEmail">
                                    <label for="loginEmail">Email</label>
                                </div>
                                <div class="form-floating password-field mb-4">
                                    <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                                    <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                    <label for="loginPassword">Password</label>
                                </div>
                                <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Sign In</a>
                            </form>
                            <!-- /form -->
                            <p class="mb-1"><a href="#" class="hover">Parolni unutdim?</a></p>
                            <p class="mb-0">Saytda yangimisiz? <a href="{{route('register')}}" class="hover">Qo'shilish</a></p>
                            <div class="divider-icon my-4">yoki</div>
                            <nav class="nav social justify-content-center text-center">
                                <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
                                <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i class="uil uil-facebook-f"></i></a>
                                <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
                            </nav>
                            <!--/.social -->
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