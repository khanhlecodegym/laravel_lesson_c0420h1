@extends('app')

@section('title', 'Services')

@section('content')

<h1>Tạo Học viên mới</h1>

<form action="/codegymer" method="post">
    @include('codegymer.form')

    <button class="btn btn-primary">Add CodeGymer</button>
</form>

@endsection
