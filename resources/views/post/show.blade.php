@extends('layouts.app')

@section('content')
    <p class="fs-5">Email: {{$account->email}}</p>
    <p class="fs-5">Password: {{$account->password}}</p>
    <a href="{{route('posts.index')}}" class="btn btn-outline-secondary">Back</a>
@endsection
