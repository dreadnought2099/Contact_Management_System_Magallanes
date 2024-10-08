<!-- resources/views/contacts/create.blade.php -->
@extends('layouts.layout')

@section('title', 'Create New Contact')

@section('content')
    <div class="container mt-4">
        <h1>Create New Contact</h1>

        <!-- Form to add a new contact -->
        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf

            <!-- First Name -->
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name:</label>
                <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required>
                @error('first_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Last Name -->
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name:</label>
                <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required>
                @error('last_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Phone -->
            <div class="mb-3">
                <label for="phone" class="form-label">Phone (optional):</label>
                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Address -->
            <div class="mb-3">
                <label for="address" class="form-label">Address (optional):</label>
                <textarea class="form-control" name="address">{{ old('address') }}</textarea>
                @error('address')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save Contact</button>
        </form>

        <!-- Back link to the contacts list -->
        <a href="{{ route('contacts.index') }}" class="btn btn-secondary mt-3">Back to Contact List</a>
    </div>
@endsection
