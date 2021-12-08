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
        <h1>Pagamentos<a href="{{ route('plans-finace-create')}}" class="btn btn-dark">ADD <i
                    class="fas fa-plus"></i></a></h1>
    </div>

    @stop

    @section('content')
    <div class="card" style="background-color: grey">
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>data/pagamento</th>
                        <th style="width: 150px;">Açôes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $finance)
                    <tr>
                        <td> {{ $finance->id }}</td>
                        <td> {{ $finance->name }}</td>
                        <td> {{ $finance->price }}</td>
                        <td> {{ $finance->date }}</td>
                        <td>
                            <form action="{{ route('finance.destroy',$finance->id )}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Deletar <br><i
                                        class="fas fa-trash-alt"></i></button>
                            </form>
                            <!-- <button type="" class="btn btn-warning">EDITA</button> -->

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