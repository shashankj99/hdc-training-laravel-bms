@extends("layouts.app")

@section('content')
    <div class="row col-12 my-3">
        <div class="card">
            <div class="card-header">
                <h3>Add Student Record</h3>
            </div>

            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Enter Full Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Enter Address</label>
                        <input type="text" name="address" id="address" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="department" class="form-label">Select Department</label>
                        <select name="department" id="department" class="form-control">
                            <option value="bca">BCA</option>
                            <option value="csit">BSc. CSIT</option>
                            <option value="bbs">BBS</option>
                            <option value="bim">BIM</option>
                            <option value="bhm">BHM</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="mobile_number" class="form-label">Enter Mobile Number</label>
                        <input type="text" name="mobile_number" id="mobile_number" class="form-control">
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row col-12">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection