@extends('layouts.app')

@section('content')
    <div class='row' style="height:100vh">
        <div class='col-2 fixed-top' style="padding:0;">
            @include('layouts.left-navigation')
        </div>
        <div class='col-2'>

        </div>
        <div class=' col-10'>

            <div class=' row sticky-top'>
                @include('admin.topNav')
            </div>
            <div class='row '>
                @yield('admin-content')

            </div>
        </div>
    </div>
@endsection
