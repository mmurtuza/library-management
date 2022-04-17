@extends('admin.layout')

@section('admin-content')
    {{-- Create a Table to show all books from the database --}}
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
                                    <form action="{{ route('admin.issuestore') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        {{-- <input type="hidden" name="added-by" value="{{ Auth::user()->name }}"> --}}

                                        <div class="form-group">
                                            <label for="s_id">Student ID</label>
                                            <input type="text" class="form-control" name="s_id" id="s_id">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="book_id">Book ID</label>
                                            <input type="text" class="form-control" name="book_id">
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

@section('head')
    @livewireStyles
    @powerGridStyles
@endsection

@section('script')
    @livewireScripts
    @powerGridScripts
@endsection
