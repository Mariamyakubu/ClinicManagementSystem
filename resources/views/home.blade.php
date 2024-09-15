@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
<div class="container mt-5">
    <div class="jumbotron bg-light text-center p-5 rounded shadow">
        <h1 class="display-4 text-primary">Welcome to the Clinic Management System!</h1>
        <p class="lead text-secondary mt-3">Manage doctors, patients, and appointments with ease.</p>
        <hr class="my-4">
        <p class="text-muted">Get started by exploring the options below:</p>
        <div class="mt-4">
            <a class="btn btn-primary btn-lg me-2" href="{{ route('doctors.index') }}" role="button">View Doctors</a>
            <a class="btn btn-primary btn-lg me-2" href="{{ route('patients.index') }}" role="button">View Patients</a>

        </div>
    </div>
</div>
@endsection
