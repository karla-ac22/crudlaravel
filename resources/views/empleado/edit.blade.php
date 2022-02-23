@extends('layouts.app')
@section('content')
<div class="container">
<h1>Editar información de empleado</h1>
<form action="{{url('/empleado/'.$persona->id)}}" method="post" enctype="multipart/form-data">
    @csrf 
    {{method_field('POST')}}
    @include('empleado.form')
</form>
</div>
@endsection