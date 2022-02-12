<h2>Editar alumno</h2>

<form action="{{route('salvar',['id' => $alumno->id])}}" method="POST" enctype="multipart/form-data">
   
   {{csrf_field()}}
   {{method_field("PUT")}}
    <strong>Nombre:</strong><br>
    <input type="text" name="nombre" value="{{$alumno->nombre}}"><br>

    <strong>Fecha Nacimiento:</strong><br>
    <input type="date" name="fn" value="{{$alumno->fn}}"><br>

    <strong>Genero:</strong><br>
    @if($alumno->gen=="Femenino")
    Femenino:<input type="radio" name="gen" value="Femenino" checked>
    Masculino:<input type="radio" name="gen" value="Masculino"><br>
    @else 
    Femenino:<input type="radio" name="gen" value="Femenino">
    Masculino:<input type="radio" name="gen" value="Masculino" checked><br>
    @endif


    <strong>Matricula:</strong><br>
    <input type="text" name="matricula" value="{{$alumno->matricula}}"><br>

    <strong>Direccion:</strong><br>
    <textarea name="direccion">{{$alumno->direccion}}}</textarea><br>

    <strong>Email:</strong><br>
    <input type="text" name="email" value="{{$alumno->email}}"><br>

    <strong>Password:</strong><br>
    <input type="text" name="pass" value="{{$alumno->pass}}"><br>

    <strong>Foto:</strong><br>
    {{$alumno->foto}}<br>
    <input type="file" name="foto" value=""><br><br>

    <strong>Grupo:</strong><br>

     <select name="id_grupo">
         @foreach($grupos as $grupo)
             @if($alumno->id_grupo==$grupo->id)
             <option value="{{$grupo->id}}">{{$grupo->clave}}</option>
             @endif
         @endforeach
         @foreach($grupos as $grupo)
         @if($alumno->id_grupo!=$grupo->id)
         <option value="{{$grupo->id}}">{{$grupo->clave}}</option>
         @endif
       @endforeach

     </select><br><br>

     <input type="submit" value="Guardar">

</form>