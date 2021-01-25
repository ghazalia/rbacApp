@extends('admin.layout')

@section('title', '| Add User')

@section('content')
<div class='col-lg-4 col-lg-offset-4'>
    <h1><i class='fa fa-user-plus'></i> Add Role</h1>
    <hr>
    <form method="post" action="">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name" required>
        </div>

        <div class="form-group form-check">
            <strong>Permission</strong>
            @foreach ($permissions as $permission)
            <input class="form-check-input" type="checkbox" value="" name="permission" value="{{$permission->id}}">
            <label class="form-check-label">{{$permission->name}}</label>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection