@extends('template.principal',$scripts=['js/funciones.js'])
@section('content')
<div class="widget-header">
    <h3><i class="fa fa-table"></i> Cr&eacute;ditos </h3> &nbsp; &nbsp;
    <a href="{{route('credito.create')}}" id="credito" class="btn btn-default btn-sm" ><i class="fa fa-plus" ></i> <strong  class="text-capitalize">Crear nuevo cr&eacute;dito</strong></a>
</div>
    <div class="widget-content table-responsive">
        @include('template.message')
        <table id="featured-datatable" class="table table-sorting table-striped table-hover datatable ">
            <thead>
                    <tr>
                        <th>Folio</th>
                        <th>Cliente</th>
                        <th>Cantidad</th>
                        <th>Fecha</th>
                        <th>Teléfono</th>
                        <th>Estatus</th>
                        <th>Opciones</th>
                    </tr>
            </thead>
            <tbody>
                @foreach($datos as $row)
                    <tr>
                        <td>{{$row->folio}}</td>
                        <td>{{$row->cliente}}</td>
                        <td>${{$row->cantidad}}</td>
                        <td>{{$row->fecha}}</td>
                        <td>{{$row->telefono}}</td>
                        <td>{{$row->estatus}}</td>
                        <td>
                            <a href="{{route('credito.edit',['id'=>$row->folio])}}" class="btn btn-custom-secondary btn-sm">
                                <span class="glyphicon glyphicon-edit"></span> 
                            </a>
                            <a onclick="borrar('{{route('credito.destroy',['id'=>$row->folio])}}')" class="btn btn-danger btn-sm">
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