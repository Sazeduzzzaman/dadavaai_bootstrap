@extends('admin.layouts.app')
@section('content')
    <!-- Javascript behaviour -->
    <div class="row">
        <div class="col-lg-10 offset-lg-1 d-flex justify-content-between align-items-center bg-white p-2">
            <div>
                All Brand
            </div>
            <div>
                <button type="button" data-bs-toggle="modal" data-bs-target="#brandAddModal"
                    class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm">
                    <span class="btn-labeled-icon bg-success text-white">
                        <i class="ph-plus-circle ph-sm"></i>
                    </span>
                    Add
                </button>
            </div>
        </div>
        <div class="col-lg-10 offset-lg-1 p-0">
            <div class="table-responsive ">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="15%">Brand Image</th>
                            <th width="30%">Brand Name</th>
                            <th width="45%">Description</th>
                            <th width="5%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <img class="rounded-circle"
                                    src="https://t4.ftcdn.net/jpg/01/43/23/83/360_F_143238306_lh0ap42wgot36y44WybfQpvsJB5A1CHc.jpg"
                                    alt="" width="25px" height="25px">
                            </td>
                            <td>Kopyov</td>
                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore dolor ipsa ut aliquid rerum
                                accusamus saepe illo,</td>
                            <td>
                                <div class="d-inline-flex">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#brandEditModal"
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
                            <td>
                                <img class="rounded-circle"
                                    src="https://t4.ftcdn.net/jpg/01/43/23/83/360_F_143238306_lh0ap42wgot36y44WybfQpvsJB5A1CHc.jpg"
                                    alt="" width="25px" height="25px">
                            </td>
                            <td>Kopyov</td>
                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore dolor ipsa ut aliquid rerum
                                accusamus saepe illo,</td>
                            <td>
                                <div class="d-inline-flex">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#brandEditModal"
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
                            <td>
                                <img class="rounded-circle"
                                    src="https://t4.ftcdn.net/jpg/01/43/23/83/360_F_143238306_lh0ap42wgot36y44WybfQpvsJB5A1CHc.jpg"
                                    alt="" width="25px" height="25px">
                            </td>
                            <td>Kopyov</td>
                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore dolor ipsa ut aliquid rerum
                                accusamus saepe illo,</td>
                            <td>
                                <div class="d-inline-flex">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#brandEditModal"
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
                            <td>
                                <img class="rounded-circle"
                                    src="https://t4.ftcdn.net/jpg/01/43/23/83/360_F_143238306_lh0ap42wgot36y44WybfQpvsJB5A1CHc.jpg"
                                    alt="" width="25px" height="25px">
                            </td>
                            <td>Kopyov</td>
                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore dolor ipsa ut aliquid rerum
                                accusamus saepe illo,</td>
                            <td>
                                <div class="d-inline-flex">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#brandEditModal"
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
    <!-- Disabled keyboard interaction add modal for Brand -->
    <div id="brandAddModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Brand</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row d-flex align-items-center">
                            <span>Brand Image</span>
                            <div class="col-sm-12">
                                <input type="file" name="" id="" class="form-control form-control-sm"
                                    placeholder="Ex: Choose Brand Image" required>
                            </div>
                            {{-- <div class="col-sm-1">
                                <img class="img-fluid rounded-circle"
                                    src="https://t3.ftcdn.net/jpg/03/03/71/14/360_F_303711499_7o9BGpaDFaJJiOS2RLTY8i9xICgorT3o.jpg"
                                    width="25px" height="25px" alt="">
                            </div> --}}
                        </div>
                        <div class="row d-flex align-items-center">
                            <span>Brand Name</span>
                            <div class="col-sm-12">
                                <input type="text" name="" id="" class="form-control form-control-sm"
                                    placeholder="Ex: Enter Brand Name" maxlength="100" required>
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <span>Description</span>
                            <div class="col-sm-12">
                                <textarea name="" rows="3" cols="3" class="form-control"
                                    placeholder="Ex: Enter Brand Description" ></textarea>
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
    <div id="brandEditModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Your Brand</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row d-flex align-items-center">
                            <span>Brand Image</span>
                            <div class="col-sm-12">
                                <input type="file" name="" id="" class="form-control form-control-sm"
                                    placeholder="Ex: Choose Brand Image" required>
                            </div>
                            {{-- <div class="col-sm-1">
                                <img class="img-fluid rounded-circle"
                                    src="https://t3.ftcdn.net/jpg/03/03/71/14/360_F_303711499_7o9BGpaDFaJJiOS2RLTY8i9xICgorT3o.jpg"
                                    width="25px" height="25px" alt="">
                            </div> --}}
                        </div>
                        <div class="row d-flex align-items-center">
                            <span>Brand Name</span>
                            <div class="col-sm-12">
                                <input type="text" name="" id="" class="form-control form-control-sm"
                                    placeholder="Ex: Enter Brand Name" maxlength="100" required>
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <span>Description</span>
                            <div class="col-sm-12">
                                <textarea name="" rows="3" cols="3" class="form-control"
                                    placeholder="Ex: Enter Brand Description"></textarea>
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
    <!-- /javascript behaviour -->
@endsection
