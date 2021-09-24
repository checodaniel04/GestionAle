@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nueva Gestion</h1>
  
    
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong> {{session('info')}} </strong>
    </div>
@endif


<div class="card">
    <div class="card-body">
        {!! Form::model($gestion ,['route' => ['admin.gestions.update', $gestion], 'method'=>'put']) !!}
                 
    
        <div class="form-group">
            {!! Form::label('fprogramas', 'Tiene Programas Federales') !!}
            {!! Form::select('fprogramas',['Si'=>'Si', 'No'=>'No']) !!}
            @error('fprogramas')
            <span class="text-danger">{{$message}}</span>
        @enderror
            
        </div>
        <div class="form-group">
            {!! Form::label('programa','Programa') !!}
            {!! Form::text('programa', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el programa que tiene la Persona']) !!}
            @error('programa')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form-group">
            {!! Form::label('gestion','Gestion Solicitada') !!}
            {!! Form::textarea('gestion', null, ['class'=>'form-control', 'placeholder'=>'Ingrese la gestion solicitada']) !!}
            @error('gestion')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div> 
        <div class="form-group">
            {!! Form::label('gestor','Gestor') !!}
            {!! Form::text('gestor', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el gestor que dara seguimiento']) !!}
            @error('gestor')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>   
        <div class="form-group">
            {!! Form::label('estado', 'Estado al que pasara') !!}
            {!! Form::select('estado',['Pendiente'=>'Pendiente', 'Atendido'=>'Atendido','Cerrado'=>'Cerrado','Cancelado'=>'Cancelado']) !!}
            @error('estado')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <div class="form-group">
            {!! Form::label('razon', 'Como se antendio o razon por la que no se atendio') !!}
            {!! Form::textarea('razon', null, ['class'=>'form-control', 'placeholder'=>'ingresa la razon']) !!} 
            @error('razon')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <div class="form-group">
            {!! Form::label('personas_id', 'Promovido') !!}
            {!! Form::text ('personas_id', null, ['class'=>'form-control','readonly']) !!}
            @error('personas_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>   
      
         
        <div class="form-group">
            {!! Form::label('users_id', 'creado por') !!}
            {!! Form::text('users_id', auth()->id(), ['class'=>'form-control', 'readonly']) !!}
           
        </div>
        {!! Form::submit('Crear Gestion', ['class'=>'btn btn-primary']) !!}
    
        {!! Form::close() !!}
    </div>
    
        </div>
@stop
