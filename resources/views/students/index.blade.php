@extends("layouts.app")

@section('content')
    <div class="row my-3">
        <div class="col-10">
            <h1>Students</h1>
        </div>
        <div class="col-2">
            <a href="{{ route('students.create') }}" class="btn btn-primary btn-block">Add New Student</a>
        </div>
    </div>
    <div class="row col-12">
        <table class="table table-sm table-striped">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Department</th>
                <th>Mobile Number</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->department }}</td>
                        <td>{{ $student->mobile_number }}</td>
                        <td>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">
                                Edit
                            </a>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection