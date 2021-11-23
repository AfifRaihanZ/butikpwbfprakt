<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>
    
    <div>
    </div>

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
    </head>
    <body class="text-center">
    <main class="form-signin">

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form action='/login' method='post'>
        @csrf
        <h1 class="h3 mb-3 fw-normal">Please login</h1>

        <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" 
        placeholder="name@example.com" autofocus required value="{{ old('email') }}">
        <label for="email">Email</label>
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" 
        placeholder="Password" required>
        <label for="password">Password</label>
        </div>

        {{-- <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
        </div> --}}

        <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
        <small class="d-block text-center mt-3">Not Registered ? <a href="/register">Register Now</a></small>
        <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>
    </main>
  </body>
</html>