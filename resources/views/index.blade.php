<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>
</head>

<body>
    @include('layout.navbar')
    <form action="dashboard" method="POST">
        @csrf
        <div class="container mt-4 py-4">
            <div class="mb-3 row py-4">
                <label for="email" class="col-sm-2 col-form-label px-2">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password" class="col-sm-2 col-form-label px-2">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button type="submit" id="submit" class="btn btn-block btn-success">Login</button>
            </div>
        </div>
    </form>
</body>

</html>
