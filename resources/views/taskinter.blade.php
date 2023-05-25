@extends('dashboard') 

@extends('layout') 
@section('content')
    <br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">                
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('create') }}"> Add Task</a>
            </div>
        </div>
    </div>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif   
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Description</th>
            <th>Employee Id</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($tasks as $task)
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->description }}</td>
            <td>{{ $task->employee_id}}</td>
            <td>
                <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('tasks.show', $task->id) }}"><span class="fa fa-address-book"></span></a>
                    <a class="btn btn-primary" href="{{ route('tasks.edit', $task->id) }}"><i class="fa fa-pencil"></i></a>
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger"><span class="fa fa-remove"></span></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
@endsection
