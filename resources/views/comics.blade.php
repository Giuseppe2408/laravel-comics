
@extends('home')
@section('comicslist')

    <section class="comic-list">
        @foreach ($arrComics as $comic)
        <div class="comic-card">
            <a href="">
                <img class="comics" src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                <h4>{{$comic['series']}}</h4>
                <h3>{{$comic['title']}}</h3>
            </a>           
        </div>
        @endforeach
        

        <button class="comic-button">
            <span>LOAD MORE</span> 
        </button>       
    </section>
@endsection
