@extends('layouts.app')

@section('content')
    @include('public.sticky-menu')

    @include('public.mainCarousel')

    <div class="container">
        <div class="row m-5">

            <form class="d-flex" action="{{ route('search-books') }}" method="POST">
                @csrf
                <input type="text" class="form-control" placeholder="Search by title or auther" name="search">
                <button type="submit" class="btn btn-primary">Search</button>

            </form>
        </div>

        <div class="row mt-5">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Latest Books</h4>
                    </div>


                    <div class="card-body">
                        @if (!empty($list_of_books))
                            <div class="row recent-books">
                                @foreach ($list_of_books as $book)
                                    <div class="col-md-2 auto-h">
                                        <div class="card mt-3">
                                            <img class="card-img-top custom-img"
                                                src="{{ !empty($book->img_url)? asset('images/productimage' . $book->img_url): asset('images/NoImage_Available.webp') }}"
                                                alt="{{ $book->title }}">
                                            <div class="card-body">
                                                <p class="card-title fw-bold">{{ $book->title }}</p>
                                                <p class="card-text">{{ $book->author }}</p>
                                                <a href="{{ route('book', $book->id) }}" class="btn btn-primary">View</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p>No books found</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            @include('public.contuct-us')
        </div>
    </div>
    </div>
    </div>

    @include('public.footer')

@endsection
