@extends('layout')

@section('content')
<h1>Sign Up</h1>
<form method="POST">
<label>Name <input type="text" name="name"> </label>
<label>Email <input type="text" name="email"> </label>
<label>Password <input type="password" name="password"> </label>
<label>Confirm password <input type="password" name="password_confirmation"> </label>
<button type="submit"> Sign Up </button>
</form>
