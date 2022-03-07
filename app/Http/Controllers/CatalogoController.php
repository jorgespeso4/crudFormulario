<?php

namespace App\Http\Controllers;

use App\Models\catalogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['catalogo'] = catalogo::paginate(5);
        return view('catalogo.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('catalogo.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $datosCatalogo = request()->all();
        $datosCatalogo = request()->except('_token');

        if($request->hasFile('Fotografia')){
            $datosCatalogo['Fotografia'] = $request->file('Fotografia')->store('uploads','public');
        }
        catalogo::insert($datosCatalogo);


        // return response()->json($datosCatalogo);
        return redirect('catalogo')->with('mensaje','Plato agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function show(catalogo $catalogo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $catalogo = catalogo::findOrFail($id);   
        return view('catalogo.editar',compact('catalogo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosCatalogo = request()->except(['_token','_method']);

        
        if($request->hasFile('Fotografia')){
            $catalogo = catalogo::findOrFail($id);
            Storage::delete('public/'.$catalogo->Fotografia);
            $datosCatalogo['Fotografia'] = $request->file('Fotografia')->store('uploads','public');
        }


        catalogo::where('id','=',$id)->update($datosCatalogo);  
        $catalogo = catalogo::findOrFail($id);   
        return view('catalogo.editar',compact('catalogo'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $catalogo = catalogo::findOrFail($id); 
        if(Storage::delete('public/'.$catalogo->Fotografia)){
            catalogo::destroy($id);
        }
        
        return redirect('catalogo')->with('mensaje','Plato eliminado correctamente');
    }
}
