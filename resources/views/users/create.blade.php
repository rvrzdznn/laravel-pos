
@extends('layouts.app')

@section('title', 'Create User')

@section('content')
    <h1>Create User</h1>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div>
            <label>Username</label>
            <input type="text" name="username"
                   value="{{ old('username') }}" required>
        </div>

        <div>
            <label>Full Name</label>
            <input type="text" name="full_name"
                   value="{{ old('full_name') }}" required>
        </div>

        <button type="submit">Save User</button>
        <a href="{{ route('users') }}">Cancel</a>
    </form>
@endsection
