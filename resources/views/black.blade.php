
<div class="content content-full">
    <div class="row">
        <div class="col-12">
            <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="block block-bordered">
                    <div class="block-header block-header-default">
                        <a class="btn btn-alt-secondary" href="{{route('post.index')}}">
                            <i class="fa fa-arrow-left me-1"></i> Back to list
                        </a>
                        <!-- <div class="block-options">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" value="" id="dm-post-edit-active" name="dm-post-edit-active" checked>
                            <label class="form-check-label" for="dm-post-edit-active">Set active</label>
                        </div>
                    </div> -->
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

                        <div class="row push">
                            <div class="col-12 col-lg-2">
                                <p class="text-muted">
                                    Yangilikning matni va eslatmalar
                                </p>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="mb-4">
                                    <label class="form-label" for="TitleUz">Title</label>
                                    <input type="text" class="form-control" id="TitleUz" name="title" placeholder="...">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label" for="DescUz">Description</label>
                                    <input type="text" class="form-control" id="DescUz" name="descript" placeholder="...">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Content</label>
                                    <textarea class="form-control text-area" name="content" rows="4" placeholder="..."></textarea>
                                </div>

                                <div class="mb-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label" for="post">Select category</label>
                                            <select class="form-select" id="post" name="category_id">
                                                @foreach($categories as $id=>$category)
                                                <option value="{{$id}}">{{$category}}</option>
                                                @endforeach
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

<!-- POST CREATE  -->


<!-- Page Content -->
<div class="content">
  <div class="row items-push">
    <div class="col-md-6 col-xl-4">
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Welcome</h3>
        </div>
        <div class="block-content fs-sm text-muted">
          <p>
            We’ve put everything together, so you can start working on your Laravel project as soon as possible! OneUI assets are integrated and work seamlessly with Laravel Vite, so you can use the npm scripts as you would in any other Laravel project.
          </p>
          <p>
            Feel free to use any examples you like from the full HTML version to build your own pages.
          </p>
          <p>
            <strong>Wish you all the best and happy coding!</strong>
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-4">
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Block Title</h3>
        </div>
        <div class="block-content fs-sm text-muted">
          <p>
            ...
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-4">
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Block Title</h3>
        </div>
        <div class="block-content fs-sm text-muted">
          <p>
            ...
          </p>
        </div>
      </div>
    </div>

    <div class="col-12">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Posts</h3>
          <div class="block-options">
            <button type="submit" class="btn btn-sm btn-alt-primary">
            <i class="far fa-fw fa-add"></i> Add
            </button>
          </div>
        </div>
        <div class="block-content">
          <table class="table table-hover table-vcenter">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px;">#</th>
                <th>Name</th>
                <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                <th class="text-center" style="width: 100px;">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="text-center" scope="row">1</th>
                <td class="fw-semibold fs-sm">
                  <a href="be_pages_generic_profile.html">Jack Estrada</a>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td class="text-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit Client" data-bs-original-title="Edit Client">
                      <i class="fa fa-fw fa-pencil-alt"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Remove Client" data-bs-original-title="Remove Client">
                      <i class="fa fa-fw fa-times"></i>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="text-center" scope="row">2</th>
                <td class="fw-semibold fs-sm">
                  <a href="be_pages_generic_profile.html">Carl Wells</a>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td class="text-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit Client" data-bs-original-title="Edit Client">
                      <i class="fa fa-fw fa-pencil-alt"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Remove Client" data-bs-original-title="Remove Client">
                      <i class="fa fa-fw fa-times"></i>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="text-center" scope="row">3</th>
                <td class="fw-semibold fs-sm">
                  <a href="be_pages_generic_profile.html">Carol White</a>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td class="text-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit Client" data-bs-original-title="Edit Client">
                      <i class="fa fa-fw fa-pencil-alt"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Remove Client" data-bs-original-title="Remove Client">
                      <i class="fa fa-fw fa-times"></i>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="text-center" scope="row">4</th>
                <td class="fw-semibold fs-sm">
                  <a href="be_pages_generic_profile.html">Albert Ray</a>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                </td>
                <td class="text-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit Client" data-bs-original-title="Edit Client">
                      <i class="fa fa-fw fa-pencil-alt"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Remove Client" data-bs-original-title="Remove Client">
                      <i class="fa fa-fw fa-times"></i>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="text-center" scope="row">5</th>
                <td class="fw-semibold fs-sm">
                  <a href="be_pages_generic_profile.html">Laura Carr</a>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                </td>
                <td class="text-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit Client" data-bs-original-title="Edit Client">
                      <i class="fa fa-fw fa-pencil-alt"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Remove Client" data-bs-original-title="Remove Client">
                      <i class="fa fa-fw fa-times"></i>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="text-center" scope="row">6</th>
                <td class="fw-semibold fs-sm">
                  <a href="be_pages_generic_profile.html">Megan Fuller</a>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                </td>
                <td class="text-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit Client" data-bs-original-title="Edit Client">
                      <i class="fa fa-fw fa-pencil-alt"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Remove Client" data-bs-original-title="Remove Client">
                      <i class="fa fa-fw fa-times"></i>
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>



  </div>
</div>
<!-- END Page Content Admin bosh sahifa-->