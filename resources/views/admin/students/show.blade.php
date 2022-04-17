@extends('admin.layout')

{{-- create a view to show details of a students --}}
@section('admin-content')
    <div class="container container-fluid">
        <div class="col-md-4">
            <<img class="card-img-top custom-img p-3"
                src="{{ !empty($data->img_url)? asset('images/productimage/' . $data->img_url): asset('images/NoImage_Available.webp') }}"
                alt="">
        </div>
        <div class="col-md-8">
            <table class="table table-striped table-bordered table-hover">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{ $data->name }}</td>
                    </tr>
                    <tr>
                        <th>Dpartment</th>
                        <td>{{ $data->department }}</td>
                    </tr>
                    <tr>
                        <th>Semester</th>
                        <td>{{ $data->semester }}</td>
                    </tr>
                    <tr>
                        <th>ID no.</th>
                        <td>{{ $data->student_id }}</td>
                    </tr>
                    <tr>
                        <th> Branch</th>
                        <td>{{ $data->branch }}</td>
                    </tr>
                    <tr>
                        <th> Email</th>
                        <td>{{ $data->email_id }}</td>
                    </tr>
                    <tr>
                        {{-- <a href="{{ route('student.edit', $data->id) }}" class="btn btn-primary">
                            <i class="fa fa-edit"></i>
                            Edit
                        </a> --}}
                    </tr>
                </tbody>
            </table>
        </div>
        {{-- <div class="row ">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-list"></i>
                            {{ $student->name }}
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/' . $student->photo) }}" alt="{{ $student->name }}"
                                    class="img-responsive">
                            </div>
                            <div class="col-md-8">
                                <table class="table table-striped table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <th>Name</th>
                                            <td>{{ $student->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $student->email_id }}</td>
                                        </tr>
                                        <tr>
                                            <th>ID</th>
                                            <td>{{ $student->phone }}</td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td>{{ $student->address }}</td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <a href="{{ route('admin.students.edit', $student->id) }}"
                                                    class="btn btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                    Edit
                                                </a>
                                            </th>
                                            <td>
                                                <form action="{{ route('admin.students.destroy', $student->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> --}}

    </div>
    </div>
    </div>
@endsection
