@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is your top blog for anything and everything</p>
        <p><a class="btn btn-primary btn-lg" href="/login">Sign In</a>  <a class="btn btn-success btn-lg" href="/register" role="button">Sign Up</a></p>
    </div>
@endsection