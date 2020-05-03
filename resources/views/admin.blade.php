@extends('admin.layout.app')

@section('contact')
    <h1>ADMIN </h1>

    @foreach($users as $user)
        <div class="card m-2">
            <h2 class=""><a href="/admin/{{$user->id}}">{{ $user->name }}</a></h2>
            <h3>{{ $user->email }}</h3>
            <span class="badge badge-danger">{{ $user->password }}</span>

        </div>
    @endforeach
@endsection
