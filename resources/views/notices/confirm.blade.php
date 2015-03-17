@extends('app')

@section('content')
    <h1 class="page-heading">Confirm</h1>

    {!! Form::open(['action' => 'NoticesController@store']) !!}

        <!-- Template Form Input -->
        <div class="form-group">
            {!! Form::textarea('template', $template, ['class' => 'form-control']) !!}
        </div>
        <!-- Deliver Form Input -->
        <div class="form-group">
            {!! Form::Submit('Deliver', ['class' => 'btn btn-primary form-control']) !!}
        </div>

    {!! Form::close() !!}
@stop
