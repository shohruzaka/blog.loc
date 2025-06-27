<div class="widget">
    <h4 class="widget-title mb-3">Ko'p o'qilganlar</h4>
    <ul class="image-list">
        @foreach($featuredPosts as $post)
        <li>
            <figure class="rounded">
                <a href="{{ route('post.show', $post->slug) }}">
                    <img src="{{ $post->image ? asset('storage/'.$post->image) : asset('assets/img/photos/a3.jpg') }}" alt="{{ $post->title }}" />
                </a>
            </figure>
            <div class="post-content">
                <h6 class="mb-2">
                    <a class="link-dark" href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a>
                </h6>
                <ul class="post-meta">
                    <li class="post-date">
                        <i class="uil uil-calendar-alt"></i>
                        <span>{{ $post->published_at ? $post->published_at->format('d M Y') : '' }}</span>
                    </li>
                    <li class="post-comments">
                        <a href="#"><i class="uil uil-comment"></i>{{ $post->comments_count ?? 0 }}</a>
                    </li>
                </ul>
            </div>
        </li>
        @endforeach
    </ul>
    <!-- /.image-list -->
</div>

<div class="widget">
    <h4 class="widget-title mb-3">Categories</h4>
    <ul class="unordered-list bullet-primary text-reset">
        @foreach($categories as $category)
            <li>
                <a href="#">
                    {{ $category->name }} ({{ $category->posts_count }})
                </a>
            </li>
        @endforeach
    </ul>
</div>

<div class="widget">
    <h4 class="widget-title mb-3">Tags</h4>
    <ul class="list-unstyled tag-list">
        @foreach($randomTags as $tag)
            <li>
                <a href="#" class="btn btn-soft-ash btn-sm rounded-pill">{{ $tag->name }}</a>
            </li>
        @endforeach
    </ul>
</div>

<div class="widget">
    <h4 class="widget-title mb-3">Biz haqimizda</h4>
    <p>Texnologiya sohasida innovatsiyalarni targ‘ib qiluvchi oddiy blogerlar jamoasi. Eng so‘nggi trendlar va texnologik yechimlar haqida o‘quvchilarimizni xabardor qilishga intilamiz. O‘zbekiston va butun dunyo bo‘ylab texno-enthusiastlar uchun foydali kontent yaratamiz.</p>
    <nav class="nav social">
        <a href="#"><i class="uil uil-twitter"></i></a>
        <a href="#"><i class="uil uil-facebook-f"></i></a>
        <a href="#"><i class="uil uil-dribbble"></i></a>
        <a href="#"><i class="uil uil-instagram"></i></a>
        <a href="#"><i class="uil uil-youtube"></i></a>
    </nav>
    <!-- /.social -->
</div>