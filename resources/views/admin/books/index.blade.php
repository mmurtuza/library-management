@extends('admin.layout')

@section('admin-content')
    {{-- Create a Table to show all books from the database --}}
    <div class="container container-fluid">
        <div class="row ">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-list"></i>
                            All Books
                        </h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th>Stock</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                        <td>{{ $book->book_id }}</td>
                                        <td>{{ $book->title }}</td>
                                        <td>{{ $book->author }}</td>
                                        <td>{{ $book->category_id }}</td>
                                        <td>{{ $book->stock }}</td>
                                        <td>
                                            <a href="{{ route('admin.books.edit', $book->book_id) }}"
                                                class="btn btn-xs btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ route('admin.books.delete', $book->book_id) }}"
                                                class="btn btn-xs btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
