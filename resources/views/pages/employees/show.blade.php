@extends('bondsteintaskpackage::layouts.app')

@section('title', 'View Employee')

@section('content')
    <div class="d-flex justify-content-between">
        <h1 class="mb-4">Employee Details</h1>
        <div>
            <a href="{{ route('employees.index') }}" class="btn btn-primary btn-sm">Back to List</a>
        </div>
    </div>
    @if ($errors)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $employee->name }}</h5>
            <p class="card-text">Job Title: {{ $employee->job_title }}</p>
            <p class="card-text">Phone: {{ $employee->phone }}</p>
            <p class="card-text">Address: {{ $employee->address }}</p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
            Delete
        </button>
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this employee details?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
