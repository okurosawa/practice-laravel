@extends('layouts.app')

@section('content')
<div class="container shadow bg-white p-4">
    <h1 class="display-5 mb-4">All Members</h1>
    @include('components.user-follows', ['users' => $users])
</div>
@endsection

