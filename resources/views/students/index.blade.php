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
@endsection