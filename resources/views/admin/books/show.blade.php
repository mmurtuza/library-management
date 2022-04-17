@extends('admin.layout')

{{-- create a view to show details of a book --}}
@section('admin-content')
    <div class="container container-fluid">
        <div class="row ">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-list"></i>
                            {{ $book->title }}
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img class="card-img-top custom-img p-3"
                                    src="{{ !empty($book->img_url)? asset('images/productimage/' . $book->img_url): asset('images/NoImage_Available.webp') }}"
                                    alt="{{ $book->title }}">
                                {{-- <img src="{{ asset('images/productimage/' . $book->img_url) }}" alt="{{ $book->title }}"
                                    class="img-responsive"> --}}
                            </div>
                            <div class="col-md-8">
                                <table class="table table-striped table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <th>Title</th>
                                            <td>{{ $book->title }}</td>
                                        </tr>
                                        <tr>
                                            <th>Author</th>
                                            <td>{{ $book->author }}</td>
                                        </tr>
                                        <tr>
                                            <th>Category</th>
                                            <td>{{ $categories->name }}</td>
                                        </tr>
                                        {{-- <tr>
                                            <th>Stock</th>
                                            <td>{{ $book->stock }}</td>
                                        </tr> --}}
                                        <tr>
                                            <th>Description</th>
                                            <td>{{ $book->description }}</td>
                                        </tr>
                                        <th>
                                            <a href="{{ route('admin.books.edit', $book->id) }}" class="btn btn-primary">
                                                <i class="fa fa-edit"></i>
                                                Edit
                                            </a>
                                        </th>
                                        <td>
                                            <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
