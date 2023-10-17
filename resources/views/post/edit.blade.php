@extends('layouts.app')

@section('content')
    @include('post.form', ['account' => $account])
@endsection
