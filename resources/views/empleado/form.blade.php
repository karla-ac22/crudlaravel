<label for="name">Nombre: </label>
    <input type="text" name="name" value= "{{isset($persona -> name)?$persona->name:''}}" id="name"> <br>
    <label for="lastname">Apellido: </label>
    <input type="text" name="lastname" value= "{{isset($persona -> lastname)?$persona->lastname:''}}" id="lastname">
    <br>
    <label for="age">Edad: </label>
    <input type="text" name="age" value= "{{isset($persona -> age)?$persona->age:''}}" id="age">
    <br>
    <label for="cedula">Cédula: </label>
    <input type="text" name="cedula" value= "{{isset($persona -> cedula)?$persona->cedula:''}}" id="cedula">
    <br>
    <label for="email">Correo: </label>
    <input type="text" name="email" value= "{{isset($persona -> email)?$persona->email:''}}" id="email">
    <br>
    <label for="password">Contraseña: </label>
    <input type="password" name="password" value= "{{isset($persona -> password)?$persona->password:''}}" id="password">
    <br>
    <label for="pic">Sube una foto: </label>
    @if(isset($persona->pic))
     <img src="{{ asset('storage').'/'.$persona->pic }}" widht= "100" alt="">
    @endif
    <input type="file" name="pic" id="pic">
    <br>
    <input type="submit" value="Guardar datos">
    <br>