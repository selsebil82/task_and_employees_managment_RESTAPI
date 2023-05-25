@extends('dashboard')

@extends('layoutemp')
@section('content')
<h2>Add New Employee</h2>
<form action="{{ route('employees.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label>First Name:</label>
        <input type="text" name="first_name" class="form-control">
    </div>

    <div class="form-group">
        <label>Last Name:</label>
        <input type="text" name="last_name" class="form-control">
    </div>

    <div class="form-group">
        <label>Address:</label>
        <input type="text" name="address" class="form-control">
    </div>

    <div class="form-group">
        <label>Account Number:</label>
        <input type="text" name="account_number" class="form-control">
    </div>

    <div class="form-group">
        <label>Grade:</label>
        <input type="text" name="grade" class="form-control">
    </div>

    <div class="form-group">
        <label>Superior ID:</label>
        <input type="number" name="superior_id" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
