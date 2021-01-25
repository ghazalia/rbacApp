@extends('admin.layout')

@section('title', '| Add User')

@section('content')
<div class='col-lg-4 col-lg-offset-4'>
    <h1><i class='fa fa-user-plus'></i> Add Permissions</h1>
    <hr>
    <form method="post" action="">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter permission name" required>
        </div>
        <div class="form-group">
            <label for="guard">Guard</label>
            <input type="text" class="form-control" name="guard_name" placeholder="Guard Name" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection