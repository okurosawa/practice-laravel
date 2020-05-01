@php
 
for ($i = 0; $i < 20; $i++) {
    $data[] = [
        "title" => "tomato",
        "description" => "Let's tomato party!"
    ];
}

@endphp

@extends('layouts.master')

@section('title', 'HomePage')

@section('list')
    @include('components.category')
@endsection

@section('content')
<div class="row">
    @foreach ($data as $item)
    <div class="col-xl-6 col-lg-6 col-sm-12 p-2">
        <div class="card">
            <img class="card-img-top" src="https://lecoledefrancais.net/wp-content/uploads/2019/10/rouge-comme-une-tomate.png" alt="tomate">
            <div class="card-body">
            <h4 class="card-title">{{ $item["title"] }}</h4>
            <p class="card-text">{{ $item["description"] }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

@section('sidebar')
    @include('components.sidebar')
@endsection
