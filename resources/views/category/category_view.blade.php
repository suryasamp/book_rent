@extends('layout.index_blank')

@section('title', 'Categories')

@section('submenu', 'Categories')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex">
                        <h6 class="text-white text-capitalize ps-3">Categories</h6>
                        <a href="categories/create" class="btn btn-light btn-sm ms-auto me-3 text-dark">Add New</a>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center justify-content-center mb-5">
                            <thead>
                                <tr>
                                    <th class="ps-6">No</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $data)
                                    <tr>
                                        <td class="ps-6">
                                            <p class="text-sm font-weight-bold mb-0">{{ $loop->iteration }}</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">{{ $data->name }}</p>
                                        </td>
                                        <td class="align-middle">
                                            <a href="" class="pe-2">
                                                <i class="fa-solid fa-pen-to-square fa-lg text-info"></i>
                                            </a>
                                            <a href=""><i class="fa-solid fa-trash fa-lg text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
