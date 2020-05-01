@extends('layouts.master')

@section('title', 'Books Page')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>title</th>
        <th>description</th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td>{{ $book->id }}</td>
          <td>{{ $book->title }}</td>
          <td>{{ $book->description }}</td>
        </tr>
    </tbody>
  </table>
@endsection
