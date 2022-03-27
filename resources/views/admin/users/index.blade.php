@extends('admin.layout')

{{-- create a view to show list of a users --}}
@section('admin-content')
    <div class="container container-fluid">
        <div class="row ">
            <a href="{{ route('products-services.create') }}" class="btn btn-primary float-end">
                <i class="fas fa-plus"></i>
                Add User
            </a>
            <livewire:users-table />
        </div>
    </div>
@endsection
