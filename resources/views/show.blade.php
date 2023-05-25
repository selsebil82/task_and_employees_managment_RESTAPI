@extends('dashboard')

@extends('layout')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12 margin-tb">
                <h2 class="text-center mb-5">Task Details</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 offset-md-2 table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Description</th>
                        <td>{{ $task->description }}</td>
                    </tr>
                    <tr>
                        <th>Employee ID</th>
                        <td>{{ $task->employee_id }}</td>
                    </tr>
                </table>

                <div class="text-center">
    <a class="btn btn-primary mt-3" href="{{ route('tasks.index') }}">Back</a>
</div>

            </div>
        </div>
    </div>

   
@endsection
