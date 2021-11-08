@extends('layout.base')



@section('pageContent')
    <main>
        @foreach ($movies as $movie)
            <div class="container-movie">
                <h2>{{$movie['title']}}</h2>

            </div>
            
        @endforeach
    </main>
@endsection