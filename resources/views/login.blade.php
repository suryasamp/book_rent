<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('storage/img/logo.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('storage/img/logo.png') }}">


    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Book Rent | Login</title>
    <style>
        .button {
            display: inline-block;
            border-radius: 10px;
            background-color: #019CD4;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 22px;
            padding: 3px;
            width: 100%;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }
    </style>
</head>

<body>
    <section class="vh-100" style="background-color: #344767;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 ">
                            <div class="text-center">
                                <img src="{{ asset('storage/img/logo.png') }}" alt="logo" srcset=""
                                    width="150px" height="100px" class="mb-2">
                                <h5 class="mb-3"><span class="fw-bold" style="color:#019CD4">Book</span> Rent
                                </h5>
                            </div>
                            <h3 class="mb-3">Login</h3>
                            <form method="POST" action="">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="username" name="username"
                                        placeholder="username">
                                    <label for="email">Username</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Password">
                                    <label for="password">Password</label>
                                </div>
                                <div class="mt-2 text-center">
                                    <button type="submit" class="button mb-3" style="vertical-align:middle">
                                        <span>Login </span>
                                    </button>
                                    <i>
                                        Don't have an account?
                                    </i>
                                    <a class="pt-5 " href="/register">Register</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    {{-- Toastr --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @if (Session::has('loginError'))
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
            }
            toastr.error("{{ Session::get('loginError') }}");
        </script>
    @endif

</body>

</html>
