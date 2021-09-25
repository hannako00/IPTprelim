@extends('base')

@section('content')
<div class="login">
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                    </ul>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/register')}}">Register</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/login')}}">Login</a>
                    </li>
                </ul>
        </div>
    </nav>
    </div>

<body>
<div class="row">
    <div class="col-md-4 offset-md-4">
        <div class="card mt-3">
            <div class="card-header text-white" style="background-color:midnightblue; text-align: center">
                <h3 class="card-title">Login Form</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/login')}}" method="post">
                {{csrf_field()}}

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                <button class="btn btn-primary" type="submit">Login</button>
                <button class="btn btn-danger" type="submit">Cancel</button>
            </form>
            </div>
        </div>
    </div>
</div>
</body>

<style>
    body{
        background-color: #e3f2fd;
    }
</style>

@stop
