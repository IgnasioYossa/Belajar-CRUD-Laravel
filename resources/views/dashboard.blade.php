@extends('layouts.main')

@section('container')
    <h1>Dashboard</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ url('update', $user->id) }}" class="btn btn-primary"><i class='fa fa-pencil'></i> Edit</a>
                        <a href="{{ url('delete', $user->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')"><i class='fa fa-trash'></i> Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-end">
        <a href="/create" class="btn btn-success fa"><i class="fa fa-plus"></i> Create User</a>
    </div>
@endsection
