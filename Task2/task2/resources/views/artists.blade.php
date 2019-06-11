@extends('layout')

@section('header')
@parent
@if($artists)
    <h3>Artists:</h3>
    <ul>
        @foreach($artists as $artist)
        <li>
            <a href=" {{ url('/artist/'.$artist->ArtistId) }}">{{ $artist->Name }}</a>
        </li>
        @endforeach
    </ul>
@endif
@stop

@section('footer')
@parent
Email:test@email.com
@stop


