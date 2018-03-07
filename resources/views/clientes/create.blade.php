<div class="modal fade" id="modalCliente" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Insertar nuevo Cliente</h3>
        </div>
        <div class="modal-body">
            {!!Form::open(['route'=>'cliente.store','method'=>'POST','id'=>'clienteStore'])!!}
                <div class="form-group">
                        <label class="control-label" for="inputSuccess2">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" pattern="[A-Za-z]" title="Three letter country code" required="required">
                </div>
                <div class="form-group">
                        <label class="control-label" for="inputSuccess2">Apellido Paterno</label>
                        <input type="text" class="form-control" id="app" name="app">
                </div>
                <div class="form-group">
                        <label class="control-label" for="inputSuccess2">Apellido Materno</label>
                        <input type="text" class="form-control" id="apm" name="apm">
                </div>
                <div class="form-group">
                        <label class="control-label" for="inputSuccess2">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono">
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputSuccess2">Código Postal</label>
                    <input type="text" class="form-control" id="cp" name="cp">
                </div>
                <div class="form-group">
                        <label class="control-label" for="inputSuccess2">Estado</label>
                        <input type="text" class="form-control" id="estado" name="estado">
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputSuccess2">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" name="ciudad">
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputSuccess2">Localidad</label>
                    <input type="text" class="form-control" id="localidad" name="localidad">
                </div>
                <div class="form-group">
                        <label class="control-label" for="inputSuccess2">Direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion">
                </div>
                <div class="form-group">
                        <label class="control-label" for="inputSuccess2">Estatus</label>
                            <div class="form-group">
                            <label class="control-inline fancy-radio custom-color-green">
                                <input type="radio" id="estatus" name="estatus" value="1">
                                    <span><i></i>Activo</span>
                            </label>
                            <label class="control-inline fancy-radio custom-color-green">
                                <input type="radio" id="estatus" name="estatus" value="2">
                                    <span><i></i>Inactivo</span>
                            </label>
                        </div>
                </div>
        </div>
        <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="enviar">Guardar</button>
        </div>
        {!!Form::close()!!}
      </div>
    </div>
</div>