<?php

namespace App\Http\Controllers;
use App\usuario;
use Illuminate\Http\Request;
use App\adeudo;
class usuarioController extends Controller
{
    public function getcrear(){
        return view('crearusuario');
    }
    // este meetodo muestra los datos que baja de la tabla 
    public function usuario(){
        $usuario=usuario::all();
        return view('usuario',compact('usuario'));
    }
 
    public function eliminar($id){
        $usuario= usuario::find($id);
        $usuario->delete();
        return redirect('usuario');
    }
//     public function getFormEdit(usuario $usuario){
// return view('editarusuario',compact('usuario'));
//     }
    public function getFormEdit($id){
        $usuario= usuario::find($id);
        return view('editarusuario',compact('usuario'));
    }

    public function update(Request $request, $id){
        $usuario= usuario::find($id);
        $usuario->nombre=$request->nombre;
        $usuario->apellido=$request->apellido;
        $usuario->correo=$request->correo;
        $usuario->telefono=$request->telefono;
        // los boleanos se envian como un array 
        $usuario->genero=$request->get('genero');
        $usuario->save();
        
        return redirect('usuario');
//    $usuario->fill($request->all());
//    $usuario->save();
//    return redirect('usuario');
    
    }
    // este metodo guarda a los usuarios
    public function guardarUsuario(Request $request){
        $usuario=new usuario();
        $usuario->nombre=$request->nombre;
        $usuario->apellido=$request->apellido;
        $usuario->correo=$request->correo;
        $usuario->telefono=$request->telefono;
        // los boleanos se envian como un array 
        $usuario->genero=$request->get('genero');
        $usuario->save();
        $usuario=usuario::all();
    return redirect ('usuario');
    }
}
