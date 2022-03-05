@extends('admin.layout')

@section('admin-content')
    {{-- Create a Table to show all books from the database --}}
    <div class="container">
        <div class="row">
            <livewire:student-table />
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
