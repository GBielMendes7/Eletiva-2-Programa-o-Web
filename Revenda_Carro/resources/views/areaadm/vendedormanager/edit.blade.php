@extends('areaadm.master.layout')

@section('content')
<div class="container">
    <h1 class="mt-5">Editar Veiculo: {{ $vendedors->nome }}</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-primary" href="{{ route('vendedormanager.index') }}"> Voltar</a>
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

    <form action="{{ route('vendedormanager.update', $vendedors) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="input" name="nome" value="{{ $vendedors->nome }}" class="form-control" placeholder="Nome">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>E-mail:</strong>
                    <input type="email" name="nome" value="{{ $vendedors->email }}" class="form-control" placeholder="Funalo@email.com">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Telefone:</strong>
                    <input type="input" name="nome" value="{{ $vendedors->telefone }}" class="form-control" placeholder="(DDD)9 9999-9999">
                </div>
            </div>
            
            
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>

    </form>
</div>

@endsection