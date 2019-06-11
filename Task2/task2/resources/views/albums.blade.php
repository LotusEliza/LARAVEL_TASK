@extends('layout')

@section('header')
@parent
@if($albums)
    <h3>Albums:</h3>
    <ul>
        @foreach($albums as $album)
        <li>
            <a href=" {{ url('/album/'.$album->AlbumId) }}">{{ $album->Title }}</a>
        </li>
        @endforeach
    </ul>
@endif
@stop

@section('footer')
@parent
Email:test@email.com
@stop
