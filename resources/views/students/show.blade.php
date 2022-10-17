@extends('students.layout')
@section('content')
    <div class="card ms-5">
        <div class="card-header">
            Info Student
        </div>
        <div class="text-left mb-3">
            <a href="{{ url('student') }}" class="btn btn-primary">Back</a>
        </div>
        <div class="card-body">
            <h5 class="card-name">Name: {{ $student->fullname }}</h5>
            <p>Birthday: {{ $student->birthday }}</p>
            <p>Address: {{ $student->address }}</p>
        </div>
    </div>
@endsection
