<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encrypt</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>
</head>

<body>

    @if (Session::has('username'))
        <form action="uploadFileEncrypt" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 my-4">
                <label for="EncryptFile" class="form-label">file สำหรับ encrypt</label>
                <input class="form-control" type="file" id="EncryptFile" name="EncryptFile">
                <button type="submit" class="btn btn-primary mt-2">Upload</button>
                <button type="reset" class="btn btn-secondary mt-2">reset</button>
            </div>
        </form>
    @endif
</body>

</html>
