<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU DIGITAL</title>
</head>

<body>
    @extends('adminlte::page')

    @section('title', 'Planos')

    @section('content_header')

    @if (session('mensagem'))
    <div class="alert alert-warning">
        {{ session('mensagem') }}
    </div>
@endif

            <div class="text-center pt-3 pb-2 " style="background-color: teal">
                <h1 class="pf-10">Pagamentos<a href="{{ route('plans-finace-create')}}" class="btn btn-dark">ADD <i
                            class="fas fa-plus"></i></a></h1>
                                <ol class="breadcrumb ">
                                    <li class="breadcrumb-item"><a href="{{ route('bread.index') }}" style="color:black">Dashboard</a></li>
                                    <li class="breadcrumb-item active"><a href="{{ route('plans.index') }}" style="color:black">Clientes</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="{{ route('plans-finance') }}" style="color:black">Pagamentos</a>
                                    </li>
                                </ol>
            </div>
    @stop

    @section('content')
    <div class="card" style="background-color: teal">
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Descrição</th>
                        <th>data/pagamento</th>
                        <th style="width: 100px;">Açôes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $finance)
                    <tr>
                        <td> {{ $finance->id }}</td>
                        <td> {{ $finance->name }}</td>
                        <td> {{ $finance->price }}</td>
                        <td> {{ $finance->description }} </td>
                        <td> {{ $finance->date }}</td>
                        <td>
                            <form action="{{ route('finance.destroy',$finance->id )}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </td>
                        <td>
                            <button class="btn btn-success">
                                <a href="{{route('plans.edits',$finance->id )}}">Editar</a>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @stop
</body>
</html>