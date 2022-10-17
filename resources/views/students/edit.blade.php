@extends('students.layout')
@section('content')
    <div class="card ms-5">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <form action="{{ url('student/' . $students->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $students->id }}" id="id" />
                <label>Full Name</label></br>
                <input type="text" name="fullname" id="fullname" value="{{ $students->fullname }}"
                    class="form-control"></br>
                <label>BirthDay</label></br>
                <input type="text" name="birthday" id="birthday" value="{{ $students->birthday }}"
                    class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" value="{{ $students->address }}"
                    class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@endsection
