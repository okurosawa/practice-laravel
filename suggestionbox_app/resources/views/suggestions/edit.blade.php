@extends('layouts.master')

@section('title', 'Edit Suggestion')

@section('content')
<h1>Editting Suggestion #{{ $data->id }}</h1>
<form action="{{ route('suggestions.update', ['id' => $data->id]) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="content">Content:</label>
        <input type="text" name="content" class="form-control" value="{{ $data->content }}" required>
    </div>

    <div class="form-group">
        <label for="author">Author:</label>
        <input type="text" name="author" class="form-control" value="{{ $data->author }}" required>
    </div>

    <div class="form-group">
        <input type="submit" value="Save" class="btn btn-success">
        <button type="button" onclick="location.href='{{ route('suggestions.index') }}'" class="btn btn-secondary">Back</button>
    </div>
</form>
@endsection
