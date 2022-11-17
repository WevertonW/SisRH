@extends('layouts.default')

@section('title', 'Funcionários')

@section('conteudo')
<h1 class="mb-4">Funcionários</h1>

@if (Session::get('sucesso'))
<div class="alert alert-success text-center">{{ Session::get('sucesso') }}</div>

@endif

<a href="{{route('funcionarios.create')}}" class="btn btn-primary position-absolute top-0 end-0
 m-4 rounded-circle fs-4 "><i class="bi bi-person-plus-fill "></i></a>

<p>Total de Funcionários: {{$totalFuncionarios}}</p>

<form action="" method="get" class="mb-3 d-flex justify-content-end">
    <div class="input-group me-3">
        <input type="text" name="buscaFuncionario" class="form-control form-control-lg" placeholder="Nome do Funcionário">
        <button class="btn btn-primary btn-lg" type="submit">Procurar</button>
    </div>
    <a href="{{route('funcionarios.index')}}" class="btn btn-light border btn-lg">Limpar</a>
</form>

<div class="table-responsive">
    <table class="table table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>ID</th>
                <th>Foto</th>
                <th>Nome</th>
                <th>Cargos</th>
                <th>Departamento</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($funcionarios as $funcionario)
            <tr class="align-middle">
                <td>{{$funcionario->id}}</td>
                <td><img src="/storage/funcionarios/{{$funcionario->foto}}" alt="{{$funcionario->nome}}" width="100"></td>
                <td>{{$funcionario->nome}}</td>
                <td>{{$funcionario->cargo->descricao}}</td>
                <td>{{$funcionario->departamento->nome}}</td>
                <td class="align-middle text-center">

                    <a href="{{ route('funcionarios.edit', $funcionario->id) }}" class="btn btn-primary" title="Editar"><i class="bi bi-pen"></i></a>

                    <a href="" class="btn btn-danger" title="Excluir" data-bs-toggle="modal" data-bs-target="#modal-deletar-{{ $funcionario->id }}"><i class="bi bi-trash"></i></a>

                    @include('funcionarios.delete')
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        <style>
            .pagination {
                justify-content: center;
            }
        </style>
        {{ $funcionarios->links() }}
    </div>
</div>
</div>
@endsection