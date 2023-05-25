@extends('dashboard')

@extends('layoutemp')
@section('content')
<h2>Edit Employee</h2>
<form action="{{ route('employees.update', ['id' => $employee->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>First Name:</label>
        <input type="text" name="first_name" class="form-control" value="{{ $employee->first_name }}">
    </div>

    <div class="form-group">
        <label>Last Name:</label>
        <input type="text" name="last_name" class="form-control" value="{{ $employee->last_name }}">
    </div>
    
    <div class="form-group">
        <label>Address:</label>
        <input type="text" name="address" class="form-control" value="{{ $employee->address }}">
    </div>
    
    <div class="form-group">
        <label>Account Number:</label>
        <input type="text" name="account_number" class="form-control" value="{{ $employee->account_number }}">
    </div>
    
    <div class="form-group">
        <label>Grade:</label>
        <input type="text" name="grade" class="form-control" value="{{ $employee->grade }}">
    </div>

    <div class="form-group">
        <label>Superior Id:</label>
        <input type="number" name="superior_id" class="form-control" value="{{ $employee->superior_id }}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
