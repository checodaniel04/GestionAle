@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar noticia</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong> {{session('info')}} </strong>
    </div>
@endif
<div class="card">
    <div class="card-body">
        {!! Form::model($noticia,['route' =>  ['admin.noticias.update', $noticia],'files'=>true, 'method'=>'put']) !!}
       
    
        <div class="form-group">
            {!! Form::label('titulo', 'Titulo') !!}
            {!! Form::text('titulo', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el titulo de la noticia']) !!}
            @error('titulo')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="row mb-3">
            <div class="col">
                @if ($noticia->url)
                <div class="image-wrapper">
                    <img id="picture" src="{{Storage::url($noticia->url)}}" alt="">
                </div>
                @else
                <div class="image-wrapper">
                    <img id="picture" src="https://leslie.sftcontrol.com/storage/post/09.jpg" alt="">
                </div>
                @endif
            
            </div>
            <div class="col">
            {!! Form::label('file', 'Imagen que se mostrara en la noticia') !!}
            {!! Form::file('file', ['class'=>'form-control-file']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('noticia', 'Noticia') !!}            
            {!! Form::textarea('noticia', null, ['class'=>'form-control']) !!}
            @error('noticia')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form-group">
            {!! Form::label('status', 'status') !!}
            {!! Form::select('status',['1'=>'Activo', '2'=>'Inactivo']) !!}
           
        </div>
        <div class="form-group">
            {!! Form::label('users_id', 'creado por') !!}
            {!! Form::text('users_id', auth()->id(), ['class'=>'form-control', 'readonly']) !!}
           
        </div>
        {!! Form::submit('Actualizar Noticia', ['class'=>'btn btn-primary']) !!}
    
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
