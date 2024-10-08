<!-- resources/views/contacts/index.blade.php -->
@extends('layouts.layout')

@section('title', 'Contact List')

@section('content')
    <h1>Contact List</h1>
    <ul class="list-group">
        @foreach($contacts as $contact)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span title="View details">
                    <a href="{{ route('contacts.show', $contact->id) }}">{{ $contact->first_name }} {{ $contact->last_name }}</a>
                </span>
                <span>
                    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </span>
            </li>
        @endforeach
    </ul>
@endsection
