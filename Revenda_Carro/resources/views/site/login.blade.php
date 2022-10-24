@extends('site.master.layout')

@section('content')

<div class="container">
    <main class="form-signin w-100 m-auto">
    <form>
        <h1 class="mb-3 fw-normal mt-3">Acessar Area Administrativa</h1>
        <h2 class="h3 mb-3 fw-normal mt-3">Please sign in</h2>

        <div class="form-floating mt-2">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mt-2">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3 mt-2">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
        </div>
        <a class="btn btn-primary" href="{{ route('veiculomanager.index') }}">Entrar</a>
    </form>
    </main>

</div>

@endsection