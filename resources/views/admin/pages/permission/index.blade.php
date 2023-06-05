@extends('admin.layouts.app')
@section('content')
    <!-- Javascript behaviour -->
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="card">
                <div class="card-header d-flex flex-wrap">
                    <h6 class="mb-0">All Permission</h6>
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
                                <button type="button" data-bs-toggle="modal" data-bs-target="#permissionAddModal"
                                    class="btn btn-flat-secondary btn-labeled btn-labeled-start btn-sm">
                                    <span class="btn-labeled-icon bg-secondary text-white">
                                        <i class="ph-plus-circle ph-sm"></i>
                                    </span>
                                    Add
                                </button>
                            </div>
                            <div class="table-responsive ">
                                <table class="table table-bordered table-striped text-center ">
                                    <thead class="bg-secondary text-white">
                                        <tr>
                                            <th width="5%">#</th>
                                            <th width="90%">Name</th>
                                            <th width="5%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore dolor ipsa
                                                ut aliquid rerum
                                                accusamus saepe illo,</td>
                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#permissionEditModal" class="text-primary">
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
                                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore dolor ipsa
                                                ut aliquid rerum
                                                accusamus saepe illo,</td>
                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#permissionEditModal" class="text-primary">
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
                                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore dolor ipsa
                                                ut aliquid rerum
                                                accusamus saepe illo,</td>
                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#permissionEditModal" class="text-primary">
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
                                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore dolor ipsa
                                                ut aliquid rerum
                                                accusamus saepe illo,</td>
                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#permissionEditModal" class="text-primary">
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
                                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore dolor ipsa
                                                ut aliquid rerum
                                                accusamus saepe illo,</td>
                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#permissionEditModal" class="text-primary">
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
    <div id="permissionAddModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Permission</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="#" method="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Permission Name</label>
                            <input type="text" name="permission_name" id="permission_name"
                                class="form-control form-control-sm" placeholder="Enter Permission Name" maxlength="200"
                                required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Permission Group</label>
                            <select data-placeholder="Select Permission Group..." name="permission_group"
                                id="permission_group" class="form-control form-control-sm select select-add-permission"
                                data-container-css-class="select-sm">
                                <option></option>
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </select>
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
    <div id="permissionEditModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Your Permission</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="#" method="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Permission Name</label>
                            <input type="text" name="permission_name" id="permission_name"
                                class="form-control form-control-sm" placeholder="Enter Permission Name" maxlength="200"
                                required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Permission Group</label>
                            <select data-placeholder="Select Permission Group..." name="permission_group"
                                id="permission_group" class="form-control form-control-sm select select-edit-permission"
                                data-container-css-class="select-sm">
                                <option></option>
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="WY">Wyoming</option>
                            </select>
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
            $('#permissionAddModal').on('shown.bs.modal', function() {
                $('.select-add-permission').select2({
                    dropdownParent: $('#permissionAddModal')
                })
            })
            $('#permissionEditModal').on('shown.bs.modal', function() {
                $('.select-edit-permission').select2({
                    dropdownParent: $('#permissionEditModal')
                })
            })
        </script>
    @endpush

    <!-- /javascript behaviour -->
@endsection
