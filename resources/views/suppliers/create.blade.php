@extends('layouts.app')

@section('content')
    <h1>Add New Supplier</h1>
    <form action="{{ route('suppliers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="contact_info">Contact Info:</label>
            <textarea name="contact_info" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Add Supplier</button>
    </form>
@endsection
