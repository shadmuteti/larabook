@extends('layouts.default')
@section('content')
    <div class="jumbotron">
   <h1> welcome to larabook !</h1>
        <p> sign up for laravel and see all what the fuss is all about</p>
    <p>
        {{link_to_route('register_path', 'Sign UP!',null,['class'=>'btn btn-lg btn-primary'])}}
        </p>
    </div>
@stop