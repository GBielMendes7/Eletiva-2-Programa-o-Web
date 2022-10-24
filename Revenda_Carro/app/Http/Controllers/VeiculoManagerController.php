<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veiculos = Veiculo::latest()->paginate(5);

        return view('areaadm.veiculomanager.index',compact('veiculos'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('areaadm.veiculomanager.create');
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
            'marca'=> 'required',
            'modelo'=> 'required',
            'cor'=> 'required',
            'anof'=> 'required',
            'anom'=> 'required',
            'combustivel'=> 'required',
            'preco'=> 'required',
            'detalhes'=> 'required',
            'foto'=> 'required',
        ]);

        //Curso::create($request->all());
        $veiculo = new Veiculo;
        $veiculo->marca = $request->marca;
        $veiculo->modelo = $request->modelo;
        $veiculo->cor = $request->cor;
        $veiculo->anof = $request->anof;
        $veiculo->anom = $request->anom;
        $veiculo->combustivel = $request->combustivel;
        $veiculo->preco = $request->preco;
        $veiculo->detalhes = $request->detalhes;
        $veiculo->foto = "";
        $dirImagem = "images/cursos/";

        if($request->hasFile('foto') && $request->file('foto')->isValid()){
            $requestImage = $request->foto;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime('now')).".".$extension;

            $requestImage->move(public_path($dirImagem),$imageName);
            $veiculo->foto = $dirImagem.$imageName;
        }

        $veiculo->save();
        return redirect()->route('veiculomanager.index')->with('success','Veiculo adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Veiculo  $curso
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $veiculo = Veiculo::findOrFail($id);

        return view('areaadm.veiculomanager.show',compact('veiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Veiculo  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $veiculo = Veiculo::findOrFail($id);

        return view('areaadm.veiculomanager.edit',compact('veiculo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Veiculo  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'marca'=> 'required',
            'modelo'=> 'required',
            'cor'=> 'required',
            'anof'=> 'required',
            'anom'=> 'required',
            'combustivel'=> 'required',
            'preco'=> 'required',
            'detalhes'=> 'required',
            'foto'=> 'required',
        ]);

        $data = $request->all();
        
        Veiculo::findOrFail($id)->update($data);

        return redirect()->route('veiculomanager.index')->with('success','Veiculo atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Veiculo  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Veiculo::findOrFail($id)->delete();

        return redirect()->route('veiculomanager.index')->with('success','Veiculo excluido com sucesso!');
    }
}
