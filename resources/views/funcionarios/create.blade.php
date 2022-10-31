@extends('layouts.default')

@section('title', 'Cadastrar Funcionário')

@section('conteudo')
<div class="container-fluid shadow bg-white p-4">
    <h1 class="mb-5">Cadastrar Funcionários</h1>
    <div class="row">
        <div class="col mb-4">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control form-control-lg bg-light" value="" required>
        </div>

        <div class="col mb-4">
            <label for="data_nasc" class="form-label">Data de Nascimento</label>
            <input type="date" name="data_nasc" class="form-control form-control-lg bg-light" value="" required>
        </div>

        <div class="col mb-4">
            <label for="sexo" class="form-label">Sexo</label>
            <select name="sexo" class="form-select form-control form-control-lg bg-light" value="" required>
                <option value=""></option>
                <option value="m">Masculino</option>
                <option value="f">Feminino</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col mb-4">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" name="cpf" class="form-control form-control-lg bg-light" value="" required>
        </div>

        <div class="col mb-4">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control form-control-lg bg-light" value="" required>
        </div>

        <div class="col mb-4">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="tel" name="telefone" placeholder="(DDD) XXXXX-XXXX" class="form-control form-control-lg bg-light" value="" required>
        </div>
    </div>
    <div class="row">
        <div class="col mb-4">
            <label for="id_departamento" class="form-label">Departamento</label>
            <select name="id_departamento" id="" class="form-select form-control form-control-lg bg-light">
                <option value="">--</option>
                @foreach ($departamentos as $departamento)
                    <option value="{{ $departamento->id }}">{{ $departamento->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="col mb-4">
            <label for="id_cargo" class="form-label">Cargo</label>
            <select name="id_cargo" id="" class="form-select form-control form-control-lg bg-light">
                <option value="">--</option>
                @foreach ($cargos as $cargo)
                    <option value="{{ $cargo->id }}">{{ $cargo->descricao }}</option>
                @endforeach
            </select>
        </div>

        <div class="col mb-4">
            <label for="salario" class="form-label">Salário</label>
            <input type="text" name="salario" placeholder="R$" class="form-control form-control-lg bg-light" value="" required>
        </div>
    </div>
        <div class="col-md-12">
            <label for="foto" class="form-label fs-5">Foto</label>
            <input type="file" class="form-control form-control-lg bg-light mb-5" id="foto" name="foto">
            <!-- <label class="input-group-text" for="inputGroupFile02">Upload</label> -->
        </div>
    <button type="button" class="btn btn-primary btn-lg">Cadastrar</button>
    <a href="{{ route ('funcionarios.index')}}" class="btn btn-danger btn-lg">Cancelar</a>
</div>
@endsection