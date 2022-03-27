@extends('admin.layout')

@section('admin-content')
    {{-- Create a Table to show all books from the database --}}
    <div class="container p-3">
        <a href="{{ url('/admin/issue/create') }}" class="btn btn-primary float-end text-white">
            <i class="fas fa-plus"></i>
            Issue Book
        </a>


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
