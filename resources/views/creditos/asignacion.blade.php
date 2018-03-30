@extends('template.principal',$scripts=['assets/js/plugins/select2/select2.min.js','js/funciones.js'])
@section('content')
<div class="widget-header">
    <h3><i class="glyphicon glyphicon-user"></i> - <i class="fa fa-dollar"></i> Asignaci&oacute;n de Cr&eacute;dito</h3> 
    <div class="btn-group widget-header-toolbar">
            <a href="#" id="tour-focus" title="Focus" class="btn-borderless btn-focus"><i class="fa fa-eye"></i></a>
    </div>
</div>
    <div class="widget-content">
        @include('template.message')
        {!!Form::open(['route'=>'credito.store','method'=>'POST'])!!}
        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="col-sm-4">
                        <div class="form-group">
                            <label for="contact-aval" class="control-label">Folio Credito:</label>
                            <strong> 000{{$folio[0]->folio}} </strong>
                            <input type="hidden" name="folio" id="folio" value="{{ $folio[0]->folio }}">
                        </div>
                </div>
                <div class="col-sm-8">
                        <div class="form-group">
                            <label for="contact-aval" class="control-label ">Fecha Credito:</label>
                            <strong> {{date("Y-m-d")}} </strong>
                        </div>
                </div>
            </div>    
            <div class="row">
                <div class="col-sm-4">
                        <div class="form-group">
                            <label for="contact-name" class="control-label">Cliente</label>
                                <select class="select2" id="cliente" name='cliente' onchange="infoCLiente('{{route('info.cliente')}}','{{route('combo.criterio')}}');" required="required">
                                    <option selected="" value="0" >---Seleccione un cliente---</option>
                                    @foreach($cliente as $res)
                                    <option value="{{$res->id}}"> {{$res->nombre}} </option>
                                    @endforeach
                                </select>
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-group">
                            <label for="contact-aval" class="control-label ">Avales</label>
                            <select multiple="" class="select2 select2-multiple" id="avales" name="avales[]" required="required">
                                    
                                </select>
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-group">
                                <label for="contact-email" class="control-label">Pagos</label>
                                <input type="text" class="form-control" readonly="readonly" value="16">
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group" id="infoCliente"> &nbsp; </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-group">
                            <label for="contact-email" class="control-label">Cantidad</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="number" id="cantidad" name="cantidad" class="form-control" onkeyup="precioPagos();" onblur="precioPagos();" required="required">
                                <span class="input-group-addon">.00</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-email" class="control-label">Pagos por semana</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" class="form-control" id="pagos" name="pagos" placeholder="Pagos" readonly="readonly">
                            </div>
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="form-group">
                                <label for="contact-email" class="control-label">Contacto</label>
                                <input type="text" class="form-control" id="contacto" name="contacto" placeholder="Contacto" required="required">
                               
                        </div>
                        <div class="form-group">
                             <label for="contact-email" class="control-label">Tel. contacto</label>
                                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required="required">
                        </div>
                </div>
            </div>
        <button class="btn btn-primary" type="submit">Crear Cr&eacute;dito</button>
        {!!Form::close()!!}
    </div>
@stop