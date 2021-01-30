@extends('admin.layout')

@section('title', '| Edit Permission')

@section('content')
<div class='col-lg-4 col-lg-offset-4'>
    <h1><i class='fa fa-user-plus'></i> Edit Permissions</h1>
    <hr>

    <form method="post" action="{{ route('permissions.update', $permission->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>

            <input 
                type="text" 
                class="form-control @error('name') border border-danger @enderror" 
                name="name" 
                value="{{ $permission->name }}" 
                required>

            @error('name')
            <div class="alert alert-danger" role="alert">
                {{ $errors->first('name') }}
            </div>
            @enderror

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection