@extends('layouts.app')

@section('title', 'Add Patient')

@section('content')
<div class="container mt-5">
    <h1>Add New Patient</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('patients.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Patient Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" required>
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" name="age" class="form-control" id="age" value="{{ old('age') }}" required>
        </div>
        <div class="mb-3">
            <label for="ailment" class="form-label">Ailment</label>
            <input type="text" name="ailment" class="form-control" id="ailment" value="{{ old('ailment') }}" required>
        </div>
        <div class="mb-3">
            <label for="doctor_id" class="form-label">Doctor</label>
            <select name="doctor_id" class="form-select" id="doctor_id" required>
                <option value="">Select Doctor</option>
                @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Patient</button>
    </form>
</div>
@endsection

