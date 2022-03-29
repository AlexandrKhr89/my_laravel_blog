@extends('layouts.app')

@section('title-block')
    Главная страница
@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Accusantium animi aspernatur, assumenda beatae dignissimos doloremque excepturi facere id illum modi
        molestiae neque nobis non quaerat voluptatem. Facilis libero maxime optio?</p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection



