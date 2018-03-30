@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close">&times;</a>
        <strong>Bien hecho!</strong> {{Session::get('message')}}
        <a class="btn btn-sm btn-link" href="javascript:history.back()">Regresar</a>.
    </div>
@endif