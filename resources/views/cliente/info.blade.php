<!-- Modal -->
<div class="modal fade" id="Ver{{$cliente->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId"
                        placeholder="nombre completo." disabled value="{{$cliente->nombre}}" />

                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Telefono</label>
                    <input type="number" class="form-control" name="telefono" id="" aria-describedby="helpId"
                        placeholder="numero de telefono." disabled value="{{$cliente->telefono}}" />

                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="correo" id="" aria-describedby="helpId"
                        placeholder="correo electronico." disabled value="{{$cliente->correo}}" />

                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>            
            </div>
            
        </div>
    </div>
</div>
