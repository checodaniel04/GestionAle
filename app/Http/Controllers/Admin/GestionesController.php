<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gestion;
use App\Models\persona;

class GestionesController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.gestions.index')->only('index','create','store','show','edit','update');
        $this->middleware('can:admin.gestions.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gestiones = gestion::all();
        return view('admin.gestions.index',compact('gestiones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(persona $persona)

    {
        
       $gestione = $persona::pluck('name','id');

       return view('admin.gestions.create', compact('gestione'));
        
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
           
           'gestion'=>'required',
           'gestor'=>'required'         
        ]);
        gestion::create($request->all());
        return redirect()->route('admin.gestiones.index');
        //return $request->All();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(gestion $gestion)
    {
        return view('admin.gestions.show', compact('gestion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(gestion $gestion)
    {
        return view('admin.gestions.edit', compact('gestion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gestion $gestion)
    {
        //$request->validate([
           
         //   'fprogramas'=>'required',  
          //  'programas'=>'required',
          //  'gestion'=>'required',
           // 'razon'=>'required',
           // 'gestor'=>'required'       
         //]);
         $gestion->update($request->all());
         return redirect()->route('admin.gestiones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(gestion $gestion)
    {
        $gestion->delete();
        return redirect()->route('admin.gestions.index');
    }
}
