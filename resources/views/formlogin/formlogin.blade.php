<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('auth/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('auth/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('auth/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('auth/css/style.css') }}">

    <title>Login</title>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('auth/images/login.svg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4"><br><br><br><br>
                                <h3>Menu login Admin</h3>
                                <p class="mb-4">Silahkan login untuk memulai aktivitas anda sebagai admin Puskesmas
                                    Tarik</p>
                            </div>
                            <form action="/login" method="post">
                                @csrf
                                <div class="form-group first">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email">

                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password">

                                </div>

                                <input type="submit" class="btn btn-block btn-success">

                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    @include('sweetalert::alert')
    <script src="{{ asset('auth/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('auth/js/popper.min.js') }}"></script>
    <script src="{{ asset('auth/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('auth/js/main.js') }}"></script>
</body>

</html>
