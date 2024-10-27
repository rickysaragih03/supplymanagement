@extends('layouts.app')

@section('content')
    <h1>Edit Supplier</h1>
    <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $supplier->name }}" required>
        </div>
        <div class="form-group">
            <label for="contact_info">Contact Info:</label>
            <textarea name="contact_info" class="form-control">{{ $supplier->contact_info }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Supplier</button>
    </form>
@endsection
