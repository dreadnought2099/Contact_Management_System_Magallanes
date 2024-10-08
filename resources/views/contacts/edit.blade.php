<!-- resources/views/contacts/edit.blade.php -->
@extends('layouts.layout')

@section('title', 'Edit Contact')

@section('content')
    <div class="container mt-4">
        <h1>Edit Contact</h1>

        <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- First Name -->
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name:</label>
                <input type="text" class="form-control" name="first_name" value="{{ $contact->first_name }}" required>
            </div>

            <!-- Last Name -->
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name:</label>
                <input type="text" class="form-control" name="last_name" value="{{ $contact->last_name }}" required>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" value="{{ $contact->email }}" required>
            </div>

            <!-- Phone -->
            <div class="mb-3">
                <label for="phone" class="form-label">Phone:</label>
                <input type="text" class="form-control" name="phone" value="{{ $contact->phone }}">
            </div>

            <!-- Address -->
            <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <textarea class="form-control" name="address">{{ $contact->address }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update Contact</button>
        </form>

        <a href="{{ route('contacts.index') }}" class="btn btn-secondary mt-3">Back to Contact List</a>
    </div>
@endsection
