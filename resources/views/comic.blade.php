@extends('template.base')
    @section('pagecomic')

              
        <div>
            <img class="comics" src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
            <h4>{{$comic['series']}}</h4>
            <h3>{{$comic['title']}}</h3>          
        </div>

        
    @endsection

    

  