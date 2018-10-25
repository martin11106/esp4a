<?php

namespace App\Http\Controllers;
use App\adeudo;
use App\usuario;
use Illuminate\Http\Request;

class adeudoController extends Controller
{
    public function getadeudo(){
      $adeudo=usuario::all();
      $adeudo2=adeudo::all();
        return  view('adeudo',compact('adeudo','adeudo2'));
      }
      public function adeudototal(){
        $usuario=usuario::all();
        $adeudo=adeudo::all();

        return view('adeudototal',compact('usuario','adeudo','adeudo2'));
      }
      public function cobranza($id){
        // relacionar con llave foranea 
        $adeudo=adeudo::where('usuario_id',$id)->get();
        $usuario=usuario::all();
      
        return  view('cobranza' ,compact('adeudo','usuario'));
    }
    public function eliminar($id){
    $adeudo=adeudo::find($id);
      $adeudo->delete();
      return redirect('usuario');
    }
    public function getEditar($id){
      $adeudo= adeudo::find($id);
      return view('editaradeudo',compact('adeudo'));
    }
    public function adeudo(){
      $usuario=usuario::all();
      return compact('usuario');
    }
      public function guardar(Request $request){
        $adeudo=new adeudo();
        $adeudo->usuario_id=$request->usuario_id;
        $adeudo->monto=$request->monto;
        $adeudo->fecha=$request->fecha;
        $adeudo->estatus=$request->get('adeudo');
         if($adeudo->estatus==0){
           $adeudo->monto=$adeudo->monto*-1;
         }
        $adeudo->save();
        $adeudo=adeudo::all();
    return redirect ('usuario');
      }
      public function update2(Request $request, $id){
        $adeudo= adeudo::find($id);
        $adeudo->usuario_id=$request->usuario_id;
        $adeudo->monto=$request->monto;
        $adeudo->fecha=$request->fecha;
        $adeudo->estatus=$request->get('estatus');
        $adeudo->save();
        
        return redirect('usuario  ');
//    $usuario->fill($request->all());
//    $usuario->save();
//    return redirect('usuario');
    
    }

}
