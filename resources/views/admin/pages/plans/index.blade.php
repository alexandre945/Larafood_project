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

    <div class="header" style="background-color: teal">
        <ol class="breadcrumb" style="padding-left: 30px;">
            <li class="breadcrumb-item"><a href="{{ route('bread.index') }}" style="color:black">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('plans.index') }}" style="color:black">Clientes</a>
            </li>
            <li class="breadcrumb-item active"><a href="{{ route('plans-finance') }}" style="color:black">Pagamentos</a>
            </li>
        </ol>

        <div class="d-flex justify-content-between" style="padding-bottom: 10px;">
            <div>
                <h1 style="padding-left: 30px;">Clientes<a href="{{ route('plans.create')}}" class="btn btn-dark">ADD <i
                            class="fas fa-plus"></i></a></h1>
            </div>
            <div>
                <h1 style="padding-right: 40px;">Pagamentos<a href="{{ route('plans-finace-create')}}"
                        class="btn btn-dark">ADD <i class="fas fa-plus"></i></a></h1>
            </div>
        </div>



    </div>

    @stop

    @section('content')
    <div class="card" style="background-color: teal">
        <div class="header">

        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Descrição</th>
                        <th>data</th>
                        <th>Açôes</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($plans as $plan)
                    <tr>
                        <td> {{ $plan->id }}</td>
                        <td> {{ $plan->name }}</td>
                        <td> {{ $plan->price }}</td>
                        <td> {{ $plan->description }}</td>
                        <td> {{ $plan->created_at }}</td>
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