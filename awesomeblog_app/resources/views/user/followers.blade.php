@extends('layouts.app')

@section('content')
<div class="container shadow bg-white p-4">
    <h1 class="display-5 mb-4">{{ $user->first_name }}'s Followers</h1>
    @include('components.user-follows', ['users' => $users])
</div>
@endsection

