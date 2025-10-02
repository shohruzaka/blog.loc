@extends('layouts.app')

@section('content')
<!-- Last post -->
<div class="blog classic-view">
    <article class="post">
        <div class="card">
            <figure class="card-img-top overlay overlay-1 hover-scale">
                <a href="{{ route('single-post', $lastPost->slug) }}">
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

<!-- oxirig postlar -->
<div class="blog grid grid-view">
    <div class="row isotope gx-md-8 gy-8 mb-8">
        @foreach($recentPosts as $post)
        <article class="item post col-md-6">
            <div class="card">
                <figure class="card-img-top overlay overlay-1 hover-scale">
                    <a href="{{ route('single-post', $post->slug) }}">
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
                            <a class="link-dark" href="{{ route('single-post', $post->slug) }}">{{ $post->title }}</a>
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

<div class="d-flex justify-content-center">
    <nav aria-label="Page navigation" class="w-100">
        {{ $recentPosts->links() }}
    </nav>
</div>

@endsection

@section('sidebar')
    @include('partials.sidebar')
@endsection