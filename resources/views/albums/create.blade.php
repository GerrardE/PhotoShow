@extends('layouts.app')

@section('content')
    <h3>Create Album</h3>
    {!!Form::open(['action'=>'AlbumsController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data'])!!}
        {{ Form::bsText('name', '', ['placeholder' => 'Album Name', 'class'=>'form-control']) }}
        {{ Form::bsTextArea('description', '', ['placeholder' => 'Album Description', 'class'=>'form-control']) }}
        {{ Form::bsFile('cover_image', ['class'=>'form-control'])}}
        {{ Form::bsSubmit('submit', ['class'=>'btn btn-default']) }}
    {!! Form::close() !!}
@endsection