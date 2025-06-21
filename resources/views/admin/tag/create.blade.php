@extends('admin.layouts.backend')
@section('css')

<link rel="stylesheet" href="{{asset('admin/js/plugins/flatpickr/flatpickr.min.css') }}">

@endsection
@section('content')
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
                    <li class="breadcrumb-item">App</li>
                    <li class="breadcrumb-item">Posts</li>
                    <li class="breadcrumb-item" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="content content-full content-boxed">
    <!-- New Post -->
    <form action="be_pages_blog_post_add.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
        <div class="block">
            <div class="block-header block-header-default">
                <a class="btn btn-alt-secondary" href="be_pages_blog_post_manage.html">
                    <i class="fa fa-arrow-left me-1"></i> Manage Posts
                </a>
                <div class="block-options">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" value="" id="dm-post-add-active" name="dm-post-add-active">
                        <label class="form-check-label" for="dm-post-add-active">Set active</label>
                    </div>
                </div>
            </div>
            <div class="block-content">
                <div class="row justify-content-center push">
                    <div class="col-md-10">
                        <div class="mb-4">
                            <label class="form-label" for="TitleUz">Title</label>
                            <input type="text" class="form-control" id="TitleUz" name="title" placeholder="...">
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="DescUz">Description</label>
                            <textarea class="form-control" id="DescUz" name="descript" rows="3"></textarea>
                        </div>

                        <div class="mb-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label" for="post">Select category</label>
                                    <select class="form-select" id="post" name="category_id">
                                       
                                    </select>
                                </div>
                                <div class="col-md-6 mt-3 mt-md-0">
                                    <label class="form-label" for="file-input">Image</label>
                                    <input class="form-control" type="file" id="file-input" name="image" onchange="previewImage(event)">
                                    <img id="image-preview" src="#" alt="Image Preview" style="display:none; width: 200px; height: 200px; margin-top: 10px;">
                                </div>
                                <script>
                                    function previewImage(event) {
                                        var reader = new FileReader();
                                        reader.onload = function() {
                                            var output = document.getElementById('image-preview');
                                            output.src = reader.result;
                                            output.style.display = 'block';
                                        };
                                        reader.readAsDataURL(event.target.files[0]);
                                    }
                                </script>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Body</label>
                            <textarea name="dm-post-add-body" class="form-control" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-content bg-body-light">
                <div class="row justify-content-center push">
                    <div class="col-md-10 text-end">
                        <button type="submit" class="btn btn-alt-primary">
                            <i class="fa fa-fw fa-check opacity-50 me-1"></i> Create Post
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- END New Post -->
</div>


@endsection

@section('js_after')
<script src="{{asset('admin/js/plugins/flatpickr/flatpickr.min.js') }}"></script>
@endsection