@extends('template.principal')
@section('content')
<div class="widget-header">
    <h3><i class="fa fa-bar-chart-o"></i> Editar</h3> 
    <div class="btn-group widget-header-toolbar">
            <a href="#" id="tour-focus" title="Focus" class="btn-borderless btn-focus"><i class="fa fa-eye"></i></a>
    </div>
</div>
    <div class="widget-content">
        {!!Form::model($datos,['route'=>['usuario.update',$datos['id']],'method'=>'PUT'])!!}
                <div class="form-group">
<!--                    {!!Form::label('nombre','NOmbre')!!}
                    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre'])!!}-->
                        <label class="control-label" for="Nombre">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$datos['name']}}">
                </div>
                <div class="form-group">
                        <label class="control-label" for="app">Apellido Paterno</label>
                        <input type="text" class="form-control" id="app" name="app" value="{{$datos['app']}}">
                </div>
                <div class="form-group">
                        <label class="control-label" for="apm">Apellido Materno</label>
                        <input type="text" class="form-control" id="apm" name="apm" value="{{$datos['apm']}}">
                </div>
                <div class="form-group has-feedback">
                        <label class="control-label" for="username">Usuario</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{$datos['username']}}">
                </div>
                <div class="form-group">
                        <label class="control-label" for="tipo">Tipo</label>
                        <div class="form-group">
                            <label class="control-inline fancy-radio custom-color-green">
                                {{ Form::radio('tipo', 1) }}
                                    <span><i></i>Administrador</span>
                            </label>
                            <label class="control-inline fancy-radio custom-color-green">
                                {{ Form::radio('tipo', 2) }}
                                    <span><i></i>Usuario</span>
                            </label>
                        </div>
                </div>
                <div class="form-group has-feedback">
                        <label class="control-label" for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{$datos['email']}}">
                </div>
                <div class="form-group has-feedback">
                    <label class="control-label" for="psw">Contrase&ntilde;a</label>
                    {{ Form::password('password', ['class'=>'form-control']) }}
                </div>
                <div class="form-group has-feedback">
                    <label class="control-label" for="psw2">Confirmar contrase&ntilde;a</label>
                    <input type="password" class="form-control" id="psw2">
                </div>
                <div class="form-group">
                        <label class="control-label" for="estatus">Estado</label>
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