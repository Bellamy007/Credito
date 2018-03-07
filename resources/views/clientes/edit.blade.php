@extends('template.principal')
@section('content')
<div class="widget-header">
    <h3><i class="glyphicon glyphicon-user"></i> Editar Cliente</h3> 
    <div class="btn-group widget-header-toolbar">
            <a href="#" id="tour-focus" title="Focus" class="btn-borderless btn-focus"><i class="fa fa-eye"></i></a>
    </div>
</div>
    <div class="widget-content">
        {!!Form::model($datos,['route'=>['cliente.update',$datos['id']],'method'=>'PUT'])!!}
                <div class="form-group">
                        <label class="control-label" for="inputSuccess2">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$datos['nombre']}}">
                </div>
                <div class="form-group">
                        <label class="control-label" for="inputSuccess2">Apellido Paterno</label>
                        <input type="text" class="form-control" id="app" name="app" value="{{$datos['app']}}">
                </div>
                <div class="form-group">
                        <label class="control-label" for="inputSuccess2">Apellido Materno</label>
                        <input type="text" class="form-control" id="apm" name="apm" value="{{$datos['apm']}}">
                </div>
                <div class="form-group">
                        <label class="control-label" for="inputSuccess2">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="{{$datos['telefono']}}">
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputSuccess2">Código Postal</label>
                    <input type="text" class="form-control" id="cp" name="cp" value="{{$datos['cp']}}">
                </div>
                <div class="form-group">
                        <label class="control-label" for="inputSuccess2">Estado</label>
                        <input type="text" class="form-control" id="estado" name="estado" value="{{$datos['estado']}}">
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputSuccess2">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{$datos['ciudad']}}">
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputSuccess2">Localidad</label>
                    <input type="text" class="form-control" id="localidad" name="localidad" value="{{$datos['localidad']}}">
                </div>
                <div class="form-group">
                        <label class="control-label" for="inputSuccess2">Direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" value="{{$datos['direccion']}}">
                </div>
                <div class="form-group">
                        <label class="control-label" for="inputSuccess2">Estatus</label>
                            <div class="form-group">
                            <label class="control-inline fancy-radio custom-color-green">
                                {{ Form::radio('estatus', 1 ) }}
                                    <span><i></i>Activo</span>
                            </label>
                            <label class="control-inline fancy-radio custom-color-green">
                                {{ Form::radio('estatus', 2 ) }}
                                    <span><i></i>Inactivo</span>
                            </label>
                        </div>
                </div>
              <button class="btn btn-primary" type="submit">Submit form</button>
        {!!Form::close()!!}
    </div>
@stop