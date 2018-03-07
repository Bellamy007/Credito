<div class="modal fade" id="modalUser" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Insertar nuevo Usuario</h3>
        </div>
        <div class="modal-body">
        {!!Form::open(['route'=>'usuario.store','method'=>'POST','id'=>'userStore'])!!}
                <div class="form-group">
                        <label class="control-label" for="inputSuccess2">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name">
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
                        <label class="control-label" for="inputSuccess2">Usuario</label>
                        <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                        <label class="control-label" for="inputSuccess2">Tipo</label>
                            <div class="form-group">
                            <label class="control-inline fancy-radio custom-color-green">
                                <input type="radio" id="tipo" name="tipo" value="1">
                                    <span><i></i>Administrador</span>
                            </label>
                            <label class="control-inline fancy-radio custom-color-green">
                                <input type="radio" id="tipo" name="tipo" value="2" checked="checked">
                                    <span><i></i>Usuario</span>
                            </label>
                        </div>
                </div>
                <div class="form-group">
                        <label class="control-label" for="inputSuccess2">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputSuccess2">Contrase&ntilde;a</label>
                    {{ Form::password('password', ['class'=>'form-control']) }}
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputSuccess2">Confirmar contrase&ntilde;a</label>
                    <input type="password" class="form-control" id="psw">
                </div>
                <div class="form-group">
                        <label class="control-label" for="inputSuccess2">Estado</label>
                            <div class="form-group">
                            <label class="control-inline fancy-radio custom-color-green">
                                <input type="radio" id="estatus" name="estatus" value="1" checked="checked">
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
