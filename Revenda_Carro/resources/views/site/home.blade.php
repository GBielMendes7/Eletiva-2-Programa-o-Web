@extends('site.master.layout')

@section('content')

  <div class="container py-4">
    <div class="teste1 mb-4 bg-light rounded-3">
      <img class="img" src="./images/faxada-loja.jpg" class="figure-img rounded-3" alt="Loja">
      <div class="teste2 container-fluid py-5 text-white">
      <h2 class="display-5 fw-bold">Bem vindo á</h2>
        <h1 class="display-5 fw-bold mt-4">JC Carros</h1>
        <p class="col-md-8 fs-4">Atende clientes, identifica as necessidades e orienta com informações referentes ao veículo. Realiza o fechamento da venda e acompanha as práticas comerciais da concorrência, a fim de identificar oportunidade de novos negócios.</p>
      </div>
    </div>

    <header class="pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
        <span class="fs-4">Nossos Vendedores.</span>
      </a>
    </header>

    <div class="row align-items-md-stretch">
      @foreach ($vendedors as $vendedors)
      <div class="col-md-6 mt-3">
        <div class="h-100 p-5 text-bg-dark rounded-3">
          <h2>{{ $vendedors->nome }}</h2>
          <p>{{ $vendedors->email }}</p>
          <p>{{ $vendedors->telefone }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>



@endsection
