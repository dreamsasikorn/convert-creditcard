<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>menu</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>
</head>

<body>
    @include('layout.navbar')
    @if (Session::has('username'))
        <div class="container my-4 mt-2">
            <div class="row d-flex justify-content-center">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="Encrypt-tab" data-bs-toggle="tab"
                                data-bs-target="#Encrypt-tab-pane" type="button" role="tab"
                                aria-controls="Encrypt-tab-pane" aria-selected="true">Encrypt</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Decrypt-tab" data-bs-toggle="tab"
                                data-bs-target="#Decrypt-tab-pane" type="button" role="tab"
                                aria-controls="Decrypt-tab-pane" aria-selected="false">Decrypt</button>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="Encrypt-tab-pane" role="tabpanel"
                            aria-labelledby="Encrypt-tab" tabindex="0">
                            @include('encrypt')
                        </div>
                        <div class="tab-pane fade" id="Decrypt-tab-pane" role="tabpanel" aria-labelledby="Decrypt-tab"
                            tabindex="0">
                            {{-- <?php include 'decrypt.php'; ?> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endif
    {{-- <p>No. {{ $session }}</p> --}}

</body>

</html>
