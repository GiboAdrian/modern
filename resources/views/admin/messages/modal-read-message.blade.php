<div class="modal fade" id="modal-read-message-{{ $message->id }}">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Mensaje</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>            
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Nombre: {{ $message->client }}</label><br>
                    <label for="mail">Correo: {{ $message->mail }}</label><br>
                    <label for="phone">Teléfono: {{ $message->phone }}</label><br>
                    <label for="message">Mensaje:</label><br>
                    <h2>{{ $message->message }}</h2>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>