@extends('adminlte::page')

@section('title', 'Cadastrar Novo Planos')

@section('content_header')
    <h1>Cadatrar Novo Cliente</h1>
@stop

@section('content')
   <div class="card">
       <div class="card-body">
            <form action="{{ route('plans.store')}}" method="POST">
            @csrf
            @include('admin.pages.plans.partils.form')
           </form>
       </div>
   </div>
@endsection
