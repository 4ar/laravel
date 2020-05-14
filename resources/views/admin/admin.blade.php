@include('header')
<h1>{{$hello}}</h1>
<div style="margin: 10px">
        <form method="post" action="{{ route('add') }}">
        @csrf 
        <label for="title" >Название</label><br>
        <input id=title type="text" name="title"><br>
        <label for="shortnews" >Кратное описание</label><br>
        <input id=shortnews type="text" name="title"><br>
        <label for="fullnews" >Полное описание</label><br>
        <textarea id=fullnews name="fullnews">
        </textarea><br>
        <button type submit>OK</button>
        </form>
</div>