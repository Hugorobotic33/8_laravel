<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnos;
use App\Models\Grupos;

class escuela extends Controller
{
    //
  
    public function lista(){
           
        $datos=Alumnos::all();
        return view("alumno.lista_alumnos")->with(["datos"=>$datos]);
    }

    public function alta(){
        $grupos=Grupos::all();
        return view("alumno.alta_alumnos")->with(["grupos"=>$grupos]);
    }


    public function store(Request $request){
        // return "hola";
        // $alumno->foto=$request->input("foto");


        $alumno=new Alumnos;
        $alumno->nombre=$request->input("nombre");
        $alumno->fn=$request->input("fn");
        $alumno->gen=$request->input("gen");
        $alumno->matricula=$request->input("matricula");
        $alumno->direccion=$request->input("direccion");
        $alumno->email=$request->input("email");
        $alumno->pass=$request->input("pass");
        $alumno->id_grupo=$request["id_grupo"];
        if($request->hasFile("foto")){
            $imagen=$request->file("foto");
            $alumno->foto=$imagen->store("uploads","public");
         
         }
        
        $alumno->save();
        return "Guardado exitosamente";
    }






   public function editar($id){

       $alumno=Alumnos::findOrFail($id);
       $grupos=Grupos::all();
       return view("alumno.editar_alumnos")->with(["alumno"=>$alumno])->with(["grupos"=>$grupos]);

       return redirect("alumnos");
   }



    public function salvar(Alumnos $id, Request $request){
    
        
        if($request->hasFile("foto")){
            $foto=$request->file("foto");
            $foto->store("uploads","public");
        }

        $id->update([
            'nombre' => $request->input('nombre'),
            'fn' => $request->input('fn'),
            'gen' => $request->input('gen'),
            'matricula' => $request->input('matricula'),
            'direccion' => $request->input('direccion'),
            'email' => $request->input('email'),
            'pass' => $request->input('pass'),
            'id_grupo' => $request['id_grupo'],
            'foto'=>$foto
            

        ]);


    }
    


    public function eliminar(Alumnos $id){
        $id->delete();
        return redirect("alumnos");

    }
    public function detalle ($id) {
        $alumno = Alumnos::find($id);
        return view('alumno.detalle')
             ->with(['alumno' => $alumno]);
    }

 
}
