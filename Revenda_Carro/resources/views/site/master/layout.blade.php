<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaravelProj02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>
<body>

<header class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a class="navbar-brand h2 bold" href="#">JC Carros</a>
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
          </a>

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li class="nav-item {{ (Route::current()->getName() === 'site.home' ? ' active' : '') }}"><a href="{{ route('site.home') }}" class="nav-link px-2 text-white">Home</a></li>
            <li class="nav-item {{ (Route::current()->getName() === 'site.estoque' ? ' active' : '') }}"><a href="{{ route('site.estoque') }}" class="nav-link px-2 text-white">Estoque</a></li>
            <li class="nav-item {{ (Route::current()->getName() === 'site.contatos' ? ' active' : '') }}"><a href="{{ route('site.contatos') }}" class="nav-link px-2 text-white">Contato</a></li>
          </ul>


          <div class="text-end">
          <a class="btn btn-outline-light me-2" href="{{ route('site.login') }}">Entrar</a>
          </div>
        </div>
      </div>
  
    
</header>


<main role="main">

    @yield('content')

<!-- FOOTER -->
    <p>&nbsp;</p>
  <footer class="py-3 my-4 bg-dark text-white">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item {{ (Route::current()->getName() === 'site.home' ? ' active' : '') }}"><a href="{{ route('site.home') }}" class="nav-link px-2 text-white">Home</a></li>
      <li class="nav-item {{ (Route::current()->getName() === 'site.estoque' ? ' active' : '') }}"><a href="{{ route('site.estoque') }}" class="nav-link px-2 text-white">Estoque</a></li>
      <li class="nav-item {{ (Route::current()->getName() === 'site.contatos' ? ' active' : '') }}"><a href="{{ route('site.contatos') }}" class="nav-link px-2 text-white">Contato</a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2022 Company, Inc</p>
  </footer>

</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>
