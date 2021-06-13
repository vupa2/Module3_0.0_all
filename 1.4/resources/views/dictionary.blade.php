<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body class="w-25 mt-5 mx-auto">
    <form action="" method="POST" class="mb-3">
        @csrf
        <div class="mb-3">
            <label for="english" class="form-label">English</label>
            <input type="text" name="english" class="form-control" id="english" value="{{ $english ?? '' }}">
        </div>
        <button type="submit" class="btn btn-primary">Translate</button>
    </form>

    <div>
        <div class="mb-3">
            <label for="vietnamese" class="form-label">Vietnamese</label>
            <input type="number" name="vietnamese" class="form-control" id="vietnamese" value="{{ $vietnamese ?? '' }}" disabled>
        </div>
    </div>

</body>

</html>
