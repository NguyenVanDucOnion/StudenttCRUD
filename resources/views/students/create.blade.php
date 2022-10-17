@extends('students.layout')
@section('content')
    <div class="card mt-5">
        <div class="card-header">
            New Student
        </div>
        <div class="card-body">
            <form action="{{ url('student') }}" method="post">
                {!! csrf_field() !!}
                <label>Name</label></br>
                <input type="text" name="fullname" id="fullname" class="form-control"><br>

                <label>BirthDay</label><br>
                <input type="text" name="birthday" id="birthday" class="form-control"><br>

                <label>Address</label><br>
                <input type="text" name="address" id="address" class="form-control"><br>

                <input type="submit" value="Save" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection
