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
            <li class="breadcrumb-item"><a href="{{ route('bread.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('plans.index') }}" class="">Planos</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('plans-finance') }}" class="">Pagamentos</a></li>
        </ol>

        <div class="d-flex justify-content-between">
            <div>
                <h1>Clientes<a href="{{ route('plans.create')}}" class="btn btn-dark">ADD <i
                            class="fas fa-plus"></i></a></h1>
            </div>
            <div>
                <h1>Pagamentos<a href="{{ route('plans-finace-create')}}" class="btn btn-dark">ADD <i
                            class="fas fa-plus"></i></a></h1>
            </div>
        </div>



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
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>id</th>
                        <th style="width: 150px">Açôes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($plans as $plan)
                    <tr>
                        <td> {{ $plan->name }}</td>
                        <td> {{ $plan->price }}</td>
                        <td> {{ $plan->id }}</td>
                        <td>
                            <a href="{{ route('plans.show',$plan->url)}}" class="btn btn-warning">Ver</a>
                            <a href="{{ route('plans.edit',$plan->url)}}" class="btn btn-success">Editar</a>

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