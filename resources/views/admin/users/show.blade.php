@extends('admin.layout')

{{-- create a view to show details of a user --}}
@section('admin-content')
    <div class="container container-fluid">
        <div class="row ">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-list"></i>
                            {{ $user->name }}
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/' . $user->avatar) }}" alt="{{ $user->name }}"
                                    class="img-responsive">
                            </div>
                            <div class="col-md-8">
                                <table class="table table-striped table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <th>Name</th>
                                            <td>{{ $user->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Role</th>
                                            <td>{{ $user->role->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>{{ $user->status }}</td>
                                        </tr>
                                        <tr>
                                            <th>Created At</th>
                                            <td>{{ $user->created_at }}</td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <a href="{{ route('admin.users.edit', $student->id) }}"
                                                    class="btn btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                    Edit
                                                </a>
                                            </th>
                                            <td>
                                                <form action="{{ route('admin.users.destroy', $student->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
