@extends('layout.index_blank')

@section('title', 'Dashboard')

@section('submenu', 'Dashboard')

@section('content')

    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div
                    class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">group</i>
                </div>
                <div class="text-end pt-1">
                    <p class="fs-5 fw-bold text-dark mb-0">Total Users</p>
                    <h4 class="mb-0">{{ $user_count }}</h4>
                </div>
            </div>
            <div class="card-footer p-1">
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div
                    class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">menu_book</i>
                </div>
                <div class="text-end pt-1">
                    <p class="fs-5 fw-bold text-dark mb-0">Total Books</p>
                    <h4 class="mb-0">10</h4>
                </div>
            </div>
            <div class="card-footer p-1">
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div
                    class="icon icon-lg icon-shape bg-gradient-warning shadow-warning text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">category</i>
                </div>
                <div class="text-end pt-1">
                    <p class="fs-5 fw-bold text-dark mb-0">Total Categories</p>
                    <h4 class="mb-0">{{ $category_count }}</h4>
                </div>
            </div>
            <div class="card-footer p-1">
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div
                    class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">list_alt</i>
                </div>
                <div class="text-end pt-1">
                    <p class="fs-5 fw-bold text-dark mb-0">Total Log Rent</p>
                    <h4 class="mb-0">12</h4>
                </div>
            </div>
            <div class="card-footer p-1">
            </div>
        </div>
    </div>
    {{-- <div class="pt-3">
        <h3>Hallo! Welcome Back <span class="text-uppercase">{{ Auth::user()->username }}</span></h3>
    </div> --}}
    <div class="border border-4 col-11 mt-4 mx-5 border-radius-2xl bg-putih">
        <h5 class="mt-2">Rent Log</h5>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>First</th>
                    <th>Last</th>
                    <th>Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4" class="text-center">No Data</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
