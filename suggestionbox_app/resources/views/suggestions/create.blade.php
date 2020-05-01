@extends('layouts.master')

@section('title', 'Add suggestion')

@section('content')
<h1>Add a Suggestion</h1>
<form action="{{ route('suggestions.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="content">Content:</label>
        <input type="text" name="content" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="author">Author:</label>
        <input type="text" name="author" class="form-control" required>
    </div>

    <div class="form-group">
        <input type="submit" value="Add" class="btn btn-success">
        <button type="button" onclick="location.href='{{ route('suggestions.index') }}'" class="btn btn-secondary">Back</button>
    </div>
</form>
@endsection
