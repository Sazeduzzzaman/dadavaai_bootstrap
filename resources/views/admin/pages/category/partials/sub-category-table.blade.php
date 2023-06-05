<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th width="45%">Category Name</th>
                        <th width="45%">Sub Category Name</th>
                        <th width="5%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Eugene</td>
                        <td>Kopyov</td>
                        <td>
                            <div class="d-inline-flex">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#subCategoryEditModal"
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
                        <td>2</td>
                        <td>Victoria</td>
                        <td>Baker</td>
                        <td>
                            <div class="d-inline-flex">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#subCategoryEditModal"
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
                        <td>3</td>
                        <td>James</td>
                        <td>Alexander</td>
                        <td>
                            <div class="d-inline-flex">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#subCategoryEditModal"
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
                        <td>4</td>
                        <td>Franklin</td>
                        <td>Morrison</td>
                        <td>
                            <div class="d-inline-flex">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#subCategoryEditModal"
                                    class="text-primary">
                                    <i class="ph-pen"></i>
                                </a>
                                <a href="#" class="text-danger mx-2 delete">
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

<!-- Disabled keyboard interaction add modal for category -->
<div id="subCategoryAddModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Sub Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select data-placeholder="Select a category..."
                            class="form-control form-control-sm select select-sub" data-container-css-class="select-sm">
                            <option></option>
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sub Category:</label>
                        <select data-placeholder="Select a sub category..."
                            class="form-control form-control-sm select select-sub" data-container-css-class="select-sm">
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
<!-- Disabled keyboard interaction add modal for category -->

<!-- Disabled keyboard interaction edit modal for category -->
<div id="subCategoryEditModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Your Sub Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select data-placeholder="Select a category..."
                            class="form-control form-control-sm select select-sub"
                            data-container-css-class="select-sm">
                            <option></option>
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sub Category:</label>
                        <select data-placeholder="Select a sub category..."
                            class="form-control form-control-sm select select-sub"
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
<!-- Disabled keyboard interaction edit modal for category -->

@push('scripts')
    <script type="text/javascript">
        $('#subCategoryAddModal').on('shown.bs.modal', function() {
            $('.select-sub').select2({
                dropdownParent: $('#subCategoryAddModal')
            })
        })
        $('#subCategoryEditModal').on('shown.bs.modal', function() {
            $('.select-sub').select2({
                dropdownParent: $('#subCategoryEditModal')
            })
        })
    </script>
@endpush
