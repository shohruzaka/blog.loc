@extends('layouts.app')

@section('content')
<div class="blog classic-view">
    <article class="post">
        <div class="card">
            <figure class="card-img-top overlay overlay-1 hover-scale"><a href="./blog-post.html"><img src="./assets/img/photos/b1.jpg" alt="" /></a>
                <figcaption>
                    <h5 class="from-top mb-0">Read More</h5>
                </figcaption>
            </figure>
            <div class="card-body">
                <div class="post-header">
                    <div class="post-category text-line">
                        <a href="#" class="hover" rel="category">Teamwork</a>
                    </div>
                    <!-- /.post-category -->
                    <h2 class="post-title mt-1 mb-0"><a class="link-dark" href="./blog-post.html">Amet Dolor Bibendum Parturient Cursus</a></h2>
                </div>
                <!-- /.post-header -->
                <div class="post-content">
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh. Cras mattis consectetur purus.</p>
                </div>
                <!-- /.post-content -->
            </div>
            <!--/.card-body -->
            <div class="card-footer">
                <ul class="post-meta d-flex mb-0">
                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>5 Jul 2021</span></li>
                    <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By Sandbox</span></a></li>
                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3<span> Comments</span></a></li>
                    <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>3</a></li>
                </ul>
                <!-- /.post-meta -->
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->
    </article>
    <!-- /.post -->

</div>
<!-- /.blog -->

<div class="blog grid grid-view">
    <div class="row isotope gx-md-8 gy-8 mb-8">
        <article class="item post col-md-6">
            <div class="card">
                <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="./assets/img/photos/b4.jpg" alt="" /></a>
                    <figcaption>
                        <h5 class="from-top mb-0">Read More</h5>
                    </figcaption>
                </figure>
                <div class="card-body">
                    <div class="post-header">
                        <div class="post-category text-line">
                            <a href="#" class="hover" rel="category">Coding</a>
                        </div>
                        <!-- /.post-category -->
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Ligula tristique quis risus</a></h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                        <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor. Aenean lacinia bibendum nulla sed.</p>
                    </div>
                    <!-- /.post-content -->
                </div>
                <!--/.card-body -->
                <div class="card-footer">
                    <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2021</span></li>
                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>4</a></li>
                        <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>5</a></li>
                    </ul>
                    <!-- /.post-meta -->
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </article>
        <!-- /.post -->
        <article class="item post col-md-6">
            <div class="card">
                <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="./assets/img/photos/b5.jpg" alt="" /></a>
                    <figcaption>
                        <h5 class="from-top mb-0">Read More</h5>
                    </figcaption>
                </figure>
                <div class="card-body">
                    <div class="post-header">
                        <div class="post-category text-line">
                            <a href="#" class="hover" rel="category">Workspace</a>
                        </div>
                        <!-- /.post-category -->
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Nullam id dolor elit id nibh</a></h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                        <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor. Aenean lacinia bibendum nulla sed.</p>
                    </div>
                    <!-- /.post-content -->
                </div>
                <!--/.card-body -->
                <div class="card-footer">
                    <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar 2021</span></li>
                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a></li>
                        <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>3</a></li>
                    </ul>
                    <!-- /.post-meta -->
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </article>
        <!-- /.post -->
        <article class="item post col-md-6">
            <div class="card">
                <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="./assets/img/photos/b6.jpg" alt="" /></a>
                    <figcaption>
                        <h5 class="from-top mb-0">Read More</h5>
                    </figcaption>
                </figure>
                <div class="card-body">
                    <div class="post-header">
                        <div class="post-category text-line">
                            <a href="#" class="hover" rel="category">Meeting</a>
                        </div>
                        <!-- /.post-category -->
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Ultricies fusce porta elit</a></h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                        <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor. Aenean lacinia bibendum nulla sed.</p>
                    </div>
                    <!-- /.post-content -->
                </div>
                <!--/.card-body -->
                <div class="card-footer">
                    <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Feb 2021</span></li>
                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>6</a></li>
                        <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>3</a></li>
                    </ul>
                    <!-- /.post-meta -->
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </article>
        <!-- /.post -->
        <article class="item post col-md-6">
            <div class="card">
                <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="./assets/img/photos/b7.jpg" alt="" /></a>
                    <figcaption>
                        <h5 class="from-top mb-0">Read More</h5>
                    </figcaption>
                </figure>
                <div class="card-body">
                    <div class="post-header">
                        <div class="post-category text-line">
                            <a href="#" class="hover" rel="category">Business Tips</a>
                        </div>
                        <!-- /.post-category -->
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Morbi leo risus porta eget</a></h2>
                    </div>
                    <div class="post-content">
                        <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor. Aenean lacinia bibendum nulla sed.</p>
                    </div>
                    <!-- /.post-content -->
                </div>
                <!--/.card-body -->
                <div class="card-footer">
                    <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7 Jan 2021</span></li>
                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>2</a></li>
                        <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>5</a></li>
                    </ul>
                    <!-- /.post-meta -->
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </article>
        <!-- /.post -->
    </div>
    <!-- /.row -->
</div>
<!-- /.blog -->

<nav class="d-flex" aria-label="pagination">
    <ul class="pagination">
        <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
            </a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
            </a>
        </li>
    </ul>
    <!-- /.pagination -->
</nav>
<!-- /nav -->

@endsection