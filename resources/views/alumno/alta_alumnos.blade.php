<h2>Alta alumno</h2>

<form action="/alumnos/store" method="POST" enctype="multipart/form-data">
   
   {{csrf_field()}}
    <strong>Nombre:</strong><br>
    <input type="text" name="nombre"><br>

    <strong>Fecha Nacimiento:</strong><br>
    <input type="date" name="fn"><br>

    <strong>Genero:</strong><br>
    Femenino:
    <input type="radio" name="gen" value="Femenino">
    Masculino:
    <input type="radio" name="gen" value="Masculino"><br>

    <strong>Matricula:</strong><br>
    <input type="text" name="matricula"><br>

    <strong>Direccion:</strong><br>
    <textarea name="direccion"></textarea><br>

    <strong>Email:</strong><br>
    <input type="text" name="email"><br>

    <strong>Password:</strong><br>
    <input type="text" name="pass"><br>

    <strong>Foto:</strong><br>
    <input type="file" name="foto"><br><br>

    <strong>Grupo:</strong><br>

     <select name="id_grupo">
         <option value=""></option>
         @foreach($grupos as $grupo)
             <option value="{{$grupo->id}}">{{$grupo->clave}}</option>
         @endforeach
     </select><br><br>

     <input type="submit" value="Guardar">

</form>