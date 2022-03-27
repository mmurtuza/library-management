@extends('layouts.app')

{{-- create a view to show details of a book --}}
@section('content')
    @include('public.sticky-menu')
    <div class="container container-fluid">
        <div class="row ">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            {{ $book->title }}
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ !empty($book->img_url) ? asset('images/' . $book->img_url) : asset('images/NoImage_Available.webp') }}"
                                    alt="{{ $book->title }}" class="img-responsive" style="height: auto; width: 10rem;">
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
                                            <td>{{ $book->category_name }}</td>
                                        </tr>
                                        {{-- <tr>
                                            <th>Stock</th>
                                            <td>{{ $book->stock }}</td>
                                        </tr> --}}
                                        <tr>
                                            <th>Description</th>
                                            <td>{{ $book->description }}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('public.footer')
@endsection
