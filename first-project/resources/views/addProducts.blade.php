<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .hidden{
            display: none;
        }
    </style>
</head>

<body>
    <h1 class='text-center mt-3'>Add Products Page!</h1>
    <div class="container">
        <div class="row">
            @if(Session::has('productAdded'))
            <div class="alert alert-info" role="alert" id="alert">
                {{Session::get('productAdded')}}
              </div>
              @endif
            <form class="row g-3" action="/productAdded" method="post">
                @csrf
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Product Name</label>
                    <input type="text" name="prodName" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Product Price</label>
                    <input type="text" name="prodPrice" class="form-control" id="inputPassword4">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Product Description</label>
                    <textarea class="form-control" name="prodDesc" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>


                <div class="col-12">
                    <button type="submit" name="addBtn" class="btn btn-primary">Add Product</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
<script>


    let alert = document.getElementById('alert');
    setTimeout(() => {
        alert.classList.add('hidden');
    }, 4000);


</script>