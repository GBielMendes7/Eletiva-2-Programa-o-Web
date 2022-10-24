@extends('areaadm.master.layout')

@section('content')
<div class="container">
    <h1 class="mt-5">Adicionar Veiculo.</h1>
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

    <form action="{{ route('veiculomanager.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Marca:</strong>
                    <input type="input" name="marca" class="form-control" placeholder="GOL, Ford, Hyundai...">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Modelo:</strong>
                    <input type="input" name="modelo" class="form-control" placeholder="Modelo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Cor:</strong>
                    <input type="input" name="cor" class="form-control" placeholder="Azul, Vermelho...">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Ano de fabricação:</strong>
                    <input type="input" name="anof" class="form-control" placeholder="2000, 2001, 2002...">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Ano do modelo:</strong>
                    <input type="input" name="anom" class="form-control" placeholder="Ano do modelo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Combustivel:</strong>
                    <input type="input" name="combustivel" class="form-control" placeholder="S10, Diesel, Gasolina...">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Preço:</strong>
                    <input type="input" name="preco" class="form-control" placeholder="R$">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Descrição:</strong>
                    <textarea class="form-control" style="height:150px" name="detalhes" placeholder="Descrição"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Imagem:</strong>
                    <input type="file" name="foto" class="form-control" placeholder="Imagem">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                    <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>

    </form>
</div>
@endsection
