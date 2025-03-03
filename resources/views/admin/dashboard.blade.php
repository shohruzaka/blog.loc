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
<!-- END Page Content -->
@endsection