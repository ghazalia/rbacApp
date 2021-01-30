@extends('admin.layout')
@section('title', '| Add Permission')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Permissions Management</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('permissions.create') }}"> Create New Permission</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="row">
    <div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Guard</th>
                <th width="280px">Action</th>
            </tr>
            @foreach($permissions as $key => $permission)
            <tr>
                <td> {{++$i}}</td>
                <td> {{ $permission->name }} </td>
                <td> {{ $permission->guard_name }} </td>
                <td>
                    <a class="btn btn-primary" href="{{ route('permissions.edit',$permission->id) }}">Edit</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection