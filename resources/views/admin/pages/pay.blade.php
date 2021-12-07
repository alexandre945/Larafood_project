@extends('adminlte::page')

@section('title', 'Cadastrar Novo Planos')

@section('content_header')
<h1>Cadastrar Pagamentos do Clientes</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('plans.paypool')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{$plan->name ?? ''}}">
            </div>
            <div class="form-group">
                <label>Preço:</label>
                <input type="text" name="price" class="form-control" placeholder="Preço:"
                    value="{{ $plan->price ?? ''}}">
            </div>
            <div class="form-group">
                <label>Dia:</label>
                <input type="date" name="date" class="form-control" placeholder="Descriçâo:"
                    value="{{$plan->description ?? ''}}">
            </div>
            <!-- <div class="form-group">
                <label>Mês:</label>
                <input type="text" name="description" class="form-control" placeholder="Descriçâo:"
                    value="{{$plan->description ?? ''}}">
            </div>
            <div class="form-group">
                <label>Ano:</label>
                <input type="text" name="description" class="form-control" placeholder="Descriçâo:"
                    value="{{$plan->description ?? ''}}">
            </div> -->
            <div class="form-group">
                <button type="submit" class="btn btn-dark">Enviar</button>
            </div>
        </form>
    </div>
</div>
@endsection