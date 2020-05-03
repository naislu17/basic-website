@extends('admin.layout.app')

@section('contact')
    <h1>Edit USER</h1>
    <form method="POST" action="/admin/{{ $user->id }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control"  name="name" id="name"  placeholder="Enter name" value="{{ $user->name}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email"  name="email" placeholder="Enter email" value="{{ $user->email }}">
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="text" class="form-control" id="password" name="password" placeholder="Enter password" value="{{ $user->password }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
