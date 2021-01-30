@extends('admin.layout')

@section('title', '| Add User')

@section('content')
<div class='col-lg-4 col-lg-offset-4'>
    <h1><i class='fa fa-user-plus'></i> Add Permissions</h1>
    <hr>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Error!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="post" action="{{ route('permissions.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter permission name" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection