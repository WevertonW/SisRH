@extends('layouts.default')

@section('title', 'Sis.RH')

{{-- SEÇÃO CONDICIONAL --}}
{{-- @section('dashboard')
<ul>
    <li>Item index</li>
    <li>Intem index</li>
    <li>Intem index</li>
</ul>
@endsection --}}

{{-- EXIBINDO DATA ATUAL --}}
{{-- {{ date('d/m/Y') }} --}}

{{-- DECLARAÇÃO DE VARIÁVEL --}}
{{-- @php
    $total = 45;
@endphp --}}

{{-- CONDIÇÃO--}}
{{-- @if($total < 50)
    MENOR QUE 50
@elseif($total > 50 && $total < 100)
    MAIOR QUE 50 E MENOR QUE 100
@else
    MAIOR QUE 100
@endif --}}

@section('conteudo')
    <h1 class="mb-5">Dashboard</h1>

    <div class="row g-5">
        <div class="col-md-4">
            <div class="bg-primary shadow p-3 text-center text-white">
                <i class="bi bi-people-fill fs-1"></i>
                <h2 class="fs-4">Funcionários</h2>
                <h3 class="fs-1">{{ $totalFuncionarios }}</h3>
            </div>
        </div>
    
        <div class="col-md-4">
            <div class="bg-danger shadow p-3 text-center text-white">
                <i class="bi bi-pen-fill fs-1"></i>
                <h2 class="fs-4">Cargos</h2>
                <h3 class="fs-1">{{ $totalCargos }}</h3>
            </div>
        </div>
    
        <div class="col-md-4">
            <div class="bg-warning shadow p-3 text-center text-white">
                <i class="bi bi-building fs-1"></i>
                <h2 class="fs-4">Departamentos</h2>
                <h3 class="fs-1">{{ $totalDepartamentos }}</h3>
            </div>
        </div>
    </div>
@endsection