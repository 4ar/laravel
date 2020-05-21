@extends('layouts/main')
@section('content')

<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="feedback">
  <div class="w-100">
    <h2 class="mb-5">Order form for receiving data upload</h2>
    <form action="{{route('SendOrder') }}" method="POST">
      @csrf
      <input name="name" value="{{ old('name') }}"  placeholder="Ваше имя"><br>
      <input type="tel" name="tel" value="{{ old('tel') }}"  placeholder="Номер телефона"><br>
      <input type="email" name="email" value="{{ old('email') }}"  placeholder="Email"><br>
      <textarea name="info" placeholder="Информация">{{ old('info') }}</textarea><br>
      <button type="submit">Отправить</button>
    </form>
    
  </div>
  


</section>
  <hr class="m-0">
@endsection