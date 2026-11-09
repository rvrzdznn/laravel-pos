@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
    <h1>Edit User</h1>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.update', $user->id) }}"
          method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label>Username</label>
            <input type="text" name="username"
                   value="{{ old('username', $user->username) }}" required>
        </div>

        <div>
            <label>Full Name</label>
            <input type="text" name="full_name"
                   value="{{ old('full_name', $user->full_name) }}" required>
        </div>

        <div>
            <label>Profile Picture</label>
            <input type="file" name="avatar" accept="image/*">
        </div>

        @if ($user->avatar)
            <div>
                <p>Current Profile Picture:</p>
                <img src="{{ asset('storage/' . $user->avatar) }}"
                     width="120" height="120"
                     style="object-fit: cover; border-radius: 50%;">
            </div>
        @endif

        <button type="submit">Update User</button>
        <a href="{{ route('users') }}">Cancel</a>
    </form>
@endsection
