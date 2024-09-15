@extends('layouts.app')

@section('title', 'Patient Details')

@section('content')
<div class="container mt-5">
    <h1>Patient Details</h1>

    <div class="card">
        <div class="card-header">
            {{ $patient->name }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Age: {{ $patient->age }}</h5>
            <p class="card-text">Ailment: {{ $patient->ailment }}</p>
            <p class="card-text">Doctor: {{ $patient->doctor->name }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this patient?')">Delete</button>
            </form>
            <a href="{{ route('patients.index') }}" class="btn btn-secondary">Back to Patients</a>
        </div>
    </div>
</div>
@endsection
