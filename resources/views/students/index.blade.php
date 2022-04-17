@extends('students.layouts.app')

@section('content')
    @include('students.layouts.sticky-menu')
    <div class="container">

        <div class="row mt-5">
            <div class="col-md-3 mr-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Total Books</h4>
                    </div>
                    <div class="card-body">
                        <h1>
                            3
                        </h1>
                    </div>
                </div>

            </div>
            <div class="col-md-3 mr-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Total Books</h4>
                    </div>
                    <div class="card-body">
                        <h1>
                            3
                        </h1>
                    </div>
                </div>

            </div>
            <div class="col-md-3 mr-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Total Books</h4>
                    </div>
                    <div class="card-body">
                        <h1>
                            3
                        </h1>
                    </div>
                </div>

            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Issued Books</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="mr-2">Book Name</th>
                                    <th class="mr-2">Author</th>
                                    <th class="mr-2">Issue Date</th>
                                    <th class="mr-2">Return Date</th>
                                    <th class="mr-2">Re-issue</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_of_books as $books)
                                    <tr>
                                        <td class="mr-2">{{ $books->title }}</td>
                                        <td class="mr-2">{{ $books->author }}</td>
                                        <td class="mr-2">{{ $books->issue_date }}</td>
                                        <td class="mr-2">{{ $books->return_date }}</td>
                                        <td class="p-2">
                                            <a href="{{ route('students.reissue', $books->id) }}"
                                                class="btn btn-primary">Re-issue</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endsection
