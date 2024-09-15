@extends('layouts.app')

@section('title', 'Doctor Details')

@section('content')
<div class="container mt-5">
    <h1>Doctor Details</h1>

    <div class="card">
        <div class="card-header">
            {{ $doctor->name }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Specialization: {{ $doctor->specialization }}</h5>
            <p class="card-text">Email: {{ $doctor->email }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this doctor?')">Delete</button>
            </form>
            <a href="{{ route('doctors.index') }}" class="btn btn-secondary">Back to Doctors</a>
        </div>
    </div>
</div>
@endsection
