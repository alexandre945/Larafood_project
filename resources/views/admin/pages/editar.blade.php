@extends('adminlte::page')

@section('title', 'Editar pagamento ')

@section('content_header')
<h1>Editar pagamento "{{ $finance->name }}"</h1>
@stop

@section('content')
<div class="card" style="background-color: teal">
    <div class="card-body">
        <form action="{{route('finance.update', $finance->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
          
                <label>Nome:</label>
                <input type="text" name="name" class="form-control" placeholder="Nome:"
                    value="{{$finance->name ?? ''}}">
            </div>
            <div class="form-group">
                <label>Preço:</label>
                <input type="text" name="price" class="form-control" placeholder="Preço:"
                    value="{{ $finance->price ?? ''}}">
            </div>
            <div class="form-group">
                <label>Data:</label>
                <input type="date" name="date" class="form-control" placeholder="Data:"
                    value="{{$finance->date ?? ''}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-dark">Enviar</button>
            </div>
        </form>
    </div>
</div>
@stop