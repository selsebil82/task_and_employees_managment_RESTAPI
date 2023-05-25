@extends('dashboard')

@extends('layout')
@section('content')
<h2>Add New Task</h2>
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label>Description:</label>
        <input type="text" name="description" class="form-control">
    </div>

    <div class="form-group">
        <label>Employee ID:</label>
        <input type="number" name="employee_id" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
