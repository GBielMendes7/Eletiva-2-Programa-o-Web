@extends('areaadm.master.layout')

@section('content')
<div class="container">
    <h1 class="mt-5">Detalhes do comentario: {{ $contatos->id }}</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-primary" href="{{ route('comentarios.index') }}"> Voltar</a>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 h2 mt-3">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $contatos->nome }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 h2 mt-3">
            <div class="form-group">
                <strong>Descrição:</strong>
                {{ $contatos->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 h2 mt-3">
            <div class="form-group">
                <strong>Tipo:</strong>
                {{ $contatos->tipo }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 h2 mt-3">
            <div class="form-group">
                <strong>Mensagem:</strong>
                {{ $contatos->mensagem }}
            </div>
        </div>
    </div>
</div>
@endsection