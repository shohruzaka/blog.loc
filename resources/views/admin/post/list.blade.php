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
                        Posts
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Topics -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Posts</h3>
            <div class="block-options">
                <a href="{{route('post.create')}}" class="btn-block-option me-2">
                    <i class="fa fa-plus me-1"></i> New Post
                </a>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
            </div>
        </div>
        <div class="block-content">
            <!-- Topics -->
            <table class="table table-striped table-borderless table-vcenter">
                <thead class="border-bottom">
                    <tr>
                        <th colspan="2">Title</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 100px;">Category</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 100px;">Views</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 200px;">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($posts as $post)
                    <tr>
                        <td colspan="2">
                            <p class="fw-semibold text-muted">{{$post->title}}</p>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="fw-semibold" href="#" role="button">{{$post->category->name}}</a>
                        </td>
                        <td class="d-none d-md-table-cell text-center text-muted">
                            {{$post->views}}
                        </td>
                        <td class="d-md-table-cell text-center">
                            <div class="btn-group">

                                <a href="{{route('post.edit', $post->id)}}" class="btn btn-sm btn-alt-secondary">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </a>

                                <a href="{{route('post.show', $post->id)}}" class="btn btn-sm btn-alt-secondary">
                                    <i class="fa fa-fw fa-eye"></i>
                                </a>

                                <form action="{{route('post.destroy', $post->id)}}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-alt-secondary" onclick="return confirm('Are you sure you want to delete this post?');">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <!-- END Topics -->
        </div>
    </div>
    <!-- END Topics -->
</div>
<!-- END Page Content -->


@endsection

@section('js')

@if(session('success'))
<script>
    One.helpersOnLoad('jq-notify');
    One.helpers('jq-notify', {
        align: 'right', // 'right', 'left', 'center'
        from: 'top', // 'top', 'bottom'
        type: 'success', // 'info', 'success', 'warning', 'danger'
        icon: 'fa fa-check me-2', // Icon class
        message: "{{ session('success') }}"
    });
</script>
@endif

@if(session('error'))
<script>
    One.helpersOnLoad('jq-notify');
    One.helpers('jq-notify', {
        align: 'right', // 'right', 'left', 'center'
        from: 'top', // 'top', 'bottom'
        type: 'danger', // 'info', 'success', 'warning', 'danger'
        icon: 'fa fa-times me-2', // Icon class
        message: "{{ session('error') }}"
    });
</script>
@endif

@endsection