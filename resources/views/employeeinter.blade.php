@extends('dashboard')

@extends('layoutemp')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
           
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('createemp') }}"> Add Employee</a>
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
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Account Number</th>
                <th>Grade</th>
                <th>Superior Id</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->first_name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->address }}</td>
                    <td>{{ $employee->account_number }}</td>
                    <td>{{ $employee->grade }}</td>
                    <td>{{ $employee->superior_id }}</td>
                    <td>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('employees.show', $employee->id) }}"><i class="fa fa-address-book"></i></a>
                            <a class="btn btn-primary" href="{{ route('employees.edit', $employee->id) }}"><i class="fa fa-pencil"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa fa-remove"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>  
@endsection
