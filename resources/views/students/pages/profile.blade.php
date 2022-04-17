@extends('students.layouts.app')

@section('content')
    @include('students.layouts.sticky-menu')
    <div class="container">

        <div class="row mt-5">

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
                            <a href="{{ route('admin.books.edit', $book->id) }}" class="btn btn-primary">
                                <i class="fa fa-edit"></i>
                                Edit
                            </a>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
