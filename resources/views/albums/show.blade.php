@extends('layouts.app')
@section('content')
    <h1>{{ $album->title }}</h1>
    <a class="btn btn-default" href="/">Go Back</a>
    <a class="btn btn-primary" href="/photos/create/{{ $album->id }}">Upload Photo To Album</a>
    <hr>

    @if(count($album->photos)>0)
    <?php
         $colcount = count($album->photos);
         $i = 1;
    ?>
 
    <div id="photos">
        <div class="row">
             @foreach ($album->photos as $photo)
                 @if($i == $colcount)
                     <div class="col-md-4 col-lg-4" >
                         <a href="/photos/{{ $photo->id}}">
                             <img src="/storage/photos/{{ $photo->album_id }}/{{ $photo->photo }}" style="max-width: 300px; height: 200px" alt="{{ $photo->title }}" class="thumbnail">
                         </a>
                        
                         <h4>
                             {{ $photo->title }}
                         </h4>
                         
                         @else
 
                         <div class="col-md-4 col-lg-4" >
                             <a href="/photos/{{ $photo->id}}">
                                 <img src="/storage/photos/{{ $photo->album_id }}/{{ $photo->photo }}" style="max-width: 300px; height: 200px" alt="{{ $photo->title }}" class="thumbnail">
                             </a>
                            
                             <h4>
                                 {{ $photo->title }}
                             </h4>
 
                             @endif
                             @if($i % 3 == 0)
 
                         </div>
                     </div>
 
                 <div class="row">
 
                 @else
 
         </div>
 
                 @endif
                 <?php $i++; ?>
             @endforeach
     </div>
    </div>
        @else
        <p>No Photos to display</p>
        @endif
 
@endsection