@extends('admin.layouts.backend')

@section('content')
<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
      <div class="flex-grow-1">
        <h1 class="h3 fw-bold mb-1">
          Dashboard
        </h1>
        <h2 class="fs-base lh-base fw-medium text-muted mb-0">
          Welcome Admin, everything looks great.
        </h2>
      </div>
      <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">App</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">
            Dashboard
          </li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->
<div class="content content-full">
  <!-- Posts Statistics -->
  <div class="row text-center">
    <div class="col-6 col-xl-3">
      <!-- All Posts -->
      <a class="block block-rounded" href="be_pages_blog_post_manage.html">
        <div class="block-content block-content-full">
          <div class="py-md-3">
            <div class="py-3 d-none d-md-block">
              <i class="far fa-2x fa-file-alt text-primary"></i>
            </div>
            <p class="fs-4 fw-bold mb-0">
              {{ $stats['total_posts'] }}
            </p>
            <p class="text-muted mb-0">
              All Posts
            </p>
          </div>
        </div>
      </a>
      <!-- END All Posts -->
    </div>
    <div class="col-6 col-xl-3">
      <!-- Active Posts -->
      <a class="block block-rounded" href="be_pages_blog_post_manage.html">
        <div class="block-content block-content-full">
          <div class="py-md-3">
            <div class="py-3 d-none d-md-block">
              <i class="far fa-2x fa-eye text-primary"></i>
            </div>
            <p class="fs-4 fw-bold mb-0">
              {{ $stats['published_posts'] }}
            </p>
            <p class="text-muted mb-0">
              Published Posts
            </p>
          </div>
        </div>
      </a>
      <!-- END Active Posts -->
    </div>
    <div class="col-6 col-xl-3">
      <!-- Draft Posts -->
      <a class="block block-rounded" href="be_pages_blog_post_manage.html">
        <div class="block-content block-content-full">
          <div class="py-md-3">
            <div class="py-3 d-none d-md-block">
              <i class="fa fa-2x fa-pencil-alt text-primary"></i>
            </div>
            <p class="fs-4 fw-bold mb-0">
              {{ $stats['draft_posts'] }}
            </p>
            <p class="text-muted mb-0">
              Drafts
            </p>
          </div>
        </div>
      </a>
      <!-- END Draft Posts -->
    </div>
    <div class="col-6 col-xl-3">
      <!-- New Post -->
      <a class="block block-rounded" href="{{ route('post.create') }}">
        <div class="block-content block-content-full">
          <div class="py-md-3">
            <div class="py-3 d-none d-md-block">
              <i class="fa fa-2x fa-plus text-primary"></i>
            </div>
            <p class="fs-4 fw-bold mb-0">
              <i class="fa fa-plus text-primary me-1 d-md-none"></i> New Post
            </p>
            <p class="text-muted mb-0">
             by {{auth()->user()->name}}
            </p>
          </div>
        </div>
      </a>
      <!-- END New Post -->
    </div>
  </div>
  <!-- Post Statistics -->

  <!-- Posts -->
  <div class="block">
    <div class="block-header block-header-default">
      <h3 class="block-title">Posts</h3>
    </div>
    <div class="block-content">
      <!-- Search Posts -->
      <form class="push" action="be_pages_blog_post_manage.html" method="POST">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search Posts..">
          <span class="input-group-text">
            <i class="fa fa-fw fa-search"></i>
          </span>
        </div>
      </form>
      <!-- END Search Posts -->

      <!-- Posts Table -->
      <table class="table table-striped table-borderless table-vcenter">
        <thead>
          <tr class="bg-body-dark">
            <th style="width: 60px;">ID</th>
            <th style="width: 33%;">Title</th>
            <th class="d-none d-sm-table-cell">Category</th>
            <th class="d-none d-xl-table-cell">Views</th>
            <th class="d-none d-xl-table-cell">Published</th>
            <th style="width: 150px;" class="text-center">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($recentPosts as $post)
          <tr>
            <td>
              {{ $post->id }}
            </td>
            <td>
              <a href="be_pages_blog_story.html">
                {{ $post->title }}
              </a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="be_pages_generic_profile.html">{{ $post->category->name }}</a>
            </td>
            <td class="d-none d-xl-table-cell">
              {{ $post->views }}
            </td>
            <td class="d-none d-xl-table-cell">
              {{ $post->published_at ? $post->published_at->format('F j, Y \a\t H:i') : 'Not Published' }}
            </td>
            <td class="text-center">

              <a href="{{route('post.edit', $post->id)}}" class="btn btn-sm btn-alt-secondary">
                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
              </a>

              <a href="{{route('post.show', $post->id)}}" class="btn btn-sm btn-alt-secondary">
                <i class="fa fa-fw fa-eye text-success"></i>
              </a>
              <form action="{{route('post.destroy', $post->id)}}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-sm btn-alt-secondary" onclick="return confirm('Are you sure you want to delete this post?');">
                  <i class="fa fa-fw fa-trash text-danger"></i>
                </button>
              </form>

            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <!-- END Posts Table -->

      <!-- Posts Pagincation -->
      <!-- <nav aria-label="Posts Navigation">
        <ul class="pagination justify-content-end">
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
              <span aria-hidden="true">
                <i class="fa fa-angle-double-left"></i>
              </span>
              <span class="visually-hidden">Previous</span>
            </a>
          </li>
          <li class="page-item active">
            <a class="page-link" href="javascript:void(0)">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)" aria-label="Next">
              <span aria-hidden="true">
                <i class="fa fa-angle-double-right"></i>
              </span>
              <span class="visually-hidden">Next</span>
            </a>
          </li>
        </ul>
      </nav> -->

      <!-- END Posts Pagincation -->
    </div>
  </div>
  <!-- END Posts -->
</div>

@endsection