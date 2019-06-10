@extends('layout')

@section('header')
@parent
@if($tracks)
    <h3>Artist: {{ $artist->Name }}</h3>
    <ul>
        @foreach($tracks as $track)
        <li>
            <a href=" {{ url('/track/'.$track->TrackId) }}">{{ $track->Name }}</a>
        </li>
        @endforeach
    </ul>
@endif
@stop

@section('footer')
@parent
Email:test@email.com
@stop
