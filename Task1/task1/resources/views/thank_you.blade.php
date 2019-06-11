@extends('layout')

@section('header')
@parent
<h2>Thank you {{$name}}</h2>
@stop

@section('footer')
@parent
Email:test@email.com
@stop