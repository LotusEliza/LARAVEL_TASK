@extends('layout')

@section('header')
@parent
@if($articles_list)
<ul>
    @foreach($articles_list as $title=>$url)
    <li>
        <a href="{{$url}}">{{$title}}</a>
    </li>
    @endforeach
</ul>
@endif
@stop

@section('footer')
@parent
Email:test@email.com
@stop