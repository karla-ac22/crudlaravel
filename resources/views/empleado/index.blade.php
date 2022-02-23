@extends('layouts.app')
@section('content')
<div class="container">
<h1>Listado de empleados</h1>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Cédula</th>
            <th>Correo</th>
            <th>Acciones</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($personas as $persona)
        <tr>
            <td>{{$persona->id}}</td>
            <td>
                <img src="{{ asset('storage').'/'.$persona->pic }}" alt="">
                {{$persona->pic}}
            </td>
            <td>{{$persona->name}}</td>
            <td>{{$persona->lastname}}</td>
            <td>{{$persona->age}}</td>
            <td>{{$persona->cedula}}</td>
            <td>{{$persona->email}}</td>
            <td>
                <a href="{{url('/empleado/'.$persona->id.'/edit')}}">
                    Editar
                </a>    
            | 
                <form action="{{url('/empleado/'.$persona->id)}}" method="post">
                    @csrf 
                    {{method_field('DELETE')}}
                    <input type="submit" value="Borrar" onclick="return confirm('¿Quieres eliminar esta persona?')">
                </form>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>
</div>
@endsection