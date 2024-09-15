@extends('layouts.app')

@section('title', 'Patients')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Patients</h1>
    <a href="{{ route('patients.create') }}" class="btn btn-primary mb-3">Add New Patient</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Ailment</th>
                <th>Doctor</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($patients as $patient)
                <tr>
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->age }}</td>
                    <td>{{ $patient->ailment }}</td>
                    <td>{{ $patient->doctor->name }}</td>
                    <td>
                        <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this patient?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

