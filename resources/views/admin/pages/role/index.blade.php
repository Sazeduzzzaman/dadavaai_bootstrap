@extends('admin.layouts.app')
@section('content')
    <!-- Javascript behaviour -->
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="card">
                <div class="card-header d-flex flex-wrap">
                    <h6 class="mb-0">All Roles</h6>
                    <div class="d-inline-flex ms-auto">
                        <a class="text-body" data-card-action="collapse">
                            <i class="ph-caret-down"></i>
                        </a>
                        <a class="text-body mx-2" data-card-action="reload">
                            <i class="ph-arrows-clockwise"></i>
                        </a>
                        <a class="text-body" data-card-action="remove">
                            <i class="ph-x"></i>
                        </a>
                    </div>
                </div>

                <div class="collapse show">
                    <div class="card-body pt-1">
                        <div class="col-lg-12 p-0">
                            <div class="d-flex justify-content-end pb-1">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#roleAddModal"
                                    class="btn btn-flat-secondary btn-labeled btn-labeled-start btn-sm">
                                    <span class="btn-labeled-icon bg-secondary text-white">
                                        <i class="ph-plus-circle ph-sm"></i>
                                    </span>
                                    Add
                                </button>
                            </div>
                            <div class="table-responsive ">
                                <table class="table table-bordered table-striped text-center">
                                    <thead class="bg-secondary text-white">
                                        <tr>
                                            <th width="5%">#</th>
                                            <th width="55%"> Name</th>
                                            <th width="35%">Status </th>
                                            <th width="5%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Kopyov</td>
                                            <td> <span class="badge bg-secondary">Administrator</span> </td>
                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#roleEditModal"
                                                        class="text-primary">
                                                        <i class="ph-pen"></i>
                                                    </a>
                                                    <a href="#" class="text-danger mx-2">
                                                        <i class="ph-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Kopyov</td>
                                            <td> <span class="badge bg-secondary">Administrator</span> </td>
                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#roleEditModal"
                                                        class="text-primary">
                                                        <i class="ph-pen"></i>
                                                    </a>
                                                    <a href="#" class="text-danger mx-2">
                                                        <i class="ph-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Kopyov</td>
                                            <td> <span class="badge bg-secondary">Administrator</span> </td>
                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#roleEditModal"
                                                        class="text-primary">
                                                        <i class="ph-pen"></i>
                                                    </a>
                                                    <a href="#" class="text-danger mx-2">
                                                        <i class="ph-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Kopyov</td>
                                            <td> <span class="badge bg-secondary">Administrator</span> </td>
                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#roleEditModal"
                                                        class="text-primary">
                                                        <i class="ph-pen"></i>
                                                    </a>
                                                    <a href="#" class="text-danger mx-2">
                                                        <i class="ph-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Kopyov</td>
                                            <td> <span class="badge bg-secondary">Administrator</span> </td>
                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#roleEditModal"
                                                        class="text-primary">
                                                        <i class="ph-pen"></i>
                                                    </a>
                                                    <a href="#" class="text-danger mx-2">
                                                        <i class="ph-trash"></i>
                                                    </a>
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
        </div>
    </div>
    <!-- Disabled keyboard interaction add modal for Brand -->
    <div id="roleAddModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Role</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">User Role</label>
                            <select data-placeholder="Select a category..."
                                class="form-control form-control-sm select select-brand"
                                data-container-css-class="select-sm">
                                <option></option>
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                        {{-- For All Permission --}}
                        <div class="row mt-3" style="border-bottom: 1px solid #9d9fa23b;">
                            <div class="col-lg-12">
                                <label><input type="checkbox" name="sample" class="allPermission" /> Permission
                                    All</label>
                            </div>
                        </div>
                        {{-- For Individual Permission --}}
                        <div class="row d-flex justify-content-between mt-2">
                            <div class="col-lg-3" style="border-right: 1px solid #9d9fa23b;">
                                <label><input type="checkbox" name="sample" class="groupPermission" /> Manage</label>
                            </div>
                            <div class="col-lg-9" id="checkboxlist">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label><input class="me-1" type="checkbox" name="sample1" />Manage
                                            News</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <label><input class="me-1" type="checkbox" name="sample2" />Manage
                                            Post</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <label><input class="me-1" type="checkbox" name="sample3" />Manage
                                            Roles</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <label><input class="me-1" type="checkbox" name="sample4" />Manage
                                            News</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <label><input class="me-1" type="checkbox" name="sample5" />Manage
                                            Post</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <label><input class="me-1" type="checkbox" name="sample6" />Manage
                                            Roles</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary from-prevent-multiple-submits">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Disabled keyboard interaction add modal for brand -->

    <!-- Disabled keyboard interaction edit modal for brand -->
    <div id="roleEditModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Role</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">User Role</label>
                            <select data-placeholder="Select a category..."
                                class="form-control form-control-sm select select-brand"
                                data-container-css-class="select-sm">
                                <option></option>
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                        {{-- For All Permission --}}
                        <div class="row mt-3" style="border-bottom: 1px solid #9d9fa23b;">
                            <div class="col-lg-12">
                                <label><input type="checkbox" name="sample" class="allPermission" /> Permission
                                    All</label>
                            </div>
                        </div>
                        {{-- For Individual Permission --}}
                        <div class="row d-flex justify-content-between mt-2">
                            <div class="col-lg-3" style="border-right: 1px solid #9d9fa23b;">
                                <label><input type="checkbox" name="sample" class="groupPermission" /> Manage</label>
                            </div>
                            <div class="col-lg-9" id="checkboxlist">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label><input class="me-1" type="checkbox" name="sample1" />Manage
                                            News</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <label><input class="me-1" type="checkbox" name="sample2" />Manage
                                            Post</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <label><input class="me-1" type="checkbox" name="sample3" />Manage
                                            Roles</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <label><input class="me-1" type="checkbox" name="sample4" />Manage
                                            News</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <label><input class="me-1" type="checkbox" name="sample5" />Manage
                                            Post</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <label><input class="me-1" type="checkbox" name="sample6" />Manage
                                            Roles</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary from-prevent-multiple-submits">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Disabled keyboard interaction edit modal for brand -->

    @push('scripts')
        <script type="text/javascript">
            $('#roleAddModal').on('shown.bs.modal', function() {
                $('.select-brand').select2({
                    dropdownParent: $('#roleAddModal')
                })
            })
            $('#roleEditModal').on('shown.bs.modal', function() {
                $('.select-brand').select2({
                    dropdownParent: $('#roleEditModal')
                })
            })
        </script>
        <script>
            $('.allPermission').click(function() {
                if ($(this).is(':checked')) {
                    $('div input').attr('checked', true);
                } else {
                    $('div input').attr('checked', false);
                }
            });
            $('.groupPermission').click(function() {
                if ($(this).is(':checked')) {
                    $('div input').attr('checked', true);
                } else {
                    $('div input').attr('checked', false);
                }
            });
        </script>
    @endpush

    <!-- /javascript behaviour -->
@endsection
