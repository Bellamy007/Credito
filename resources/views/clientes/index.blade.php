@extends('template.principal',$scripts=['funciones.js'])
@section('content')
<div class="widget-header">
    <h3><i class="fa fa-table"></i> Clientes </h3> &nbsp; &nbsp;
    <a href="{{route('cliente.create')}}" id="addCliente" class="btn btn-default btn-sm" ><i class="fa fa-plus" ></i> <strong  class="text-capitalize">Agregar nuevo cliente</strong></a>
</div>
    <div class="widget-content table-responsive">
        @include('template.message')
        <table id="featured-datatable" class="table table-sorting table-striped table-hover datatable ">
            <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido P.</th>
                        <th>Apellido M.</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Localidad</th>
                        <th>Opciones</th>
                    </tr>
            </thead>
            <tbody>
                @foreach($datos as $row)
                    <tr>
                        <td>{{$row->nombre}}</td>
                        <td>{{$row->app}}</td>
                        <td>{{$row->apm}}</td>
                        <td>{{$row->telefono}}</td>
                        <td>{{$row->direccion}}</td>
                        <td>{{$row->localidad}}</td>
                        <td>
                            <a href="{{route('cliente.edit',['id'=>$row->id])}}" class="btn btn-custom-secondary btn-sm">
                                <span class="glyphicon glyphicon-edit"></span> 
                            </a>
                            <a onclick="borrar('{{route('cliente.delete',['id'=>$row->id])}}')" class="btn btn-danger btn-sm">
                                <span class="glyphicon glyphicon-trash"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @include('template.modal')
        <div id="addmodal">&nbsp;</div>
    </div>
@stop