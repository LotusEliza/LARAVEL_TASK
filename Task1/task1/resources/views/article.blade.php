@extends('layout')

@section('header')
@parent
@if($articles)
<ul>
    @foreach($articles as $article)
    @if ($id == $article['id'])
    <li>Article Id: {{$article['id']}}</li>
    <li>Article Title: {{$article['title']}}</li>
    <li>Article Desc: {{$article['desc']}}</li>
    @endif
    @endforeach
</ul>
@endif
@stop

@section('footer')
@parent
Email:test@email.com
@stop