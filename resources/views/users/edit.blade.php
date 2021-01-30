@extends('admin.layout')

@section('title', '| Add User')

@section('content')
<div class='col-lg-4 col-lg-offset-4'>
    <h1><i class='fa fa-user-plus'></i> Add User</h1>
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

    <form method="post" action="{{route('users.store')}}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="User Email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="User Password" required>
        </div>
        <div class="form-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" class="form-control" name="confirm-password" placeholder="Retype your password" required>
        </div>

        <div class="form-group form-check">
            <p><strong>Role<strong></p>
            @foreach ($roles as $role)
            <input class="form-check-input" type="checkbox" name="roles[]" value="{{ $role }}">
            <label class="form-check-label">{{ $role }}</label>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection