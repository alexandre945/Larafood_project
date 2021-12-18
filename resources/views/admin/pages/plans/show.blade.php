@extends('adminlte::page')

@section('title', "Detalhes do Cliente")

@section('content_header')
<h1>Detalhes do Cliente "{{ $plan->name }}"</h1>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('bread.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="{{ route('plans.index') }}" class="">clientes</a></li>
</ol>
@stop

@section('content')
<div class="card" style="background-color: teal">
    <div class="card-body">
        <ol class="list-group list-group-numbered">
            <li>
                <strong>Nome:</strong> {{ $plan->name }}
            </li>
            <li>
                <strong>URL:</strong> {{ $plan->url }}
            </li>
            <li>
                <strong>Preço:</strong> {{ $plan->price }}
            </li>
            <li>
                <strong>Desciçâo:</strong> {{ $plan->description }}
            </li>
            <li>
                <strong>Dat:</strong> {{ $plan->created_at }}
            </li>
        </ol>
        <form action="{{ route('plans.destroy',$plan->url)}}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Deletar <br><i class="fas fa-trash-alt"></i></button>
        </form>
    </div>
</div>
@endsection