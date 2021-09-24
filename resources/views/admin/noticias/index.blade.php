@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Noticias</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-success" href="{{route('admin.noticias.create')}}">Nueva Noticia</a>

        </div>
        <div class="card-body">
            <table id="noticias" class="table table-striped table-bordered">
                <thead>
                    <th>id</th>
                    <th>Titulo</th>
                    <th>Noticias</th>
                    <th>Autor</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach ($noticia as $noticia)
                    <tr>
                        <td><a href="{{route('admin.noticias.show', $noticia)}}">{{$noticia->id}}</a></td>
                        <td>{{$noticia->titulo}}</td>
                        <td>{{$noticia->noticia}}</td>
                        <td>{{$noticia->User->name}}</td>
                        <td>
                        <a class="btn btn-primary btn-sm" href="{{route('admin.noticias.edit', $noticia)}}"><i class="fas fa-edit"></i></a>
                         @can('admin.noticias.destroy')
                             
                         
                            <form action="{{route('admin.noticias.destroy', $noticia)}}" method="POST">
                            @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </form>
                            @endcan
                        </td>
                       
                    </tr>
                        
                    @endforeach

                </tbody>


            </table>

        </div>
    </div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@stop

@section('js')
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
<script>
   
  
    $('#noticias').DataTable({
        responsive: true,
        autoWidth: false,
        
        "language": {
            "lengthMenu": "Mostrar _MENU_ Usuarios por pagina",
            "zeroRecords": "No se encontro Registro- sorry",
            "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No se encontro Registro",
            "infoFiltered": "(Total de Registros encontrados _MAX_)"
        }
    } );

</script>
@stop