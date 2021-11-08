@extends('layout.base')



@section('pageContent')
<section class="container-content">
    <main>
        <h1>Movies</h1>
        @foreach ($movies as $movie)
            <div class="container-movie">
                <h2>Title: {{$movie['title']}}</h2>
                <h3> Original Title: {{$movie['original_title']}}</h3>
                <h4>Nationality: {{$movie['nationality']}}</h4>
                <h5>Release Date: {{$movie['date']}}</h5>
                <h6>Average Vote: {{$movie['vote']}}</h6>
            </div>
            
        @endforeach
    </main>

</section>
@endsection