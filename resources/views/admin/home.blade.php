@extends('admin.layout')

@section('admin-content')
    {{-- Create a Table to show all books from the database --}}
    <div class="container">
        {{-- <div class="row ">
            <div class="col-md-10">
                <div class="continer mt-4 d-flex justify-content-evenly">
                    <div class="card shadow-lg m-4 p-4">
                        <h3> Due Date Approching</h3>
                        <h1>100</h1>
                    </div>
                    <div class="card shadow-lg m-4" style="height: 100px; width:100px; "></div>
                    <div class="card shadow-lg m-4" style="height: 100px; width:100px; "></div>

                </div>
            </div> --}}

    </div>
    <div class="row mt-3">
        <livewire:name />
    </div>
    </div>
@endsection

@section('head')
    @livewireStyles
    @powerGridStyles
@endsection

@section('script')
    @livewireScripts
    @powerGridScripts
@endsection
