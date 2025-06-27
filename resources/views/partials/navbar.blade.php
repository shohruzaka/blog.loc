<header class="wrapper bg-soft-primary">
        <nav class="navbar navbar-expand-lg classic navbar-light navbar-bg-light">
            <div class="container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand w-100">
                    <a href="{{route('home')}}">
                        <img src="{{asset('front/logosm.png')}}" srcset="{{asset('front/logo500.png')}} 2x" alt="" style="max-width: 50%;" />
                    </a>
                </div>
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header d-lg-none">
                        <a href="{{route('home')}}"><img src=" {{asset('front/logo2x.png')}}" srcset="{{asset('front/logo2x.png')}} 2x" alt="" /></a>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                        <ul class="navbar-nav">

                            <li class="nav-item"><a class="nav-link" href="{{ route('all-posts') }}">Barcha Yangiliklar</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Link2</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Link3</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Link4</a></li>

                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Big menu</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="dropdown-item" href="#">Action</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="#">Another Action</a></li>
                                </ul>
                            </li>

                        </ul>
                        <!-- /.navbar-nav -->
                        <div class="d-lg-none mt-auto pt-6 pb-6 order-4">
                            <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                            <br /> 00 (123) 456 78 90 <br />
                            <nav class="nav social social-white mt-4">
                                <a href="#"><i class="uil uil-twitter"></i></a>
                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                <a href="#"><i class="uil uil-instagram"></i></a>
                                <a href="#"><i class="uil uil-youtube"></i></a>
                            </nav>
                            <!-- /.social -->
                        </div>
                        <!-- /offcanvas-nav-other -->
                    </div>
                    <!-- /.offcanvas-body -->
                </div>
                <!-- /.navbar-collapse -->
                <div class="navbar-other ms-lg-4">
                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
                        <li class="nav-item d-none d-md-block">
                            @auth
                            <a href="/admin" class="btn btn-primary rounded-pill mb-0 text-nowrap">{{ auth()->user()->name }}</a>
                            @endauth
                            @guest
                            <a href="{{route('login')}}" class="btn btn-sm btn-primary rounded-pill">Kirish</a>
                            @endguest
                        </li>
                        <li class="nav-item d-lg-none">
                            <button class="hamburger offcanvas-nav-btn"><span></span></button>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- /.navbar -->
        <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
            <div class="container d-flex flex-row py-6">
                <form class="search-form w-100">
                    <input id="search-form" type="text" class="form-control" placeholder="Type keyword and hit enter">
                </form>
                <!-- /.search-form -->
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.navbar -->
    </header>