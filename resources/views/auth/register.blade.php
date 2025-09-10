<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Texnologiya yangiliklari">
    <meta name="keywords" content="keyin yozaman">
    <meta name="author" content="shohruz">
    <title>Megabit - qaynoq yangiliklar</title>
    <link rel="shortcut icon" href="{{asset('front/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('front/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}"">
</head>

<body>
    <div class=" content-wrapper">
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-10 py-md-10">
            <div class="row">
                <div class="col-lg-7 col-xl-6 col-xxl-5 mx-auto">
                    <div class="card">
                        <div class="card-body p-11 text-center">
                            <h2 class="mb-3 text-center">Registratsiya</h2>
                            <p class="lead mb-6 text-center">1 daqiqa vaqtingizni olamiz</p>
                            @if ($errors->any())
                            <div style="color: red; margin-bottom: 20px;">
                                @foreach ($errors->all() as $error)
                                <p class="text-red">* {{ $error }}</p>
                                @endforeach
                            </div>
                            @endif
                            <form class="text-start mb-3" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-floating mb-4">
                                    <input name="name" type="text" class="form-control" placeholder="Name" id="loginName">
                                    <label for="loginName">Name</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input name="email" type="email" class="form-control" placeholder="Email" id="loginEmail">
                                    <label for="loginEmail">Email</label>
                                </div>
                                <div class="form-floating password-field mb-4">
                                    <input name="password" type="password" class="form-control" placeholder="Password" id="loginPassword">
                                    <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                    <label for="loginPassword">Password</label>
                                </div>
                                <div class="form-floating password-field mb-4">
                                    <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" id="loginPasswordConfirm">
                                    <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                    <label for="loginPasswordConfirm">Confirm Password</label>
                                </div>
                                <button type="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2">Registratsiya</button>
                            </form>
                            <!-- /form -->
                            <div class="divider-icon my-4">yoki</div>
                            <nav class="nav social justify-content-center text-center">
                                <a href="{{ route('social.redirect', 'google') }}" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
                                <a href="{{ route('social.redirect', 'github') }}" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-github"></i></a>
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

    </div>
    <!-- /.content-wrapper -->

    <footer>
        <div class="container pb-7">
            <div class="d-flex align-items-center justify-content-center">
                <p class="mb-2 mb-lg-0">© 2025 MegaBit. All rights reserved.</p>
            </div>
        </div>
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