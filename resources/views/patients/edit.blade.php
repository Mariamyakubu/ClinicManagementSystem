@extends('layouts.app')

@section('title', 'Edit Patient')

@section('content')
<div class="container mt-5">
    <h1>Edit Patient</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('patients.update', $patient->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Patient Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $patient->name }}" required>
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" name="age" class="form-control" id="age" value="{{ $patient->age }}" required>
        </div>
        <div class="mb-3">
            <label for="ailment" class="form-label">Ailment</label>
            <input type="text" name="ailment" class="form-control" id="ailment" value="{{ $patient->ailment }}" required>
        </div>
        <div class="mb
