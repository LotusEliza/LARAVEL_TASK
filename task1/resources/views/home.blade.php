@extends('layout')

@section('header')
@parent
@if($urls)
<ul>
    @foreach($urls as $title=>$url)
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