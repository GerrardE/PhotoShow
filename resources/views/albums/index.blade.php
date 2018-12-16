@extends('layouts.app')

@section('content')
   @if(count($albums)>0)
   <?php
        $colcount = count($albums);
        $i = 1;
   ?>

   <div id="albums">
       <div class="row">
            @foreach ($albums as $album)
                @if($i == $colcount)
                    <div class="col-md-4 col-lg-4" >
                        <a href="/albums/{{ $album->id}}">
                            <img src="storage/album_covers/{{ $album->cover_image }}" style="max-width: 300px; height: 200px" alt="{{ $album->name }}" class="thumbnail">
                        </a>
                       
                        <h4>
                            {{ $album->name }}
                        </h4>
                        
                        @else

                        <div class="col-md-4 col-lg-4" >
                            <a href="/albums/{{ $album->id}}">
                                <img src="storage/album_covers/{{ $album->cover_image }}" style="max-width: 300px; height: 200px" alt="{{ $album->name }}" class="thumbnail">
                            </a>
                           
                            <h4>
                                {{ $album->name }}
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
       <p>No albums to display</p>
       @endif

@endsection