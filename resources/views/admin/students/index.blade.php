@extends('admin.layout')

@section('admin-content')
    {{-- Create a Table to show all books from the database --}}
    <div class="container p-3">
        <a href="{{ route('admin.students.create') }}" class="btn btn-primary float-end">
            <i class="fas fa-plus"></i>
            Add Student
        </a>
        <livewire:student-table />

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
