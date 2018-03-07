@if(Session::has('message-error'))
    <div class="alert alert-danger alert-dismissable">
        <a href="#" class="close">&times;</a>
            <strong>Ocurrio un error!</strong> {{Session::get('message-error')}}.
    </div>
@endif