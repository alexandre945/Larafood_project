@extends('adminlte::page')

@section('title', 'Cadastrar Novo cliente')

@section('content_header')
    <h1 style="color: teal;">Cadastrar Novo Cliente</h1>
@stop

@section('content')
   <div class="card" style="color: teal;">
       <div class="card-body" style="background-color: teal;">
            <form action="{{ route('plans.store')}}" method="POST">
            @csrf
            @include('admin.pages.plans.partils.form')
           </form>
       </div>
   </div>
@endsection
