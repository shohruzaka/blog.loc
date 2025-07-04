@extends('admin.layouts.backend')
@section('css')

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
                    <li class="breadcrumb-item" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="content content-full">
    <div class="row">
        <div class="col-12">
            <form action="{{route('post.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="block block-bordered">
                    <div class="block-header block-header-default">
                        <a class="btn btn-alt-secondary" href="{{route('post.index')}}">
                            <i class="fa fa-arrow-left me-1"></i> Back to list
                        </a>
                        <div class="block-options">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="status" id="add-active" value="1" {{ $post->status == 'published' ? 'checked' : '' }}>
                                <label class="form-check-label" for="add-active">Set active</label>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="row">
                            <div class="col-12">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="row justify-content-center push">
                            <div class="col-md-10">
                                <div class="mb-4">
                                    <label class="form-label" for="TitleUz">Title</label>
                                    <input type="text" class="form-control" id="TitleUz" name="title" value="{{$post->title}}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label" for="DescUz">Description</label>
                                    <textarea rows="3" class="form-control" id="DescUz" name="descript">{{$post->descript}}</textarea>
                                </div>

                                <div class="mb-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label" for="post">Select category</label>
                                            <select class="form-select" id="post" name="category_id">
                                                @foreach($categories as $id=>$category)
                                                <option value="{{$id}}" @if($id==$post->category_id) selected @endif>
                                                    {{$category}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6 mt-3 mt-md-0">
                                            <label class="form-label" for="file-input">Image</label>
                                            <input class="form-control" type="file" id="file-input" name="image" onchange="previewImage(event)">
                                            <img id="image-preview" src="{{ $post->image ? asset('storage/' . $post->image) : '#' }}" alt="Image Preview" style="display:{{ $post->image ? 'block' : 'none' }}; width: 200px; height: 200px; margin-top: 10px;">
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
                                    <label class="form-label">Content</label>
                                    <textarea class="form-control text-area" name="content" rows="6">{{$post->content}}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label" for="tags">Tags</label>
                                    <input type="text" class="form-control" id="tags" name="tags" 
                                        value="{{ old('tags', $post->tags ? implode(', ', $post->tags->pluck('name')->toArray()) : '') }}" 
                                        placeholder="tag1, tag2, tag3">
                                    <small class="form-text text-muted">Taglarni vergul bilan ajrating.</small>
                                    @if($post->tags && $post->tags->count())
                                        <div class="mt-2">
                                            <strong>Postdagi taglar:</strong>
                                            @foreach($post->tags as $tag)
                                                <span class="badge bg-info">{{ $tag->name }}</span>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="block-content bg-body-light">
                        <div class="row push">
                            <div class="text-end">
                                <button type="submit" class="btn btn-alt-primary">
                                    <i class="fa fa-fw fa-check opacity-50 me-1"></i> Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('js_after')

@endsection