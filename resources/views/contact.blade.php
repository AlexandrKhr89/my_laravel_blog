@extends('layouts.app')

@section('title-block')
    Cтраница контактов
@endsection

@section('content')
    <h1>Cтраница контактов</h1>
{{--    <form action="/contact/submit" method="post">--}}

{{--    @if($errors->any())--}}
{{--    <div class="alert alert-danger">--}}
{{--       <ul>--}}
{{--           @foreach($errors->all() as $errors)--}}
{{--               <li>{{ $errors }}</li>--}}
{{--           @endforeach--}}
{{--       </ul>--}}
{{--    </div>--}}
{{--    @endif--}}


    <form action="{{route('contact-form')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea type="message" name="message" id="message" class="form-control" placeholder="Введите сообщение" ></textarea>
        </div>

        <div class="form-group">
            <label for="status_active">status_active</label>
            <input type="text" name="status_active" placeholder="1 по умолчанию или 0" id="status_active" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection

