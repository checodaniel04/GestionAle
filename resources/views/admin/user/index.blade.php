@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-success" href="{{route('admin.user.create')}}">Nuevo Usuario</a>

        </div>
        <div class="card-body">
                <table id="users" class="table table-stripped">
                <thead>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Fecha de Creacion</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>
                        <a class="btn btn-primary btn-sm" href="{{route('admin.user.edit', $user)}}"><i class="fas fa-user-edit"></i></a>
                        
                            <form action="{{route('admin.user.destroy', $user)}}" method="POST">
                            @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </form>
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
   
  
    $('#users').DataTable({
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

