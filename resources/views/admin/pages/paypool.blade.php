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

    <div class="header" style="background-color: grey">
        <ol class="breadcrumb">
            <!-- <li class="breadcrumb-item"><a href="{{ route('bread.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('plans.index') }}" class="">Planos</a></li> -->
        </ol>

        <h1>Clientes<a href="{{ route('plans.create')}}" class="btn btn-dark">ADD <i class="fas fa-plus"></i></a></h1>

    </div>

    @stop

    @section('content')
    <div class="card" style="background-color: grey">
        <div class="header">
            <form action="{{ route('plans.search')}}" method="POST" class="form form-inline">
                @csrf
                <input type="text" name="filter" placeholder="Nome" class="form-control">

                <button type="submit" class="btn btn-dark">Filtrar<br><i class="fas fa-user-plus"></i> </button>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>data</th>
                        <th>Açôes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $finance)
                    <tr>
                        <td> {{ $finance->id }}</td>
                        <td> {{ $finance->name }}</td>
                        <td> {{ $finance->price }}</td>
                        <td> {{ $finance->date }}</td>
                        <td> <a href="#"class=
                        "btn btn-danger">Excluir</a></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>
    @stop


</body>

</html>