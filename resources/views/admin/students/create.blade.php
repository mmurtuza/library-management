@extends('admin.layout')

{{-- create a view to show details of a students --}}
@section('admin-content')
    <div class="container container-fluid">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block" data-expires="500">
                <button type="button" class="close" data-bs-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger" data-expires="500">
                <button type="button" class="close" data-bs-dismiss="alert">×</button>
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row ">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 m-3">
                                <div class="panel-body">
                                    <form action="{{ route('admin.students.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        {{-- <input type="hidden" name="added-by" value="{{ Auth::user()->name }}"> --}}
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Enter Name">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="id">ID</label>
                                            <input type="text" class="form-control" name="id" id="id">
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <label for="semester">Semester</label>
                                            <input type="text" class="form-control" name="semester" id="semester"
                                                value="">
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" name="email" id="email" value="">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control" name="image" id="image">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="branch">Branch</label>
                                            <input type="text" class="form-control" name="branch" id="branch">
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <label for="department">Department</label>
                                            <input type="text" class="form-control" name="department" id="department">
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" name="address" id="address">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-save"></i>
                                                Save
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
