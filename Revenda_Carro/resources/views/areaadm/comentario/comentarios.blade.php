@extends('areaadm.master.layout')

@section('content')
<div class="container">
    <h1 class="mt-5">Gerenciar Comentarios.</h1>
    <hr class="my-4">
    <p class="lead">Comentarios dos clientes sobre nosso serviço.</p>
</div>
<div class="container">
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Sugestão</th>
            <th>Mensagem</th>
            <th>Status</th>
            <th>Editar</th>
        </tr>
        @foreach ($contatos as $contatos)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $contatos->nome }}</td>
            <td>{{ $contatos->email }}</td>
            <td>{{ $contatos->tipo }}</td>
            <td>{{ $contatos->mensagem }}</td>
            <td>{{ $contatos->updated_at}}</td>
            <td>
                @if ($contatos->lido == 0)
                    <p class="text-danger">Não lida</p>
                @else
                    <p class="text-success">lida</p>    
                @endif
            </td>

            <td>
                <form action="{{ route('comentarios.destroy', $contatos->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('comentarios.show', $contatos->id) }}">Exibir</a>

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