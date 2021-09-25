
@extends('base')

@section('content')


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

<div class="head" style="text-align: center;">
    <h2>Welcome</h2>
</div>

<br>

<div class="board">
<div class="card" style="height: 650px; width: 900px;">
    <img src="{{ URL::to('/picture/suits.jpg') }}">
    <div class="card-body">
      <h5 class="card-title">Suits for Men</h5>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam obcaecati exercitationem libero vitae provident maiores voluptatum, iste officia, nobis praesentium ratione consequatur placeat! Architecto doloremque sequi omnis at consectetur eveniet?</p>
    </div>
  </div>

  <br>

  <div class="card" style="height: 550px; width: 900px">
    <div class="card-body">
      <h5 class="card-title">Watch for Men</h5>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, deleniti accusantium nemo vel ipsam aliquid eius ut inventore officiis unde. Facilis enim officiis aspernatur hic iure corrupti accusamus natus aut!</p>
    </div>
    <img src="{{ URL::to('/picture/watches.jpg') }}">
  </div>
</div>

<br>

<footer>
    <div class="foot" style="text-align: center;">
        <p>All Rights Reserved 2021.</p>
    </div>
</footer>

<style>
    body{
        background-color: #e3f2fd;
    }

    .board{
        padding-left: 16%;
    }

    .head{
        background-color: cadetblue;
    }

    .foot{
        background-color: gray;
    }
</style>

@endsection


