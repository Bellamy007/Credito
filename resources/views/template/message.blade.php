@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close">&times;</a>
            <strong>Bien hecho!</strong> {{Session::get('message')}}.
    </div>
@endif