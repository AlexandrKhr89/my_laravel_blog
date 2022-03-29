@extends('layouts.app')

@section('title-block')
    Главная страница
@endsection

@section('content')
    <h1>Все сообщения</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{$el->subject}}</h3>
            <p>{{$el->email}}</p>
            <p>{{$el->status_active}}</p>
            <p><small>{{$el->created_at}}</small></p>
{{--            <a href="#"><button class="btn btn-warning">Детальнее</button> </a>--}}
            <a href="{{ route('contact-data-one', $el->id) }}"><button class="btn btn-warning">Детальнее</button> </a>
        </div>
    @endforeach
@endsection




