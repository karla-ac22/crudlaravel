<h1>Formulario Creación Empleados</h1>
<form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
    @csrf 
    @include('empleado.form')
    
</form>