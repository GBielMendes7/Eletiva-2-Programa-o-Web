@extends('areaadm.master.layout')

@section('content')
<div class="container">
    <h1 class="mt-5">Detalhes do vendedor: {{ $vendedors->nome }}</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-primary" href="{{ route('vendedormanager.index') }}"> Voltar</a>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group h2 mt-3">
                <strong>Nome:</strong>
                {{ $vendedors->nome }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group h2 mt-3">
                <strong>Descrição:</strong>
                {{ $vendedors->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group h2 mt-3">
                <strong>Descrição:</strong>
                {{ $vendedors->telefone }}
            </div>
        </div>
        
    </div>
</div>
@endsection
