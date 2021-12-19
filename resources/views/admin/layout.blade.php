@extends('layouts.app')

@section('content')

    <div class='row' style="height:100vh">
        <div class='col-3 fixed-top' style="padding:0;">
            @include('layouts.left-navigation')
        </div>
        <div class='col-3'>

        </div>
        <div class=' col '>

            <div class=' row sticky-top'>
                @include('admin.topNav')
            </div>
            <div class='row '>
                @yield('admin-content')

            </div>
        </div>
    </div>

@endsection
