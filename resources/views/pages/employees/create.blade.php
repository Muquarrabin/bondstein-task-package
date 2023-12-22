@extends('bondsteintaskpackage::layouts.app')

@section('title', 'Add Employee')

@section('content')
    <div class="d-flex justify-content-between">
        <h1 class="mb-4">Add Employee</h1>
        <div>
            <a href="{{ route('employees.index') }}" class="btn btn-primary btn-sm">Back to List</a>
        </div>

    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label for="job_title" class="form-label">Job Title</label>
            <input type="text" name="job_title" id="job_title" class="form-control" value="{{ old('job_title') }}" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea name="address" id="address" class="form-control" >{{ old('address') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Add Employee</button>
    </form>
@endsection
