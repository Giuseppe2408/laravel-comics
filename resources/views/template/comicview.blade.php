<section id="view-comics">
    @extends('home')
        <h1>comic</h1>
        <ul>
            {{-- @foreach ($arrComics as $comics)
                <h2>{{$comics}}</h2>
                @foreach ($comics as $comic)
                    <li><a href="{{ route('comicview', ['id' => $comic['id']]) }}">{{$comic['title']}}</a></li>
                @endforeach
            @endforeach --}}
        </ul>

</section>