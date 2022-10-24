@extends('areaadm.master.layout')

@section('content')
<div class="container">
    <h1 class="mt-5">Detalhes do Veiculo: {{ $veiculo->marca }}</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-primary" href="{{ route('veiculomanager.index') }}"> Voltar</a>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 h2 mt-3">
            <div class="form-group">
                <strong>Marca:</strong>
                {{ $veiculo->marca }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 h2 mt-3">
            <div class="form-group">
                <strong>Modelo:</strong>
                {{ $veiculo->modelo }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 h2 mt-3">
            <div class="form-group">
                <strong>Cor:</strong>
                {{ $veiculo->cor }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 h2 mt-3">
            <div class="form-group">
                <strong>Ano de Fabricação:</strong>
                {{ $veiculo->anof }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 h2 mt-3">
            <div class="form-group">
                <strong>Ano do Modelo:</strong>
                {{ $veiculo->anom }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 h2 mt-3">
            <div class="form-group">
                <strong>Combustível:</strong>
                {{ $veiculo->combustivel }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 h2 mt-3">
            <div class="form-group">
                <strong>Preço:</strong>
                {{ $veiculo->preco }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 h2 mt-3">
            <div class="form-group">
                <strong>Descrição:</strong>
                {{ $veiculo->detalhes }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 h2 mt-3">
            <div class="form-group">
                <strong>Imagem:</strong>
            </div>
            <img src="{{ asset($veiculo->foto) }}" class="figure-img mt-2 rounded-3" alt="{{ $veiculo->marca }}" width="700px">
        </div>
    </div>
</div>
@endsection
