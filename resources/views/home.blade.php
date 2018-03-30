@extends('template.principal')
@section('content')
    <div class="widget-content">
      @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        You are logged in!

    </div>
@stop
