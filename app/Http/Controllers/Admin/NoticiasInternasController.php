<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\noticiaint;
use Illuminate\Support\Facades\Storage;


class NoticiasInternasController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.noticiasints.index')->only('index','create','store','show','edit','update');
        $this->middleware('can:admin.noticiasints.destroy')->only('destroy');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticiaints = noticiaint::all();
        return view('admin.noticiasints.index',compact('noticiaints'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.noticiasints.create');
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
            $url = Storage::put('post1', $request->file('file'));
            $entrada['url']=$url ;      
         
        }
        //return $entrada;
        
        noticiaint::create($entrada);
        return redirect()->route('admin.noticiasints.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(noticiaint $noticiasint)
    {
        return view('admin.noticiasints.show',compact('noticiasint'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(noticiaint $noticiasint)
    {
        return view('admin.noticiasints.edit',compact('noticiasint'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, noticiaint $noticiasint)
    {
        
        $request->validate([
    'titulo'=>'required',
    'noticia'=>'required'           
        ]);

        $entrada=$request->all();
        if ($request->file('file')) {
            $url = Storage::put('post1', $request->file('file'));
            $entrada['url']=$url ;      
         
        }

        $noticiasint->update($entrada);
        return redirect()->route('admin.noticiasints.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(noticiaint $noticiasint)
    {
        $noticiasint->delete();
        return redirect()->route('admin.noticiasints.index');
    }
}
