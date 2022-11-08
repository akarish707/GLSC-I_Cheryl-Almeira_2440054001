
@extends('layouts.main')

@section('container')
   @if($archive->count())
    <div class="card mb-3">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg/800px-Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
        <h3 class="card-title">{{ $archive[0]->title }}</h3>
        <p class="card-text">{{ $archive[0]->excerpt }}</p>
        <a href="/archive/{{ $archive[0]->slug }}"class="tex-decoration-none btn btn-primary">Read more</a>
        </div>
    </div>  
   @else
    <p class = "tex-center fs-4">No Post Found</p>
   @endif

   @foreach ($archive->skip(1) as $arc)
   <article class = "mb-5 border-bottom pb-4" >
    <h2>
        <a href="/archive/{{ $arc->slug }}">{{ $arc->title }}</a>
    </h2>
    <p>{{ $arc->excerpt }}</p>
    <a href="/archive/{{ $arc->slug }}"class="tex-decoration-none">Read more..</a>
   </article>
   @endforeach
@endsection

