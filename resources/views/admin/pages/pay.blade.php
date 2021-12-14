@extends('adminlte::page')

@section('title', 'Cadastrar Novo Planos')

@section('content_header')

<h1 style="
color:teal">Cadastrar Pagamentos do Clientes</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body" style="background-color: teal;">
        <form action="{{ route('plans.paypool')}}" method="POST">
            @csrf
            <div class="form-group">

                <label style="color:teal">Nome:</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label style="color:teal">Preço:</label>
                <input type="text" name="price" class="form-control">
            </div>
            <div class="form-group">
                <label style="color:teal">Dia:</label>
                <div class="form-group" style="color:teal">
                    <input type="date" name="date" class="form-control" style="color:teal">
                </div>

                <div class="form-group">
                    <button type="submit" style="color: teal;">Enviar</button>
                </div>
        </form>
    </div>
</div>
@endsection