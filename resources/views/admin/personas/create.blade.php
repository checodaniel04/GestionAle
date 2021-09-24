@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nuevo Promovido</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong> {{session('info')}} </strong>
    </div>
@endif
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.personas.store','files'=>true]) !!}
    
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el Nombre de la Persona']) !!}
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('correo','Email') !!}
            {!! Form::text('correo', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el correo electronico de la Persona']) !!}
            @error('correo')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('telefono','Telefono') !!}
            {!! Form::text('telefono', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el Telefono de la Persona']) !!}
            @error('telefono')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div> 
        <div class="form-group">
            {!! Form::label('calle','Calle') !!}
            {!! Form::text('calle', null, ['class'=>'form-control', 'placeholder'=>'Ingrese la calle donde vive la Persona']) !!}
            @error('calle')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div> 
        <div class="form-group">
            {!! Form::label('numero','Numero') !!}
            {!! Form::text('numero', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el Numero de casa de la Persona']) !!}
            @error('numero')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div> 
        <div class="form-group">
            {!! Form::label('fracc','Fraccionamiento') !!}
            {!! Form::text('fracc', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el fraccionamiento donde vive la Persona']) !!}
            @error('fracc')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div> 
        <div class="form-group">
            {!! Form::label('cp','Codigo Postal') !!}
            {!! Form::text('cp', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el Codigo Postal de la Persona']) !!}
            @error('cp')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div> 
        <div class="form-group">
            {!! Form::label('ciudad','Ciudad') !!}
            {!! Form::text('ciudad', null, ['class'=>'form-control', 'placeholder'=>'Ingrese la Ciudad de la Persona de la Persona']) !!}
            @error('ciudad')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div> 
        <div class="form-group">
            {!! Form::label('estado','Estado') !!}
            {!! Form::text('estado', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el Estado de la Persona']) !!}
            @error('estado')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div> 
        <div class="form-group">
            {!! Form::label('celector','Clave de Elector') !!}
            {!! Form::text('celector', null, ['class'=>'form-control', 'placeholder'=>'Ingrese la clave de elector de la Persona']) !!}
            @error('celector')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div> 
        <div class="form-group">
            {!! Form::label('curp','CURP') !!}
            {!! Form::text('curp', null, ['class'=>'form-control', 'placeholder'=>'Ingrese la CURP de la Persona']) !!}
            @error('curp')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div> 
        <div class="form-group">
            {!! Form::label('seccion','Seccion') !!}
            {!! Form::text('seccion', null, ['class'=>'form-control', 'placeholder'=>'Ingrese la seccion de la Persona']) !!}
            @error('seccion')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div> 
        <div class="form-group">
            {!! Form::label('vigencia','Vigencia de la Credencial de Elector') !!}
            {!! Form::date('vigencia', \Carbon\Carbon::now());!!}
          
           
        </div> 
        <div class="form-group">
            {!! Form::label('fnacimiento','Fecha de Nacimiento') !!}
            {!! Form::date('fnacimiento', \Carbon\Carbon::now());!!}
           
            
        </div> 
                <div class="form-group">
            {!! Form::label('users_id', 'creado por') !!}
            {!! Form::text('users_id', auth()->id(), ['class'=>'form-control', 'readonly']) !!}
           
        </div>
    </div> 
    <div class="row mb-3">
        <div class="col">
            <div class="image-wrapper">
                <img id="picture" src="https://leslie.sftcontrol.com/storage/post/09.jpg" alt="">
            </div>
        
        </div>
        <div class="col">
        {!! Form::label('file', 'Foto Credencial de Elector') !!}
        {!! Form::file('file', ['class'=>'form-control-file', 'accept' => 'image/*']) !!}
        </div>
    </div>
    @error('file')
        <span class="text-danger">{{$message}}</span>
    @enderror

    
        {!! Form::submit('Crear Promovido', ['class'=>'btn btn-primary']) !!}
    
        {!! Form::close() !!}
    </div>
    
        </div>
@stop
@section('js')


<script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#noticia' ) )
        .catch( error => {
            console.error( error );
        } );


   

    
      
</script>
<script>
  

    document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }

</script>

@stop

@section('css')
<style>
.image-wrapper{
    position:relative;
    padding-bottom:56.25%;
}

.image-wrapper img{
    position:absolute;
    object-fit:cover;
    width:100%;
    height: 100%;
}
</style>

    
@endsection


