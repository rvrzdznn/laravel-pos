@extends('layouts.app')

@section('title', 'User Accounts')

@section('content')
    <h1>User Accounts</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('users.create') }}">
        <button type="button">+ Add User</button>
    </a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Avatar</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>

                    <td>
                        <img
                            src="{{ $user->avatar
                                ? asset('storage/' . $user->avatar)
                                : asset('images/avatar-placeholder.png') }}"
                            alt="User Avatar"
                            width="50"
                            height="50"
                            style="object-fit: cover; border-radius: 50%;">
                    </td>

                    <td>{{ $user->username }}</td>
                    <td>{{ $user->full_name }}</td>

                    <td>
                        <a href="{{ route('users.edit', $user->id) }}">
                            Edit
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
