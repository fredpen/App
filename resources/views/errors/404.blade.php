@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')

@section('message')
    Page not found
    go <a href=" {{route('users.index') }} ">here</a>
@endsection
