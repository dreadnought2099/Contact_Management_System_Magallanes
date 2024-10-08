<!-- resources/views/contacts/show.blade.php -->
@extends('layouts.layout')

@section('title', $contact->first_name . ' ' . $contact->last_name)

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">{{ $contact->first_name }} {{ $contact->last_name }}</h1>
                <p class="card-text"><strong>Email:</strong> {{ $contact->email }}</p>
                <p class="card-text"><strong>Phone:</strong> {{ $contact->phone }}</p>
                <p class="card-text"><strong>Address:</strong> {{ $contact->address }}</p>
                <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back to Contact List</a>
            </div>
        </div>
    </div>
@endsection
