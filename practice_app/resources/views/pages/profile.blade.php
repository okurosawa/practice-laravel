@extends('layouts.master')

@section('title', 'ProfilePage')

@section('list')
    @include('components.subject')
@endsection

@section('content')
<div class="jumbotron">
    <h1 class="display-4">My name's {{ $profile["name"] }}!</h1>
    <p class="lead">I was born in {{ $profile["birthdate"] }}</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>
@endsection

@section('sidebar')
    @include('components.sidebar')
@endsection
