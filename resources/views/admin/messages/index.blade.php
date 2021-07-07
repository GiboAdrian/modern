@extends('adminlte::page')

@section('title', 'Panel de administración')

@section('content_header')
    <h1>
        Mensajes
    </h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Mensajes recibidos desde la página web</h3>
                    </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="messages" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $message)
                                <tr>
                                    <td>{{ $message->created_at }}</td>
                                    <td>{{ $message->client }}</td>
                                    <td>{{ $message->mail }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-read-message-{{ $message->id }}">
                                            Abrir
                                        </button>
                                        <form action="{{route('admin.message.delete', $message->id)}}" method="POST">
                                            {{ csrf_field() }}
                                            @method('DELETE')
                                            <button class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                <!-- modal update-->
                                @include('admin.messages.modal-read-message')
                                <!-- /.modal update-->
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Fecha</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
@stop

@section('js')
    <script>
    $(document).ready(function() {
        $('#messages').DataTable( {
            "order": [[ 0, "desc" ]]
        } );
    } );
    </script>
@stop