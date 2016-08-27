@section('title')
My Awesome Page
@endsection

@extends('layout')


{{-- @section('navb')
@yield('navb')
@stop --}}

@section('content')
    <h1>{{ $site_title }}</h1>
    <p>blah blah blah</p>
@stop