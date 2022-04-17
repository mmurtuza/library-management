@extends('layouts.app')

@section('content')
    <div class='row' style="height:100vh">
        {{-- <div class='col-2 fixed-top' style="padding:0;">
            @include('layouts.left-navigation')
        </div> --}}

        <div class=' col-12'>
            @include('students.layouts.sticky-menu')

            <div class='row '>
                @yield('content')

            </div>
        </div>
    </div>
@endsection

@section('head')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection
