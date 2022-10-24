@extends('site.master.layout')

@section('content')
<div class="container">
    <h1 class="mt-5">Editar Veiculo: {{ $veiculo->marca }}</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-primary" href="{{ route('veiculomanager.index') }}"> Voltar</a>
    <p></p>
    @if ($errors->any())
        <p></p>
        <div class="alert alert-danger">
            <strong>Ops!</strong> Houve algum problema com a entrada de dados.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('veiculomanager.update', $veiculo) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Marca:</strong>
                    <input type="input" name="marca" value="{{ $veiculo->marca }}" class="form-control" placeholder="GOL, Ford, Hyundai...">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Modelo:</strong>
                    <input type="input" name="modelo" value="{{ $veiculo->modelo }}" class="form-control" placeholder="Modelo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Cor:</strong>
                    <input type="input" name="cor" value="{{ $veiculo->cor }}" class="form-control" placeholder="Azul, Vermelho...">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Ano de fabricação:</strong>
                    <input type="input" name="anof" value="{{ $veiculo->anof }}" class="form-control" placeholder="2000, 2001, 2002...">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Ano do modelo:</strong>
                    <input type="input" name="anom" value="{{ $veiculo->anom }}" class="form-control" placeholder="Ano do modelo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Combustivel:</strong>
                    <input type="input" name="combustivel" value="{{ $veiculo->combustivel }}" class="form-control" placeholder="S10, Diesel, Gasolina...">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Preço:</strong>
                    <input type="input" name="preco" value="{{ $veiculo->preco }}" class="form-control" placeholder="R$">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Descrição:</strong>
                    <textarea class="form-control" style="height:150px" value="{{ $veiculo->detalhes }}" name="detalhes" placeholder="Descrição"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Imagem:</strong>
                    <input type="file" name="foto" value="{{ $veiculo->foto}}" class="form-control" placeholder="Imagem">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                    <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>

    </form>
</div>
@endsection