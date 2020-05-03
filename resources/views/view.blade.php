@extends('admin.layout.app')

@section('contact')

    <a href="/admin" class="btn btn-secondary mt-2 mb-2">Go Back</a>
    <h1> NAME: {{ $user->name }}</h1>

    <div class="badge bade-danger"><h1> EMAIL:{{ $user->email }}</h1></div>
    <hr>
    <h3>PASSWORD: {{ $user->password }}</h3>
    <form method="post" action="/admin/{{ $user->id }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mt-2 float-right" >Delete </button>
    </form>
    <a href="/admin/{{ $user->id }}/edit" class="btn btn-primary mt-2">Edit</a>

@endsection
