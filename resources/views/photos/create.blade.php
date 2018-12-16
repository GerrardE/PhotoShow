@extends('layouts.app')

@section('content')
    <h3>Upload Photo</h3>
    {!!Form::open(['action'=>'PhotosController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data'])!!}
        {{ Form::bsText('title', '', ['placeholder' => 'Photo Title', 'class'=>'form-control']) }}
        {{ Form::bsTextArea('description', '', ['placeholder' => 'Photo Description', 'class'=>'form-control']) }}
        {{ Form::hidden('album_id', $album_id)}}
        {{ Form::bsFile('photo', ['class'=>'form-control'])}}
        {{ Form::bsSubmit('submit', ['class'=>'btn btn-default']) }}
    {!! Form::close() !!}
@endsection