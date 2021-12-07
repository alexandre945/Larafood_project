<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financeiro</title>
</head>
<body>
@extends('adminlte::page')

@section('title', 'Contabil')

@section('content_header')
    <h1>Cadatrar pagamentos</h1> 
   
@stop

@section('content')
<div class="header" style="background-color: grey">
<ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('bread.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('plans.index') }}" class="">Planos</a></li>
    </ol>

    <h1>Clientes/pagos<a href="{{ route('plans.pay')}}" class="btn btn-dark">ADD <i class="fas fa-plus"></i></a></h1>

</div>

@endsection

</body>
</html>