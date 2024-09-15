@extends('layouts.app')

@section('title', 'Doctors')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Doctors</h1>
    <a href="{{ route('doctors.create') }}" class="btn btn-primary mb-3">Add New Doctor</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Specialization</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->specialization }}</td>
                    <td>{{ $doctor->email }}</td>
                    <td>
                        <a href="{{ route('doctors.show', $doctor->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this doctor?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

