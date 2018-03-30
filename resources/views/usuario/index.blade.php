@extends('template.principal',$scripts=['js/funciones.js'])
@section('content')
<div class="widget-header">
    <h3><i class="fa fa-table"></i>Usuarios</h3> &nbsp; &nbsp;
    <a href="{{route('usuario.create')}}" id="addUser" class="btn btn-default btn-sm" ><i class="fa fa-plus" ></i> <strong  class="text-capitalize">Agregar nuevo usuario</strong></a>
</div>
    <div class="widget-content table-responsive">
        @include('template.message')
        <table id="featured-datatable" class="table table-sorting table-striped table-hover datatable ">
            <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido P.</th>
                        <th>Apellido M.</th>
                        <th>Usuario</th>
                        <th>Email</th>
                        <th>Opciones</th>
                    </tr>
            </thead>
            <tbody>
                @foreach($datos as $row)
                    <tr>
                            <td>{{$row->name}}</td>
                            <td>{{$row->app}}</td>
                            <td>{{$row->apm}}</td>
                            <td>{{$row->username}}</td>
                            <td>{{$row->email}}</td>
                            <td>
                                <a href="{{route('usuario.edit',['id'=>$row->id])}}" class="btn btn-custom-secondary btn-sm">
                                    <span class="glyphicon glyphicon-edit"></span> 
                                </a>
                                <a onclick="borrar('{{route('usuario.delete',['id'=>$row->id])}}')" class="btn btn-danger btn-sm">
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