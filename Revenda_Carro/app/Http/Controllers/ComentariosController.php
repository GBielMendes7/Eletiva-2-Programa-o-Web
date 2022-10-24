<?php

namespace App\Http\Controllers;

use App\Models\contato;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    public function index(){
        $contatos = contato::orderBy('created_at', 'ASC')->paginate(5);

        return view('areaadm.comentario.comentarios', compact('contatos') )->with('i', (request()->input('page', 1) - 1) * 5);
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Models\contato
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contatos = contato::findOrFail($id);
        $contatos->lido = True;
        $contatos->save();

        return view('areaadm.comentario.show',compact('contatos'));
        
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contato
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        contato::findOrFail($id)->delete();

        return redirect()->route('comentarios.index')->with('success','Comentario excluido com sucesso!');
    }

}
