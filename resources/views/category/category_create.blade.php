@extends('layout.index_blank')

@section('title', 'Create Categories')

@section('submenu', 'Categories / Create')

{{-- Toastr --}}
<link id="pagestyle" href="{{ asset('storage/css/toastr.css') }}" rel="stylesheet" />
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
    integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css"
    integrity="sha512-DIW4FkYTOxjCqRt7oS9BFO+nVOwDL4bzukDyDtMO7crjUZhwpyrWBFroq+IqRe6VnJkTpRAS6nhDvf0w+wHmxg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex">
                        <h6 class="text-white text-capitalize ps-3">Create Categories</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <form action="/categories" method="post">
                            @csrf
                            <div class="border border-2 border-radius-lg mx-5 mb-10">
                                <div class="my-4 ms-5">
                                    <label for="name" class="me-10">Name Categories</label>
                                    <input type="text" class="rounded-pill w-35 ps-3" id="name" name="name"
                                        placeholder="Name Category" required>
                                </div>
                                <div class="mx-3">
                                    {{-- <a href="/categories" class="btn btn-warning d-inline">Back</a> --}}
                                    <button type="button" class="btn btn-warning btn-sm" onclick=" back()">Back</button>
                                    <button type="submit" class="btn btn-success btn-sm d-inline float-end">Save</button>
                                </div>
                            </div>
                        </form>
                        {{-- <table class="table align-items-center justify-content-center mb-0">
                        </table> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>

    {{-- Toastr --}}
    <script src="{{ asset('storage/js/toastr.js') }}"></script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js"
        integrity="sha512-OmBbzhZ6lgh87tQFDVBHtwfi6MS9raGmNvUNTjDIBb/cgv707v9OuBVpsN6tVVTLOehRFns+o14Nd0/If0lE/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        function back() {
            location.href = "/categories";
        }
    </script>

    @if (Session::has('message'))
        <script>
            iziToast.success({
                //title: 'OK',
                position: 'topRight',
                transitionIn: 'bounceInDown',
                icon: 'fa-solid fa-check',
                timeout: 5000,
                message: '{{ Session::get('message') }}',
            });
        </script>
    @endif

@endsection
