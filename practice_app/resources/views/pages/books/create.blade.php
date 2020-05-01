@extends('layouts.master')

@section('title', 'Create Page')

@section('content')
<div>
    <h1>This is the Create Page where you can create a new Book</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="first_name">First Name</label>
                <input id="first_name" class="form-control" type="text" name="first_name" placeholder="First Name">
            </div>

            <div class="form-group col-lg-6">
                <label for="last_name">Last Name</label>
                <input id="last_name" class="form-control" type="text"  name="last_name" placeholder="First Name">
            </div>

            <div class="form-group col-lg-12">
                <label for="email_address">Email</label>
                <input id="email_address" class="form-control" type="email" name="email" placeholder="Email">
            </div>

            <div class="form-group col-lg-12">
                <label for="description">Description</label>
                <textarea id="description" class="form-control" name="description" rows="10"></textarea>
            </div>

            <div class="form-group col-lg-12">
                <input class="form-control btn btn-outline-primary" type="submit" value="Submit">
            </div>
        </div>
    </form>
</div>
@endsection

