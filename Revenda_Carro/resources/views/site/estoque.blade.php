@extends('site.master.layout')

@section('content')

<div class="container">
    <h1 class="mt-5">Veículos Disponíveis</h1>
    <p class="lead">Agende uma avaliação gratuita, e que respeita todos os protocolos de saúde, em sua casa ou em uma de nossas lojas e venda o seu carro em 24 horas.</p>
</div>

<div class="container p-3">
  @foreach ($veiculos as $veiculo)
  <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <div class="row">
          <div class="col">
            <h1 class="display-5 fw-bold">{{ $veiculo->marca }}</h1>
            <p class="col-md-8 fs-4">{{ $veiculo->detalhes }}</p>
            <a class="btn btn-primary btn-lg" href="{{ route('veiculomanager.show', $veiculo->id) }}" type="button">Detalhes do Veiculo</a>
          </div>
          <div class="col col-lg-3">
            <img src="{{ asset($veiculo->foto) }}" class="figure-img img-fluid rounded-3" alt="{{ $veiculo->marca }}" width="300px">
          </div>
        </div>
      </div>
  </div>

    @endforeach
    <!-- START THE FEATURETTES -->

    <!-- /END THE FEATURETTES -->
</div>

@endsection
