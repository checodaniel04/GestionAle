@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Gestiones</h1>
@stop


@section('content')
<div class="card">
    
    <div class="card-body">
        <table class="table table-stripped">
            <tbody>
                <tr><th>Nombre</th> <td>{{$gestion->persona->name}}</td></tr>
                <tr><th>Tiene Programas Federales</th><td>{{$gestion->fprogramas}}</td></tr>
                <tr><th>Que Programa tiene</th><td>{{$gestion->programa}}</td></tr>
                <tr><th>Gestion que solicita</th><td>{{$gestion->gestion}}</td></tr>
                <tr><th>Gestor que se esta encargando del tema</th><td>{{$gestion->gestor}}</td></tr>
                <tr><th>Status</th><td>{{$gestion->estado}}</td></tr>
                <tr><th>Razon del cambio de Status</th><td>{{$gestion->razon}}</td></tr>
                <tr><th>Creado por</th><td>{{$gestion->User->name}}</td></tr>
                <tr><th>Fecha de Creacion</th><td>{{$gestion->created_at}}</td></tr>       
                
               
                                            

            </tbody>


        </table>

    </div>
</div>
@stop
