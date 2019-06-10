@extends('layout')

@section('content')
<form method="POST" action="/submit" >
    @csrf
    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name"><br/>
    </div>
    <div class="form-group">
    <label for="message">Message</label>
    <input type="text" name="message">
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
</form>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@stop