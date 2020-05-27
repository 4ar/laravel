@extends('layouts/main')
@section('content')
    <section class="resume-section p-3 p-lg-5 align-items-center">

        @forelse($news as $item)
            <h2>{{$item->title}}</h2>
            <p>{{$item->inform}}</p>

            @if(!$item->is_private)
                <a href="{{ route('oneNews', $item->id) }}"> Подробнее.. </a>

            @endif

        @empty
                <p>Нет новостей</p>
        @endforelse


    </section>
    <hr class="m-0">
@endsection
