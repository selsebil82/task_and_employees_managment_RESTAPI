@extends('dashboard')

@extends('layout')
@section('content')

<h2>Edit Task</h2>
<form action="{{ route('tasks.update', ['id' => $task->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Description:</label>
        <input type="text" name="description" class="form-control" value="{{ $task->description }}">
    </div>

    <div class="form-group">
        <label>Employee ID:</label>
        <input type="number" name="employee_id" class="form-control" value="{{ $task->employee_id }}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
