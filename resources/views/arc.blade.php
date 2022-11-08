

@extends('layouts.main')

@section('container')
    <h1 class="mb-5"> {{ $arc->title }}</h1>

    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg/800px-Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg" 
    alt="" class="img-fluid">
    <article class="my-3 fs-4">
        {!! $arc->body !!}
    </article>
    <a href="/archive">Back to Archive</a>
@endsection