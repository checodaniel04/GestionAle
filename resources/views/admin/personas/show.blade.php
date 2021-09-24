@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Promovidos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-success" href="{{route('admin.personas.create')}}">Nuevo Promovido</a>

        </div>
        <div class="card-body">
            <table class="table table-stripped">
                <tbody>
                   <tr><th>ID</th><td>{{$persona->id}}</td></tr>
                   <tr><th>Nombre</th><td>{{$persona->name}}</td></tr>
                   <tr><th>Email</th><td>{{$persona->correo}}</td></tr>
                   <tr><th>Telefono</th><td>{{$persona->telefono}}</td></tr>
                   <tr><th>calle</th><td>{{$persona->calle}}</td></tr>
                   <tr><th>Numero</th><td>{{$persona->numero}}</td></tr>
                   <tr><th>Freaccionamiento o Colonia</th><td>{{$persona->fracc}}</td></tr>
                   <tr><th>Codigo Postal</th><td>{{$persona->cp}}</td></tr>
                   <tr><th>Ciudad</th> <td>{{$persona->ciudad}}</td></tr>
                   <tr><th>Estado</th><td>{{$persona->estado}}</td></tr>
                   <tr><th>Clave de elector</th><td>{{$persona->celector}}</td></tr>
                   <tr><th>CURP</th><td>{{$persona->curp}}</td></tr>
                   <tr><th>Seccion</th><td>{{$persona->seccion}}</td></tr>
                   <tr><th>Vigencia</th><td>{{$persona->vigencia}}</td></tr>
                   <tr><th>Fecha de Nacimiento</th><td>{{$persona->fnacimiento}}</td></tr>
                   <tr><th>Quien dio de Alta</th><td>{{$persona->users_id}}</td></tr>
                   <tr><th>Credencial</th><td><img src="{{Storage::url($persona->url)}}" width="150"></td></tr>
                   <tr><th>Fecha de Alta</th><td>{{$persona->created_at}}</td></tr>                                  

                </tbody>


            </table>

        </div>
    </div>
@stop