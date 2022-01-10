@extends('admin.layout')

@section('admin-content')
    {{-- Create a Table to show all books from the database --}}
    <div class="container container-fluid">
        <div class="row ">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-list"></i>
                            Settings
                        </h3>
                    </div>
                    <div class="panel-body">
                        //create a form to add books category
                        <form action="{{ route('setting.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="book-category">Book Category</label>
                                <input type="text" name="name" class="form-control" id="book-category"
                                    placeholder="Enter a new Category">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Add Category">
                        </form>
                    </div>

            </div @endsection
