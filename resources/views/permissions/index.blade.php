@extends('admin.layout')
@section('title', '| Add User')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class='col-lg-4 col-lg-offset-4'>
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
            <a class="btn btn-primary" href="{{ route('permissions.edit',$permission->id) }}">Edit</a>
            <a class="btn btn-danger" href="{{ route('permission.delete',$permission->id) }}">Delete</a>
        </tr>
    </table>
    @endforeach
</div>
@endsection