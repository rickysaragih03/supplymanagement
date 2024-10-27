@extends('layouts.app')

@section('content')
    <h1>{{ $supplier->name }}</h1>
    <p>Contact Info: {{ $supplier->contact_info }}</p>
    <a href="{{ route('suppliers.index') }}" class="btn btn-secondary">Back</a>
@endsection
