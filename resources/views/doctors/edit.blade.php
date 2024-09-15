@extends('layouts.app')

@section('title', 'Edit Doctor')

@section('content')
<div class="container mt-5">
    <h1>Edit Doctor</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Doctor Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $doctor->name }}" required>
        </div>
        <div class="mb-3">
            <label for="specialization" class="form-label">Specialization</label>
            <input type="text" name="specialization" class="form-control" id="specialization" value="{{ $doctor->specialization }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ $doctor->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Doctor</button>
    </form>
</div>
@endsection
