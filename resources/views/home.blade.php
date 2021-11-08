@extends('layout.base')



@section('pageContent')
    <main>
        
        @foreach ($movies as $movie)
            <div class="container-movie">
                <h2>Titolo: {{$movie['title']}}</h2>
                <h2> Titolo Originale: {{$movie['original_title']}}</h2>
                <h2>Nazionalità: {{$movie['nationality']}}</h2>
                <h2>Data d'uscita: {{$movie['date']}}</h2>
                <h2>Punteggio medio: {{$movie['vote']}}</h2>
            </div>
            
        @endforeach
    </main>
@endsection