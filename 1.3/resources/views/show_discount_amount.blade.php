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
            <label for="productDescription" class="form-label">Product Description</label>
            <input type="text" name="productDescription" class="form-control" id="productDescription" value="{{ $productDescription ?? '' }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" id="price" value="{{ $price ?? '' }}">
        </div>
        <div class="mb-3">
            <label for="discountPercent" class="form-label">Discount Percent</label>
            <input type="number" name="discountPercent" class="form-control" id="discountPercent" value="{{ $discountPercent ?? '' }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div>
        <div class="mb-3">
            <label for="discountPrice" class="form-label">Discount Price</label>
            <input type="number" name="discountPrice" class="form-control" id="discountPrice" value="{{ $discountPrice ?? '' }}" disabled>
        </div>
        <div class="mb-3">
            <label for="discountAmount" class="form-label">Discount Amount</label>
            <input type="number" name="discountAmount" class="form-control" id="discountAmount" value="{{ $discountAmount ?? '' }}" disabled>
        </div>
    </div>

</body>

</html>
