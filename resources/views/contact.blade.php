@extends('layouts.app')

@section('content')
    <h1>contact</h1>
    {!! Form::open(['url' => 'contact/submit']) !!}

        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name',  '',['class' => 'form-control', 'placeholder'=>'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'E-Mail Address')}}
            {{Form::text('email', '',['class' => 'form-control', 'placeholder'=>'Enter E-mail address'])}}
        </div>
        <div class="form-group">
            {{Form::label('message', 'Message')}}
            {{Form::textarea('message', '',['class' => 'form-control', 'placeholder'=>'Enter message'])}}
        </div>
        <div>
        {{Form::submit('submit', ['class'=> 'btn btn-primary'])}}
        
        </div>
    {!! Form::close() !!}
@endsection