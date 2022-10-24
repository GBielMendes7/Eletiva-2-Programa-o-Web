@extends('areaadm.master.layout')

@section('content')
<div class="container">
    <h1 class="mt-5">Gerenciar Veiculos.</h1>
    <hr class="my-4">
    <p class="lead">Gerencie todos os veiculos da loja.</p>
</div>
<div class="container">
    <a class="btn btn-success" href="{{ route('veiculomanager.create') }}">Adicionar novo veículo</a>
    <p></p>
    @if ($message = Session::get('success'))
        <p></p>
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr class="table-dark">
            <th>#</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Cor</th>
            <th>Ano de Fabricação</th>
            <th>Ano do Modelo</th>
            <th>Combustível</th>
            <th>Preço</th>
            <th>Detalhes</th>
            <th>Foto</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($veiculos as $veiculo)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $veiculo->marca }}</td>
            <td>{{ $veiculo->modelo }}</td>
            <td>{{ $veiculo->cor }}</td>
            <td>{{ $veiculo->anof }}</td>
            <td>{{ $veiculo->anom }}</td>
            <td>{{ $veiculo->combustivel }}</td>
            <td>{{ $veiculo->preco }}</td>
            <td>{{ $veiculo->detalhes }}</td>
            <td>{{ $veiculo->foto }}</td>
            <td>
                <form action="{{ route('veiculomanager.destroy', $veiculo->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('veiculomanager.show', $veiculo->id) }}">Exibir</a>

                    <a class="btn btn-primary" href="{{ route('veiculomanager.edit', $veiculo->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $veiculos->links() !!}
</div>

@endsection
