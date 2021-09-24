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
            <table id="personas" class="table table-striped table-bordered">
                <thead>
                    <tr>
                                <th>id</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Telefono</th>
                                <th>Seccion</th>
                                <th>Registro</th>
                                <th>Fecha de Creacion</th>
                                <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personas as $persona)
                    <tr>
                        <td><a href="{{route('admin.personas.show', $persona)}}">{{$persona->id}}</a></td>
                        <td>{{$persona->name}}</td>
                        <td>{{$persona->correo}}</td>
                        <td>{{$persona->telefono}}</td>
                        <td>{{$persona->seccion}}</td>
                        <td>{{$persona->User->name}}</td>
                        <td>{{$persona->created_at}}</td> 
                        <td>                                           
                        <div class="btn-btn-group">
                         <a class="btn btn-primary btn-sm" href="{{route('admin.personas.edit', $persona)}}"><i class="fas fa-user-edit"></i></a>
                         <a class="btn btn-success btn-sm" href="{{route('admin.gestions.create', $persona)}}"><i class="fas fa-folder-plus"></i></a>
                         @can('admin.personas.destroy')
                             
                         
                         <form action="{{route('admin.personas.destroy', $persona)}}" method="POST">
                            @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </form>
                        @endcan
                        
                        </div>
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
   
  
    $('#personas').DataTable({
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
