@extends('template.base')
@section('pagecomic')
    <section class="comic-list">
        @foreach ($arrComics as $comic)
           
                <div class="comic-card">
                    <a href="{{route('comic', ['id' => $comic['id']]) }}">
                        <img class="comics" src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                        <h4>{{$comic['series']}}</h4>
                        <h3>{{$comic['title']}}</h3>
                        <span>{{$comic['price']}}</span>
                    </a>           
                </div>
              
        @endforeach
        

        <button class="comic-button">
            <span>LOAD MORE</span> 
        </button>        
    </section>

@endsection