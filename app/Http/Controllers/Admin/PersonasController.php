<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\persona;
use Illuminate\Support\Facades\Storage;

class PersonasController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.personas.index')->only('index','create','store','show','edit','update');
        $this->middleware('can:admin.personas.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = persona::all();
        return view('admin.personas.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.personas.create');
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
            'name'=>'required',
            'correo'=>'required',
            'telefono'=>'required',
            'calle'=>'required',
            'numero'=>'required',
            'fracc'=>'required',
            'cp'=>'required',
            'ciudad'=>'required',
            'estado'=>'required',
            'celector'=>'required',
            'curp'=>'required',
            'seccion'=>'required',
            'file'=>'image' 
                    
        ]);


        $entrada=$request->all();
        if ($request->file('file')) {
            $url = Storage::put('postcr', $request->file('file'));
            $entrada['url']=$url ;      
                 }
     
        persona::create($entrada);
        return redirect()->route('admin.personas.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(persona $persona)
    {
        return view('admin.personas.show',compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(persona $persona)
    {
        return view('admin.personas.edit',compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, persona $persona)
    {
        $request->validate([
            'name'=>'required',
            'correo'=>'required',
            'telefono'=>'required',
            'calle'=>'required',
            'numero'=>'required',
            'fracc'=>'required',
            'cp'=>'required',
            'ciudad'=>'required',
            'estado'=>'required',
            'celector'=>'required',
            'curp'=>'required',
            'seccion'=>'required',
                    
        ]);
      



        $persona ->update($request->all());
        return redirect()->route('admin.personas.edit', $persona)->with('info','Los datos se actualizaron con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(persona $persona)
    {
        $persona->delete();
        return redirect()->route('admin.personas.index');
    }
}
