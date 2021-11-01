@extends('adminlte::page')

@section('title', 'Editar Plano { $plan->name }')

@section('content_header')
    <h1>Editar Plano</h1>
@stop

@section('content')
   <div class="card">
       <div class="card-body">
            <form action="{{ route('plans.update', $plan->url)}}" method="POST">
                @csrf
                @method('PUT')
      @include('admin.pages.plans.partils.form')
           </form>
       </div>
   </div>
@endsection
