@extends('layouts.app')

@section('title-block'){{$data->subject}}
{{--    Главная страница--}}
@endsection

@section('content')
    <h1>{{$data->subject}}</h1>
        <div class="alert alert-info">
            <p>{{$data->message}}</p>
            <p>{{$data->email}} - {{$data->name}}</p>
            <p>Статус активации - {{$data->status_active}}</p>
            <p><small>{{$data->created_at}}</small></p>
{{--            <a href="#"><button class="btn btn-warning">Детальнее</button> </a>--}}
            <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-primary">Редактировать</button> </a>
            <a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-danger">Удалить</button> </a>
        </div>
@endsection




