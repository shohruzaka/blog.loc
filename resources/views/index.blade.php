@extends('layouts.app')

@section('content')

<div class="blog classic-view">
    <article class="post">
        <div class="card">
            <figure class="card-img-top overlay overlay-1 hover-scale">
                <a href="{{ route('post.show', $lastPost->slug) }}">
                    <img src="{{ $lastPost->image ? asset('storage/'.$lastPost->image) : asset('assets/img/photos/b1.jpg') }}" alt="{{ $lastPost->title }}" />
                </a>
                <figcaption>
                    <h5 class="from-top mb-0">Read More</h5>
                </figcaption>
            </figure>
            <div class="card-body py-4">
                <div class="post-header">
                    <div class="post-category text-line">
                        <a href="#" class="hover" rel="category">{{ $lastPost->category->name }}</a>
                    </div>
                    <h2 class="post-title mt-1 mb-0">
                        <a class="link-dark" href="./blog-post.html">{{ $lastPost->title }}</a>
                    </h2>
                </div>
                <div class="post-content">
                    <p class="m-0">{{ $lastPost->descript }}</p>
                </div>
            </div>
            <div class="card-footer py-2">
                <ul class="post-meta d-flex mb-0">
                    <li class="post-date">
                        <i class="uil uil-calendar-alt"></i>
                        <span> {{ $lastPost->published_at->format('d M Y') }}</span>
                    </li>
                    <li class="post-author">
                        <a href="#"><i class="uil uil-user"></i><span>By {{ $lastPost->user->name }}</span></a>
                    </li>
                    <li class="post-comments">
                        <a href="#"><i class="uil uil-comment"></i>111<span> Comments</span></a>
                    </li>
                    <li class="post-likes ms-auto">
                        <a href="#"><i class="uil uil-eye"></i>{{ $lastPost->views }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </article>
</div>

<div class="blog grid grid-view">
    <div class="row isotope gx-md-8 gy-8 mb-8">
        @foreach($recentPosts as $post)
        <article class="item post col-md-6">
            <div class="card">
                <figure class="card-img-top overlay overlay-1 hover-scale">
                    <a href="{{ route('post.show', $post->slug) }}">
                        <img src="{{ $post->image ? asset('storage/'.$post->image) : asset('assets/img/photos/b4.jpg') }}" alt="{{ $post->title }}" />
                    </a>
                    <figcaption>
                        <h5 class="from-top mb-0">Read More</h5>
                    </figcaption>
                </figure>
                <div class="card-body py-4">
                    <div class="post-header">
                        <div class="post-category text-line">
                            <a href="#" class="hover" rel="category">{{ $post->category->name ?? '' }}</a>
                        </div>
                        <h2 class="post-title h6 mt-1 mb-3">
                            <a class="link-dark" href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a>
                        </h2>
                    </div>
                </div>
                <div class="card-footer py-2">
                    <ul class="post-meta d-flex mb-0">
                        <li class="post-date">
                            <i class="uil uil-calendar-alt"></i>
                            <span>{{ $post->published_at ? $post->published_at->format('d M Y') : '' }}</span>
                        </li>
                        <li class="post-author">
                            <a href="#"><i class="uil uil-user"></i><span>By {{ $post->user->name ?? '' }}</span></a>
                        </li>
                        <li class="post-likes ms-auto">
                            <a href="#"><i class="uil uil-eye"></i>{{ $post->views ?? 0 }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
        @endforeach
        
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

@section('sidebar')
    @include('partials.sidebar')
@endsection