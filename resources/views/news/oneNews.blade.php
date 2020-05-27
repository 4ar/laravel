@extends('/layouts/main')

@section('title')

    {{ $news->title }}

@endsection

@section('content')
    <section class="resume-section p-3 p-lg-5 align-items-center">

        <h1>{{ $news->title }}</h1>
        <p>{{ $news->inform }}</p>


    </section>
    <hr class="m-0">
@endsection
