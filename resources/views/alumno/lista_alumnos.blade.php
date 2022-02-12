

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
<body>
   
        <table>
            <tr>
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Fecha N.</th>
                <th>Genero</th>
                <th>Direccion</th>
                <th>Email</th>
                <th>Contraseña</th>
                <th>Foto</th>
                <th>Id_grupo</th>
                <th>Acciones</th>
            </tr>
            @foreach ($datos as $dato)
            <tr>
                <td>{{$dato->matricula}}</td>
                <td>{{$dato->nombre}}</td>
                <td>{{$dato->fn}}</td>
                <td>{{$dato->gen}}</td>
                <td>{{$dato->direccion}}</td>
                <td>{{$dato->email}}</td>
                <td>{{$dato->pass}}</td>
                <td>
                    <img src="{{asset('storage').'/'.$dato->foto}}" alt="" width="100" height="100">
                    {{$dato->foto}}
                </td>
                <td>{{$dato->id_grupo}}</td>
                <td>

                    <a href="{{ route('editar',['id' => $dato->id])}}"><button>Editar</button></a>
                    <a href="{{ route('detalle',['id' => $dato->id])}}"><button>Detalle</button></a>



                    <form action="{{ route('eliminar',['id' => $dato->id]) }}" method="POST">
                        @csrf
                        {{method_field("DELETE")}}
                        <input type="submit" value="eliminar">
                    </form>
                </td>
                
            </tr>
                
            @endforeach
        </table>
    
   
    </body>
</html>