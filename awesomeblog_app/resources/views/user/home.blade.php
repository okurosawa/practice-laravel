@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-5 p-4">
            @include('components.user-profile', ['user', $user])
        </div>

        <div class="col-lg-8 col-md-7 p-4">
            @include('components.micropost-form', ['user', $user])
            @include('components.micropost-list', ['user', $user])
        </div>
    </div>
</div>
@endsection

@section('css')
<style>
    .icon_container {
        width: 150px;
    }

    .micropost_content {
        white-space: pre-wrap;
    }
</style>
@endsection
