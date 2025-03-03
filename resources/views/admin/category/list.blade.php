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
                        Categories
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
            <h3 class="block-title">Category</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option me-2" data-bs-toggle="modal" data-bs-target="#modal-block-popin">
                    <i class="fa fa-plus me-1"></i> New Category
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
            </div>
        </div>
        <div class="block-content">
            <!-- Topics -->
            <table class="table table-striped table-borderless table-vcenter">
                <thead class="border-bottom">
                    <tr>
                        <th colspan="2">Name</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 100px;">Posts</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 100px;">Views</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 200px;">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($ctgr as $ctgr)
                    <tr>
                        <td colspan="2">
                            <a class="fw-semibold" href="be_pages_forum_discussion.html">{{$ctgr->name}}</a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="fw-semibold" href="#" role="button">124</a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="fw-semibold" href="#" role="button">1148</a>
                        </td>
                        <td class="d-md-table-cell text-center">
                            <div class="btn-group">
                                <a href="#" role="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="modal" data-bs-target="#modal-edit-{{$ctgr->id}}">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </a>
                                <div class="modal fade" id="modal-edit-{{$ctgr->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-edit-{{$ctgr->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-popin" role="document">
                                        <div class="modal-content">
                                            <div class="block block-rounded block-transparent mb-0">
                                                <div class="block-header block-header-default">
                                                    <h3 class="block-title">Edit Category</h3>
                                                    <div class="block-options">
                                                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                                            <i class="fa fa-fw fa-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <form action="{{route('category.update', $ctgr->id)}}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="block-content fs-sm">
                                                        <div class="form-floating mb-4">
                                                            <input type="text" class="form-control" id="edit-category-{{$ctgr->id}}" name="name" value="{{$ctgr->name}}">
                                                            <label for="edit-category-{{$ctgr->id}}">Category Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="block-content block-content-full text-end bg-body">
                                                        <button type="submit" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                <form action="{{route('category.destroy', $ctgr->id)}}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-alt-secondary" onclick="return confirm('Are you sure you want to delete this category?');">
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

<div class="modal fade" id="modal-block-popin" tabindex="-1" role="dialog" aria-labelledby="modal-block-popin" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-transparent mb-0">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Add</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>

                <form action="{{route('category.store')}}" method="post">
                    @csrf
                    <div class="block-content fs-sm">

                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" id="example-text-input-floating" name="name" placeholder="John Doe">
                            <label for="example-text-input-floating">New Category</label>
                        </div>

                    </div>

                    <div class="block-content block-content-full text-end bg-body">
                        <!-- <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">Close</button> -->
                        <button type="submit" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


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