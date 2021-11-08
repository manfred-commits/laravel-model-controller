@extends('layout.base')



@section('pageContent')
<section class="container-content">
    <main>
        <h1>Movies</h1>
        @foreach ($movies as $movie)
            <div class="container-movie">
                <h2>Titolo: {{$movie['title']}}</h2>
                <h3> Titolo Originale: {{$movie['original_title']}}</h3>
                <h4>Nazionalità: {{$movie['nationality']}}</h4>
                <h5>Data d'uscita: {{$movie['date']}}</h5>
                <h6>Punteggio medio: {{$movie['vote']}}</h6>
            </div>
            
        @endforeach
    </main>

</section>
@endsection