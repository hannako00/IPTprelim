<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <title></title>
</head>
<body>
    <div class="landing-page">
        <nav class="navbar navbar-dark" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <ul class="nav justify-content-end">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>
                        </ul>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/register')}}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/login')}}">Login</a>
                        </li>
                    </ul>
            </div>
        </nav>
    </div>

    <br>

    <div class="card text-center">
        <div class="card-header" style="background-color: #fdf1e3">
          <h3>Featured</h3>
        </div>
        <div class="card-body">
          <h2 class="card-title">Logue Fashion</h2>
          <p class="card-text">The fashionista insider runaway.</p>
          <a href="{{url('/register')}}" class="btn btn-primary">Shop Now</a>
        </div>
      </div>
<br>
      <div class="row text-center">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body" style="background-color: #dd924c">
        <h5 class="card-title" style="text-align: center;">Classic Signature Men's Suit</h5>
        <p class="card-text" style="text-align: center;">With the custom fitting options, I finally found a suit that fits comfortably! Great material!</p>
        <a href="#" class="btn btn-primary">Browse Suits</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body" style="background-color: #dd924c">
        <h5 class="card-title" style="text-align: center;">Men's Lux Leather Watch</h5>
        <p class="card-text" style="text-align: center;">I bought this as a gift from my husband and he loves it! Can be worn in different occasions!</p>
        <a href="#" class="btn btn-primary">Browse Watch</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>

<style>
    body{
        background-color:lightgray;
    }
</style>



