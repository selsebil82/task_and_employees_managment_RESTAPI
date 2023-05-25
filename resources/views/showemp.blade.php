@extends('dashboard')

@extends('layoutemp')

@section('content')
	<br>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12 margin-tb">
                <h2 class="text-center mb-5">Employee Details</h2>
            </div>
        </div>

    <div class="row">
        <div class="col-md-8 offset-md-2 table-responsive">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>First Name</th>
                    <td>{{$employee->first_name}}</td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td>{{$employee->last_name}}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{$employee->address}}</td>
                </tr>
                <tr>
                    <th>Account Number</th>
                    <td>{{$employee->account_number}}</td>
                </tr>
                <tr>
                    <th>Grade</th>
                    <td>{{$employee->grade}}</td>
                </tr>
                <tr>
                    <th>Superior Id</th>
                    <td>{{$employee->superior_id}}</td>
                </tr>
            </table>

            <div class="text-center">
                <a class="btn btn-primary mt-3" href="{{ route('employees.index') }}" >Back</a>
            </div>
        </div>
    </div>
@endsection



