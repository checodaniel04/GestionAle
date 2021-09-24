<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\noticia;

use Illuminate\Support\Facades\Storage;


class NoticiasController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.noticias.index')->only('index','create','store','show','edit','update');
        $this->middleware('can:admin.noticias.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticia = noticia::all();
        return view('admin.noticias.index',compact('noticia'));
        
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.noticias.create');
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
            'titulo'=>'required',
            'noticia'=>'required',
            'file'=>'image'           
        ]);
        $entrada=$request->all();
        if ($request->file('file')) {
            $url = Storage::put('post', $request->file('file'));
            $entrada['url']=$url ;      
         
        }
        //return $entrada;
        noticia::create($entrada);
        

      return redirect()->route('admin.noticias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(noticia $noticia)
    {
        return view('admin.noticias.show',compact('noticia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(noticia $noticia)
    {
        return view('admin.noticias.edit',compact('noticia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, noticia $noticia)
    {
        $request->validate([
            'titulo'=>'required',
            'noticia'=>'required'           
        ]);

        $entrada=$request->all();
        if ($request->file('file')) {
            $url = Storage::put('post', $request->file('file'));
            $entrada['url']=$url ;      
         
        }
        //return $entrada;
       
        
        $noticia->update($entrada);
      return redirect()->route('admin.noticias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(noticia $noticia)
    {
        $noticia->delete();
        return redirect()->route('admin.noticias.index');
    }
}
