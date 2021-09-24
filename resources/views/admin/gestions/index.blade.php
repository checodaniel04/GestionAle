@extends('adminlte::page')

@section('title', 'Dashboard')



@section('content_header')
    <h1>Gestiones</h1>
@endsection

@section('content')
    <div class="card">
        
        <div class="card-body">
            <table id="pedidos" class="table table-striped" >
                <thead>
                    
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Programas Federales</th>
                        <th>Programa</th>
                        <th>Gestion Solicitada</th>
                        <th>Gestor</th>
                        <th>Estado</th>
                        <th>Razon</th>
                        
                        <th>Acciones</th>
                    
                </thead>
                <tbody>
                    @foreach ($gestiones as $gestion)
                        <tr>
                            <td><a href="{{route('admin.gestions.show', $gestion)}}">{{$gestion->id}}</a></td>                                    
                            <td>{{$gestion->persona->name}}</td>
                            <td>{{$gestion->fprogramas}}</td>
                            <td>{{$gestion->programa}}</td>
                            <td>{{$gestion->gestion}}</td>
                            <td>{{$gestion->gestor}}</td>
                            <td>{{$gestion->estado}}</td>
                            <td>{{$gestion->razon}}</td>
                            
                            <td>
                            <a class="btn btn-primary btn-sm" href="{{route('admin.gestions.edit', $gestion)}}"><i class="fas fa-pen-square"></i></a>
                            @can('admin.gestions.destroy')
                                
                           
                                <form action="{{route('admin.gestions.destroy', $gestion)}}" method="POST">
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
@endsection
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
   
  
    $('#pedidos').DataTable({
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