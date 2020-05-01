@extends('layouts.master')

@section('title', 'Suggestions Box')

@section('content')
<h1 class="text-center">List of all the Suggestions</h1>
<p class="text-center">
    <a href="{{ route('suggestions.create') }}">Add a suggestion</a>
</p>
<table class="table text-center">
    <thead>
        <tr>
            <th>ID</th>
            <th>Author</th>
            <th>Content</th>
            <th>Vote</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($collection as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->author }}</td>
            <td>{{ $item->content }}</td>
            <td>
                <span class="font-weight-bold">{{ $item->votes_count }}</span>
                <form action="{{ route('suggestions.upvote') }}" method="POST" class="d-inline-block">
                    @csrf
                    <input type="hidden" name="suggestionId" value="{{ $item->id }}">
                    <input type="submit" class="btn" value="Upvote">
                </form>
                <form action="{{ route('suggestions.downvote', ['id' => $item->id]) }}" method="POST" class="d-inline-block">
                    @method('DELETE')
                    @csrf
                    <input type="submit" class="btn btn-dark" value="Downvote" {{ $item->votes_count > 0 ?: 'disabled' }}>
                </form>
                
            </td>
            <td>
                <button type="button" onclick="location.href='{{ route('suggestions.edit', ['id' => $item->id]) }}'" class="btn btn-warning">Edit</button>
                <form action="{{ route('suggestions.delete', ['id' => $item->id]) }}" method="POST" class="d-inline-block">
                    @method('DELETE')
                    @csrf
                    <input type="submit" class="btn btn-danger" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
