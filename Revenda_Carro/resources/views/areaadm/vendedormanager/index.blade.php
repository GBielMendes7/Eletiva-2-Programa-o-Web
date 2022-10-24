@extends('areaadm.master.layout')

@section('content')
<div class="container">
    <h1 class="mt-5">Gerenciar Vendedor.</h1>
    <hr class="my-4">
    <p class="lead">Gerencie nossa equipe de vendedores.</p>
</div>
<div class="container">
    <a class="btn btn-success" href="{{ route('vendedormanager.create') }}">Adicionar novo vendedor</a>
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
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($vendedors as $vendedors)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $vendedors->nome }}</td>
            <td>{{ $vendedors->email }}</td>
            <td>{{ $vendedors->telefone }}</td>
            <td>
                <form action="{{ route('vendedormanager.destroy', $vendedors->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('vendedormanager.show', $vendedors->id) }}">Exibir</a>

                    <a class="btn btn-primary" href="{{ route('vendedormanager.edit', $vendedors->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</div>

@endsection
