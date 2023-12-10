<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>All Products Page!</h1>
    <div class="container">
        <div class="row">

            @if(Session::has('productDeleted'))
            <div class="alert alert-danger" role="alert" id="alert">
                {{Session::get('productDeleted')}}
              </div>
            @endif

            @foreach ($products as $product)
                
           

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$product->prodName}}</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">{{$product->prodPrice}}</h6>
                  <p class="card-text">{{$product->prodDesc}}</p>
                  <a href="/updateProduct/{{$product->id}}" class="btn btn-primary">Update</a>
                  <a href="/deleteProduct/{{$product->id}}" class="btn btn-danger">Delete</a>
                </div>
              </div>
              @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>