@extends('layouts.app')

@section('content')
    @include('public.sticky-menu')
    <section id="search-area">

        <div class="container container-fluid">
            <div class="row my-5">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row mb-3">
                                <form class="d-flex" action="{{ route('search-books') }}" method="POST">
                                    @csrf
                                    <input type="text" class="form-control" placeholder="Search by title or auther"
                                        name="search">
                                    <span style="width: 5px;"></span>
                                    <button type="submit" class="btn btn-primary">Search</button>

                                </form>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="card-body">
                                @if (!empty($list_of_books))
                                    <div class="row recent-books">
                                        @foreach ($list_of_books as $book)
                                            <div class="col-md-2 auto-h">
                                                <div class="card mt-3">
                                                    <img class="card-img-top custom-img"
                                                        src="{{ !empty($book->img_url) ? url('images/' . $book->img_url) : url('images/NoImage_Available.webp') }}"
                                                        alt="{{ $book->title }}">
                                                    <div class="card-body">
                                                        <p class="card-title fw-bold">{{ $book->title }}</p>
                                                        <p class="card-text">{{ $book->author }}</p>
                                                        <a href="{{ route('book', $book->id) }}"
                                                            class="btn btn-primary">View</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <h4>No books found</h4>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('public.footer')
@endsection

@section('script')
@endsection

@section('head')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.jqueryui.min.css"
        integrity="sha512-x2AeaPQ8YOMtmWeicVYULhggwMf73vuodGL7GwzRyrPDjOUSABKU7Rw9c3WNFRua9/BvX/ED1IK3VTSsISF6TQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script async src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"
        integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <style>
        #search-area {
            min-height: 90vh;
        }

    </style>
@endsection
