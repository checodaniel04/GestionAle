@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Mostrar Noticia</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a class="btn btn-success" href="{{route('admin.noticiasints.create')}}">Nueva Noticia</a>

    </div>
    <div class="card-body">
        <table class="table table-stripped">
            <tbody>
                
                
               
                
                <tr><th>id</th>
                <td>{{$noticiasint->id}}</td></tr>
                <tr> <th>Titulo</th>
                <td>{{$noticiasint->titulo}}</td></tr>
                <tr><th>Noticia</th>
                <td>{{$noticiasint->noticia}}</td></tr>
                <tr><th>Autor</th>
                <td>{{$noticiasint->User->name}}</td>   </tr>          
               
                                            

            </tbody>


        </table>

    </div>
</div>



@stop

