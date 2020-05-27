@extends('layouts/main')
@section('content')

<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="feedback">
  <div class="w-100">
    <h2 class="mb-5">FEEDBACK</h2>
    <form action="{{route('SendFeedback') }}" method="POST">
      @csrf
      <input name="name" value="{{ old('name') }}"  placeholder="Ваше имя"><br>
      <textarea name="comment" placeholder="Ваши пожелания?"></textarea><br>
      <button type="submit">Отправить</button>
    </form>
    
  </div>
  

</section>
  <hr class="m-0">
@endsection