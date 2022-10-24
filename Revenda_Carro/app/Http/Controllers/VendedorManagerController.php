<?php

namespace App\Http\Controllers;

use App\Models\Vendedor;
use Illuminate\Http\Request;

class VendedorManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendedors = Vendedor::latest()->paginate(5);

        return view('areaadm.vendedormanager.index',compact('vendedors'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('areaadm.vendedormanager.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome'=> 'required',
            'email'=> 'required',
            'telefone'=> 'required'
        ]);

        //Curso::create($request->all());
        $vendedors = new Vendedor;
        $vendedors->nome = $request->nome;
        $vendedors->email = $request->email;
        $vendedors->telefone = $request->telefone;
        

        $vendedors->save();
        return redirect()->route('vendedormanager.index')->with('success','Vendedor adicionado ao quadro de funcionarios com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendedor  $curso
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendedors = Vendedor::findOrFail($id);

        return view('areaadm.vendedormanager.show',compact('vendedors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendedor  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendedors = Vendedor::findOrFail($id);

        return view('areaadm.vendedormanager.edit',compact('vendedors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendedor  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome'=>'required',
            'email'=>'required',
            'telefone'=>'required'
        ]);

        $data = $request->all();
        
        Vendedor::findOrFail($id)->update($data);

        return redirect()->route('vendedormanager.index')->with('success','Vendedor atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendedor  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vendedor::findOrFail($id)->delete();

        return redirect()->route('vendedormanager.index')->with('success','Vendedor excluído com sucesso!');
    }
}