@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>All Student</h2>
                    </div>
                    <form class="row row-cols-cols-auto g-1">
                        <div class="col">
                            <input type="text" value="{{ $q }}" name="q" class="form-control">
                        </div>
                        <div class="col">
                            <button class="btn btn-success">Search</button>
                        </div>
                    </form>
                    <div class="card-body">
                        <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm " title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>BirthDay</th>
                                    <th>Address</th>
                                    <th>Actions</th>

                                </tr>
                                <thead>
                                <tbody>
                                    @foreach ($students as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->fullname }}</td>
                                            <td>{{ $item->birthday }}</td>
                                            <td>{{ $item->address }}</td>

                                            <td>
                                                <a href="{{ url('/student/' . $item->id) }}" style="text-decoration: none;">
                                                    <button class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                            aria-hidden="true"></i>
                                                        View
                                                    </button>
                                                </a>
                                                <a href="{{ url('/student/' . $item->id . '/edit') }}"
                                                    style="text-decoration: none;">
                                                    <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                            aria-hidden="true"></i>
                                                        Edit
                                                    </button>
                                                </a>

                                                <form action="{{ '/student/' . $item->id }}" method="POST"
                                                    style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
