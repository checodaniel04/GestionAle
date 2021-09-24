@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Usuario</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong> {{session('info')}} </strong>
    </div>
@endif
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.user.store']) !!}
    
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el nombre del colaborador']) !!}
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el correo del colaborador']) !!}
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Contraseña') !!}
            {!! Form::password('password', null, ['class'=>'form-control', 'placeholder'=>'Ingrese la contraseña']) !!}
            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('password_confirmation', 'Confirmar Contraseña') !!}
            {!! Form::password('password_confirmation', null, ['class'=>'form-control', 'placeholder'=>'Ingrese nuevamente la contraseña']) !!}
            @error('password_confirmation')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        {!! Form::submit('Crear Usuario', ['class'=>'btn btn-primary']) !!}
    
        {!! Form::close() !!}
    </div>
    
        </div>
@stop

