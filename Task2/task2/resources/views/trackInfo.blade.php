@extends('layout')

@section('header')
@parent
@if($track)
    <h3>Album: {{ $album->Title }}</h3>
    <h3>Artist: {{ $artist->Name }}</h3>
    <p>Name: {{ $track->Name }}</p>
    <p>Genre: {{ $genre->Name }}</p>
    <p>Milliseconds: {{ $track->Milliseconds }}</p>
    <p>Bytes: {{ $track->Bytes }}</p>
    <p>Unit price: {{ $track->UnitPrice }} $</p>
@endif
@stop

@section('footer')
@parent
Email:test@email.com
@stop
